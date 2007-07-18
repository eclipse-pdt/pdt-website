<?xml version="1.0" encoding="UTF-8"?>

<!-- 
    This XSLT stylesheet contains common definitions for rendering the WTP People pages.
    
    Change Log:
    
    2005-05-13: Arthur Ryman <ryman@ca.ibm.com>
    - Cloned from people.xsl.
-->

<xsl:stylesheet version="1.0"
    xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:person="http://eclipse.org/webtools/person"
    exclude-result-prefixes="person">

    <xsl:template name="replace-all">
        <xsl:param name="text" />
        <xsl:param name="old" />
        <xsl:param name="new" />
		<xsl:variable name="prefix" select="substring-before($text,$old)"/>
		<xsl:variable name="tail" select="substring($text, string-length($prefix)+1)"/>
        <xsl:choose>
            <xsl:when test="starts-with($tail,$old)">
				<xsl:variable name="suffix" select="substring-after($text,$old)"/>
                <xsl:variable name="new-suffix">
                    <xsl:call-template name="replace-all">
						<xsl:with-param name="text" select="$suffix" />
						<xsl:with-param name="old" select="$old" />
						<xsl:with-param name="new" select="$new" />
                    </xsl:call-template>
                </xsl:variable>
                <xsl:value-of select="concat($prefix,$new,$new-suffix)" />
            </xsl:when>
            <xsl:otherwise>
                <xsl:value-of select="$text" />
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <xsl:template name="obfuscate-email">
        <xsl:param name="email" />
        <xsl:variable name="email1">
            <xsl:call-template name="replace-all">
				<xsl:with-param name="text" select="$email" />
				<xsl:with-param name="old" select="'.'" />
				<xsl:with-param name="new" select="'&#160;dot&#160;'" />
            </xsl:call-template>
        </xsl:variable>
        <xsl:call-template name="replace-all">
			<xsl:with-param name="text" select="$email1" />
			<xsl:with-param name="old" select="'@'" />
			<xsl:with-param name="new" select="'&#160;at&#160;'" />
        </xsl:call-template>
    </xsl:template>

    <xsl:template name="role-description">
        <xsl:param name="role" />
        <xsl:choose>
            <xsl:when test="$role = 'pmc-lead'">
                <xsl:text>PMC Lead</xsl:text>
            </xsl:when>
            <xsl:when test="$role = 'pmc-member'">
                <xsl:text>PMC Member</xsl:text>
            </xsl:when>
            <xsl:when test="$role = 'component-lead'">
                <xsl:text>Component or Subproject Lead</xsl:text>
            </xsl:when>
            <xsl:when test="$role = 'committer'">
                <xsl:text>Committer</xsl:text>
            </xsl:when>
            <xsl:when test="$role = 'contributor'">
                <xsl:text>Contributor</xsl:text>
            </xsl:when>
            <xsl:when test="$role = 'past-pmc-member'">
                <xsl:text>Past PMC Member</xsl:text>
            </xsl:when>
            <xsl:when test="$role = 'past-committer'">
                <xsl:text>Past Committer</xsl:text>
            </xsl:when>
            <xsl:when test="$role = 'past-contributor'">
                <xsl:text>Past Contributor</xsl:text>
            </xsl:when>
            <xsl:when test="$role = 'past-component-lead'">
                <xsl:text>Past Lead</xsl:text>
            </xsl:when>
            <xsl:otherwise>
                <xsl:text>Unknown Role</xsl:text>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>

    <xsl:template name="full-name">
        <xsl:param name="name" />
		<xsl:value-of
			select="$name/person:given-name" />
        <xsl:text>&#160;</xsl:text>
		<xsl:value-of
			select="$name/person:family-name" />
    </xsl:template>

    <xsl:template name="anchor-name">
        <xsl:param name="name" />
        <xsl:variable name="full-name">
            <xsl:call-template name="full-name">
				<xsl:with-param name="name" select="$name" />
            </xsl:call-template>
        </xsl:variable>
        <xsl:value-of select="translate($full-name, ' &#160;','--')" />
    </xsl:template>

    <xsl:template name="lower-case">
        <xsl:param name="text" />
		<xsl:value-of
			select="translate($text,
		'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
		'abcdefghijklmnopqrstuvwxyz' )" />
    </xsl:template>

    <xsl:template name="footer">
        <br />
        <br />
        <br />
        <p>
            Please see our
			<a href="http://eclipse.org/legal/privacy.html" target="_top">privacy policy</a>
            and website
			<a href="http://eclipse.org/legal/termsofuse.html" target="_top">terms of use</a>. 
			For problems with the eclipse.org site, please contact the
            <a href="mailto:webmaster@eclipse.org">webmaster</a>
            or read the
			<a href="http://eclipse.org/webmaster/index.html" target="_top">webmaster FAQ</a>
            for answers to common questions!
        </p>
    </xsl:template>

	<xsl:template match="*|@*|text()" mode="markup">
        <xsl:copy>
			<xsl:apply-templates select="*|@*|text()" mode="markup" />
        </xsl:copy>
    </xsl:template>

</xsl:stylesheet>
