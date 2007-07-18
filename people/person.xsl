<?xml version="1.0" encoding="UTF-8"?>

<!-- 
	This XSLT stylesheet renders the content for WTP People pages.
	
	Change Log:
	
	2005-05-13: Arthur Ryman <ryman@ca.ibm.com>
	- Refactored to use common.xsl.
	
	2005-05-02: Arthur Ryman <ryman@ca.ibm.com>
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

	<xsl:template match="person:person">
		<xsl:processing-instruction name="xml-stylesheet">
			type="text/xsl" href="../wtp.xsl"
		</xsl:processing-instruction>
		<xsl:variable name="anchor-name">
			<xsl:call-template name="anchor-name">
				<xsl:with-param name="name" select="person:name"/>
			</xsl:call-template>
		</xsl:variable>
		<html>
			<head>
				<title>
					<xsl:call-template name="title" />
				</title>
				<meta name="root" content="../../" />
			</head>
			<body>
				<h1>
					<xsl:call-template name="heading" />
				</h1>
				<xsl:call-template name="large-photo" />
				<xsl:call-template name="contact" />
				<xsl:call-template name="bugs" />
				<xsl:call-template name="contribution" />
				<xsl:call-template name="biography" />
				<br />
				<h3><a href="contributors.html#{$anchor-name}">Contributor Activity</a></h3>
				<h3><a href="index.html#{$anchor-name}">Contributor Index</a></h3>				
				<xsl:call-template name="footer" />
			</body>
		</html>
	</xsl:template>

	<xsl:template name="title">
		<xsl:text>
			Eclipse Web Tool Platform Project Team -&#160;
		</xsl:text>
		<xsl:call-template name="role-description">
			<xsl:with-param name="role"
				select="/person:person/person:contribution/@role" />
		</xsl:call-template>
		<xsl:text>&#160;-&#160;</xsl:text>
		<xsl:call-template name="full-name">
			<xsl:with-param name="name"
				select="/person:person/person:name" />
		</xsl:call-template>
	</xsl:template>

	<xsl:template name="heading">
		<xsl:call-template name="lower-case">
			<xsl:with-param name="text">
				<xsl:call-template name="full-name">
					<xsl:with-param name="name"
						select="/person:person/person:name" />
				</xsl:call-template>
				<xsl:text>&#160;@ eclipse wtp</xsl:text>
			</xsl:with-param>
		</xsl:call-template>
	</xsl:template>

	<xsl:template name="large-photo">
		<xsl:choose>
			<xsl:when test="person:large-photo">
				<xsl:apply-templates select="person:large-photo" />
			</xsl:when>
		</xsl:choose>
	</xsl:template>

	<xsl:template match="person:large-photo">
		<img src="{@href}" width="{@width}" height="{@height}" />
	</xsl:template>

	<xsl:template name="contribution">
		<h2>Contribution</h2>
		<xsl:apply-templates select="person:contribution" />
	</xsl:template>

	<xsl:template match="person:contribution">
		<xsl:apply-templates mode="markup" />
	</xsl:template>

	<xsl:template name="biography">
		<h2>Biography</h2>
		<xsl:apply-templates select="person:biography" />
	</xsl:template>

	<xsl:template match="person:biography">
		<xsl:apply-templates mode="markup" />
	</xsl:template>
	
	<xsl:template name="bugs">
		<xsl:if test="person:e-mail">
			<script language="JavaScript">
				<xsl:text>var user = "</xsl:text>
				<xsl:value-of
					select="substring-before(person:e-mail,'@')" />
				<xsl:text>";</xsl:text>
				<xsl:text>var server = "</xsl:text>
				<xsl:value-of
					select="substring-after(person:e-mail,'@')" />
				<xsl:text>";</xsl:text>
				<xsl:text>
					<![CDATA[
var bugzilla = "https://bugs.eclipse.org/bugs/buglist.cgi?classification=WebTools";

function bugsIReported() { 
	var query_string = "&emailreporter1=1&emailtype1=substring&email1=";
	window.open(bugzilla + query_string + user + "@" +
	server, "_top"); 
}

function bugsIOwn() { 
	var query_string = "&emailassigned_to1=1&emailtype1=substring&email1=";
	window.open(bugzilla + query_string + user + "@" + server, "_top"); 
}

function bugsINeedToConfirm() { 
	var query_string = "&bug_status=UNCONFIRMED&emailassigned_to1=1&emailtype1=substring&email1=";
	window.open(bugzilla + query_string + user + "@" + server, "_top"); 
}

function bugsINeedToResolve() { 
	var query_string = "&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailassigned_to1=1&emailtype1=substring&email1=";
	window.open(bugzilla + query_string + user + "@" + server, "_top"); 
}

function bugsINeedToVerify() { 
	var query_string = "&bug_status=RESOLVED&emailreporter1=1&emailtype1=substring&email1=";
	window.open(bugzilla + query_string + user + "@" + server, "_top"); 
}

function bugsINeedToClose() { 
	var query_string = "&bug_status=VERIFIED&emailassigned_to1=1=1&emailtype1=substring&email1=";
	window.open(bugzilla + query_string + user + "@" + server, "_top"); 
}
					]]>
				</xsl:text>
			</script>
			<h2>Bugs</h2>
			<h3>
				<a href="javascript:bugsIReported()">Bugs I Reported</a>
			</h3>
			<h3>
				<a href="javascript:bugsINeedToVerify()">
					Bugs I Need to Verify
				</a>
			</h3>
			<h3>
				<a href="javascript:bugsIOwn()">Bugs I Own</a>
			</h3>
			<h3>
				<a href="javascript:bugsINeedToConfirm()">
					Bugs I Need to Confirm
				</a>
			</h3>
			<h3>
				<a href="javascript:bugsINeedToResolve()">
					Bugs I Need to Resolve
				</a>
			</h3>
			<h3>
				<a href="javascript:bugsINeedToClose()">
					Bugs I Need to Close
				</a>
			</h3>
		</xsl:if>

	</xsl:template>

	<xsl:template match="person:affiliation">
		<a href="{@href}" target="_top">
			<xsl:value-of select="." />
		</a>
	</xsl:template>

	<xsl:template name="contact">
		<h3>
			<b>Affiliation:&#160;</b>
			<xsl:choose>
				<xsl:when test="person:affiliation">
					<xsl:apply-templates select="person:affiliation" />
				</xsl:when>
				<xsl:otherwise>n/a</xsl:otherwise>
			</xsl:choose>
		</h3>
		<h3>
			<b>E-mail:&#160;</b>
			<xsl:choose>
				<xsl:when test="person:e-mail">
					<script language="JavaScript">
						<xsl:text>var protocol = "mailto";</xsl:text>
						<xsl:text>
							function contact() { window.open(protocol +
							":" + user + "@" + server, "_self"); }
						</xsl:text>
					</script>
					<a href="javascript:contact()">
						<xsl:call-template name="obfuscate-email">
							<xsl:with-param name="email"
								select="person:e-mail" />
						</xsl:call-template>
					</a>
				</xsl:when>
				<xsl:otherwise>n/a</xsl:otherwise>
			</xsl:choose>
		</h3>
		<h3>
			<b>Home page:&#160;</b>
			<xsl:choose>
				<xsl:when test="person:home-page/@href">
					<a href="{person:home-page/@href}" target="_top">
						<xsl:value-of select="person:home-page/@href" />
					</a>
				</xsl:when>
				<xsl:otherwise>n/a</xsl:otherwise>
			</xsl:choose>
		</h3>
	</xsl:template>

</xsl:stylesheet>
