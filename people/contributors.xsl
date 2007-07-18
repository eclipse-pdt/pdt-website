<?xml version="1.0" encoding="UTF-8"?>

<!-- 
	This XSLT stylesheet renders the content for the WTP People index.
	
	Change Log:
	
	2005-05-13: Arthur Ryman <ryman@ca.ibm.com>
	- Refactored to use common.xsl.
	
	2005-05-08: Arthur Ryman <ryman@ca.ibm.com>
	- Created.
-->

<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	xmlns:person="http://eclipse.org/webtools/person"
	exclude-result-prefixes="person">

	<xsl:import href="common.xsl" />

	<xsl:output method="xml" encoding="UTF-8" />

	<xsl:template match="/">
		<xsl:apply-templates />
	</xsl:template>

	<xsl:template match="person:people">
		<xsl:processing-instruction name="xml-stylesheet">
			type="text/xsl" href="../wtp.xsl"
		</xsl:processing-instruction>
		<html>
			<head>
				<title>Eclipse Web Tools Platform Project - Contributors - Activity</title>
				<meta name="root" content="../../" />
			</head>
			<body>
				<h1>eclipse wtp contributors activity</h1>
				<h3><a href="index.html">Contributor Index</a></h3>				
				<br />
				<h2>Introduction</h2>
				<p>
					The following people are leaders, committers, and contributors
					to the Eclipse Web Tools Platform project. The list is sorted into
					four groups: extremely active, very active, active,
					and inactive. The groupings are strictly
					merit-based: the more you contribute, the more
					recognition you earn. Within each group, the people
					are listed alphabetically.
				</p>
				<p>
					If you are a contributor and have been missed from
					the list, or are in the wrong grouping, please get
					your
					<a
						href="http://www.eclipse.org/webtools/project-charter.html#pmc">team lead</a>
					to let us know.
				</p>
				
				<h2>Extremely Active Contributors</h2>
				<p>
					An <em>extremely active</em> contributor is a full-time
					leader or committer, or someone on their way to
					becoming a committer.
				</p>
				<xsl:call-template name="extremely-active" />
				
				<h2>Very Active Contributors</h2>
				<p>
					A <em>very active</em> contributor is a frequent contributor of bug reports, patches, articles,
					dicussions, or advice.
				</p>
				<xsl:call-template name="very-active" />
				
				<h2>Active Contributors</h2>
				<p>
					An
					<em>active</em>
					contributor is someone who occasionally makes
					valuable contributions.
				</p>
				<xsl:call-template name="active" />
				
				<h2>Inactive Contributors</h2>
				<p>
					An
					<em>inactive</em>
					contributor is someone who has made valuable
					contributions in the past, but who is now either
					temporarily inactive or has moved on to other
					projects.
				</p>
				<xsl:call-template name="inactive" />
				
				<xsl:call-template name="footer" />
			</body>
		</html>
	</xsl:template>
	
	<xsl:template name="extremely-active">
		<xsl:for-each
			select="person:contributor[@activity-level='extremely-active']">

			<xsl:call-template name="extremely-active-contributor">
				<xsl:with-param name="html" select="concat(substring(@href,1,string-length(@href)-4),'.html')"/>
				<xsl:with-param name="person" select="document(@href)/person:person"/>
			</xsl:call-template>
					
		</xsl:for-each>
	</xsl:template>
	
	<xsl:template name="extremely-active-contributor">
		<xsl:param name="html"/>
		<xsl:param name="person"/>
		<xsl:variable name="anchor-name">
			<xsl:call-template name="anchor-name">
				<xsl:with-param name="name" select="$person/person:name"/>
			</xsl:call-template>
		</xsl:variable>
		<h3>
			<img
				alt="{$person/person:name/person:given-name} {$person/person:name/person:family-name}"
				style="width: {$person/person:small-photo/@width}px; height: {$person/person:small-photo/@height}px;"
				src="{$person/person:small-photo/@href}" align="right" hspace="3"
				vspace="3" />
			<b>
				<a name="{$anchor-name}" href="{$html}">
					<xsl:call-template name="full-name">
						<xsl:with-param name="name"
							select="$person/person:name" />
					</xsl:call-template>
				</a>
			</b>
			<xsl:apply-templates select="$person" mode="detail" />
			<br />
			<xsl:apply-templates select="$person/person:contribution/*"
				mode="markup" />
			<xsl:apply-templates select="$person/person:biography/*"
				mode="markup" />
		</h3>
	</xsl:template>
	
	<xsl:template name="very-active">
		<xsl:for-each
			select="person:contributor[@activity-level='very-active']">

			<xsl:call-template name="very-active-contributor">
				<xsl:with-param name="html" select="concat(substring(@href,1,string-length(@href)-4),'.html')"/>
				<xsl:with-param name="person" select="document(@href)/person:person"/>
			</xsl:call-template>
					
		</xsl:for-each>
	</xsl:template>
	
	<xsl:template name="very-active-contributor">
		<xsl:param name="html"/>
		<xsl:param name="person"/>
		<xsl:variable name="anchor-name">
			<xsl:call-template name="anchor-name">
				<xsl:with-param name="name" select="$person/person:name"/>
			</xsl:call-template>
		</xsl:variable>
		<h3>
			<b>
				<a name="{$anchor-name}" href="{$html}">
					<xsl:call-template name="full-name">
						<xsl:with-param name="name"
							select="$person/person:name" />
					</xsl:call-template>
				</a>
			</b>
			<xsl:apply-templates select="$person" mode="detail" />
			<br />
			<xsl:apply-templates select="$person/person:contribution/*"
				mode="markup" />
			<xsl:apply-templates select="$person/person:biography/*"
				mode="markup" />
		</h3>
	</xsl:template>
	
	<xsl:template name="active">
		<xsl:for-each
			select="person:contributor[@activity-level='active']">

			<xsl:call-template name="active-contributor">
				<xsl:with-param name="html" select="concat(substring(@href,1,string-length(@href)-4),'.html')"/>
				<xsl:with-param name="person" select="document(@href)/person:person"/>
			</xsl:call-template>
					
		</xsl:for-each>
	</xsl:template>
	
	<xsl:template name="active-contributor">
		<xsl:param name="html"/>
		<xsl:param name="person"/>
		<xsl:variable name="anchor-name">
			<xsl:call-template name="anchor-name">
				<xsl:with-param name="name" select="$person/person:name"/>
			</xsl:call-template>
		</xsl:variable>
		<h3>
			<b>
				<a name="{$anchor-name}" href="{$html}">
					<xsl:call-template name="full-name">
						<xsl:with-param name="name"
							select="$person/person:name" />
					</xsl:call-template>
				</a>
			</b>
			<xsl:apply-templates select="$person" mode="detail" />
			<br />
			<xsl:apply-templates select="$person/person:contribution/*"
				mode="markup" />
		</h3>
	</xsl:template>
	
	<xsl:template name="inactive">
		<xsl:for-each
			select="person:contributor[@activity-level='inactive']">

			<xsl:call-template name="inactive-contributor">
				<xsl:with-param name="html" select="concat(substring(@href,1,string-length(@href)-4),'.html')"/>
				<xsl:with-param name="person" select="document(@href)/person:person"/>
			</xsl:call-template>
					
		</xsl:for-each>
	</xsl:template>
	
	<xsl:template name="inactive-contributor">
		<xsl:param name="html" />
		<xsl:param name="person" />
		<xsl:variable name="anchor-name">
			<xsl:call-template name="anchor-name">
				<xsl:with-param name="name" select="$person/person:name"/>
			</xsl:call-template>
		</xsl:variable>
		<h3>
			<b>
				<a name="{$anchor-name}" href="{$html}">
					<xsl:call-template name="full-name">
						<xsl:with-param name="name"
							select="$person/person:name" />
					</xsl:call-template>
				</a>
			</b>
			<xsl:apply-templates select="$person" mode="detail" />
		</h3>
	</xsl:template>

	<xsl:template match="person:person" mode="detail">
		<xsl:text>,&#160;</xsl:text>
		<xsl:value-of select="person:affiliation" />
		<xsl:text>&#160;-&#160;</xsl:text>
		<xsl:call-template name="role-description">
			<xsl:with-param name="role" select="person:contribution/@role" />
		</xsl:call-template>
	</xsl:template>

</xsl:stylesheet>
