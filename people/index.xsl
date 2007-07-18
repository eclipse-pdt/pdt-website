<?xml version="1.0" encoding="UTF-8"?>

<!-- 
	This XSLT stylesheet renders the content for the WTP Contributors page.
	
	Change Log:
	
	2005-05-13: Arthur Ryman <ryman@ca.ibm.com>
	- Refactored to use common.xsl.
	
	2005-05-08: Arthur Ryman <ryman@ca.ibm.com>
	- Created.
-->

<xsl:stylesheet version="1.0"
	xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
	xmlns:person="http://eclipse.org/pdt/person"
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
				<title>Eclipse PDT Project - Contributors - Index</title>
				<meta name="root" content="../../" />
			</head>
			<body>
				<h1>eclipse pdt contributors index</h1>
				<h3><a href="contributors.html">Contributor Activity</a></h3>
				<br />
				<h2>Alphabetical Index</h2>
				<xsl:apply-templates select="person:contributor"/>
				<xsl:call-template name="footer" />
			</body>
		</html>
	</xsl:template>
	
	<xsl:template match="person:contributor">
		<xsl:variable name="xml" select="@href" />
		<xsl:variable name="base"
			select="substring($xml,1,string-length($xml)-4)" />
		<xsl:variable name="html" select="concat($base,'.html')" />
		<xsl:variable name="anchor-name">
			<xsl:call-template name="anchor-name">
				<xsl:with-param name="name" select="document(@href)/person:person/person:name"/>
			</xsl:call-template>
		</xsl:variable>
		<h3>
			<a name="{$anchor-name}" href="{$html}">
				<xsl:call-template name="full-name">
					<xsl:with-param name="name"
						select="document(@href)/person:person/person:name" />
				</xsl:call-template>
			</a>
			<xsl:apply-templates select="document(@href)" mode="detail" />
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
