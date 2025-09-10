<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	version="1.0" exclude-result-prefixes="pdt" xmlns:pdt="http://eclipse.org/pdt/schema/releases">
	<xsl:output method="html" doctype-system="about:legacy-compat" />
	<xsl:variable name="title" select="/rss/channel/title" />
	<xsl:variable name="feedUrl" select="/rss/channel/atom10:link[@rel='self']/@href"
		xmlns:atom10="http://www.w3.org/2005/Atom" />
	<xsl:template match="/">
		<xsl:element name="html">
			<head>
				<title>
					<xsl:value-of select="$title" />
				</title>
				<link href="css/foundation.min.css" rel="stylesheet" type="text/css"
					media="all" />
				<link rel="alternate" type="application/rss+xml" title="{$title}" href="{$feedUrl}" />
			</head>
			<xsl:apply-templates select="rss/channel" />
		</xsl:element>
	</xsl:template>
	<xsl:template match="channel">
		<body>
			<nav class="top-bar">
				<ul class="title-area">
					<li class="name"></li>
				</ul>
				<div class="top-bar-section">
					<!-- Left Nav Section -->
					<ul class="left">
						<li>
							<a href="https://eclipse.org/pdt/#about">
								<span>About</span>
							</a>
						</li>
						<li>
							<a href="https://eclipse.org/pdt/#features">
								<span>Features</span>
							</a>
						</li>
						<li>
							<a href="https://eclipse.org/pdt/#download">
								<span>Download</span>
							</a>
						</li>
						<li>
							<a href="https://eclipse.org/pdt/#docs">
								<span>Docs</span>
							</a>
						</li>
						<li>
							<a href="https://eclipse.org/pdt/#extensions">
								<span>Extensions</span>
							</a>
						</li>
						<li>
							<a href="https://eclipse.org/pdt/#contributing">
								<span>Contributing</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="row">
				<div class="large-12 columns">
					<xsl:apply-templates select="image" />
					<h1 style="padding: 30px 0px;">
						<xsl:choose>
							<xsl:when test="link">
								<a href="{normalize-space(link)}" title="Link to original website">
									<xsl:value-of select="$title" />
								</a>
							</xsl:when>
							<xsl:otherwise>
								<xsl:value-of select="$title" />
							</xsl:otherwise>
						</xsl:choose>
					</h1>
					<p class="clearfix" />
				</div>
			</div>
			<div class="row">
				<div class="large-12 columns">
					<h2>
						News
					</h2>
					<xsl:apply-templates select="item" />
				</div>
			</div>
			<div class="row">
				<div class="small-12 large-centered columns">
					<dl class="sub-nav">
						<dt></dt>
						<dd>
							<a href="https://eclipse.org">Home</a>
						</dd>
						<dt></dt>
						<dd>
							<a href="https://eclipse.org/legal/privacy.php">Privacy Policy</a>
						</dd>
						<dt></dt>
						<dd>
							<a href="https://eclipse.org/legal/termsofuse.php">Terms of Use</a>
						</dd>
						<dt></dt>
						<dd>
							<a href="https://eclipse.org/legal/copyright.php">Copyright Agent</a>
						</dd>
						<dt></dt>
						<dd>
							<a href="https://eclipse.org/legal/">Legal</a>
						</dd>
						<dt></dt>
						<dd>
							<a href="https://eclipse.org/org/foundation/contact.php">Contact Us</a>
						</dd>
						<dt></dt>
						<dd>Copyright © 2015 The Eclipse Foundation. All Rights Reserved.</dd>
					</dl>
				</div>
			</div>
			<script src="js/vendor/modernizr.js"></script>
			<script src="js/vendor/jquery.js"></script>
			<script src="js/foundation.min.js"></script>
		</body>
	</xsl:template>
	<xsl:template match="item" xmlns:dc="http://purl.org/dc/elements/1.1/">
		<div class="row">
			<div class="large-12 columns panel item">
				<h3>
					<a href="{normalize-space(link)}">
						<xsl:value-of select="title" />
					</a>
				</h3>
				<h5>
					<xsl:if test="count(child::pubDate)=1">
						<span>Posted:</span>
						<xsl:value-of select="pubDate" />
					</xsl:if>
					<xsl:if test="count(child::dc:date)=1">
						<span>Posted:</span>
						<xsl:value-of select="dc:date" />
					</xsl:if>
				</h5>
				<div class="itemcontent" name="decodeable">
					<xsl:call-template name="outputContent" />
				</div>

				<xsl:if test="pdt:release='true'">
					<p>
						<xsl:if test="pdt:nn">
							<a href="{normalize-space(pdt:nn)}" class="button radius tiny" style="margin-right: 10px;">
								News &amp; Noteworthy
							</a>
						</xsl:if>
						<xsl:if test="pdt:p2">
							<a href="{normalize-space(pdt:p2)}" class="button radius tiny">
								Download
							</a>
						</xsl:if>
					</p>
				</xsl:if>
			</div>
		</div>
	</xsl:template>
	<xsl:template match="image">
		<a href="{normalize-space(link)}" title="Link to original website" style="float: right">
			<img src="{url}" alt="{title}" style="height: 100px; margin: 20px 0px 10px 20px;" />
		</a>
		<xsl:text />
	</xsl:template>
	<xsl:template name="outputContent">
		<xsl:choose>
			<xsl:when xmlns:xhtml="http://www.w3.org/1999/xhtml" test="xhtml:body">
				<xsl:copy-of select="xhtml:body/*" />
			</xsl:when>
			<xsl:when xmlns:xhtml="http://www.w3.org/1999/xhtml" test="xhtml:div">
				<xsl:copy-of select="xhtml:div" />
			</xsl:when>
			<xsl:when test="description">
				<p>
					<xsl:value-of select="description" disable-output-escaping="yes" />
				</p>
			</xsl:when>
		</xsl:choose>
	</xsl:template>
</xsl:stylesheet>
