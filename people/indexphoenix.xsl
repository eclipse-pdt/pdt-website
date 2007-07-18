<?xml version="1.0" encoding="UTF-8"?>

<!-- 
    This XSLT stylesheet renders the content for the WTP Contributors page.
    
    Change Log:
    
    2005-05-13: Arthur Ryman <ryman@ca.ibm.com>
    - Refactored to use common.xsl.
    
    2005-05-08: Arthur Ryman <ryman@ca.ibm.com>
    - Created.
-->

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:person="http://eclipse.org/webtools/person" exclude-result-prefixes="person">

    <xsl:import href="commonnoentities.xsl" />

    <xsl:template match="/">
        <xsl:apply-templates />
    </xsl:template>

    <xsl:template match="person:people">
        <table>
            <tr>
                <td width="60%">
                    <h1>eclipse pdt contributors index</h1>
                    <div class="wtpsubtitle">
                        <xsl:text>Eclipse PDT Project</xsl:text>
                        <br />
                        <xsl:text>Contributors Index</xsl:text>
                    </div>
                </td>
            </tr>
        </table>
        <ul class="indent">
            <li>
                <a href="contributors.php">Contributor Activity</a>
            </li>
        </ul>
        <h2 class="bar">Alphabetical Index</h2>
        <ul class="indent">
            <xsl:apply-templates select="person:contributor" />
        </ul>
    </xsl:template>

    <xsl:template match="person:contributor">
        <xsl:variable name="xml" select="@href" />
        <xsl:variable name="base" select="substring($xml,1,string-length($xml)-4)" />
        <xsl:variable name="html" select="concat('person.php?name=', $base)" />
        <xsl:variable name="anchor-name">
            <xsl:call-template name="anchor-name">
                <xsl:with-param name="name" select="document(@href)/person:person/person:name" />
            </xsl:call-template>
        </xsl:variable>
        <li>
            <a name="{$anchor-name}" href="{$html}">
                <xsl:call-template name="full-name">
                    <xsl:with-param name="name" select="document(@href)/person:person/person:name" />
                </xsl:call-template>
            </a>
            <xsl:apply-templates select="document(@href)" mode="detail" />
        </li>
    </xsl:template>

    <xsl:template match="person:person" mode="detail">
        <xsl:text>, </xsl:text>
        <xsl:value-of select="person:affiliation" />
        <xsl:text> - </xsl:text>
        <xsl:call-template name="role-description">
            <xsl:with-param name="role" select="person:contribution/@role" />
        </xsl:call-template>
    </xsl:template>

</xsl:stylesheet>
