<?xml version="1.0" encoding="UTF-8"?>

<!-- 
    This XSLT stylesheet renders the content for the WTP People index.
    
    Change Log:
    
    2007-05-03: Bob Fraser <bfraser@bea.com>
    - Cloned from contributors.xsl
    - Changed for use with the Phoenix look and feel
-->

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:person="http://eclipse.org/pdt/person" exclude-result-prefixes="person">

    <xsl:import href="commonnoentities.xsl" />

    <xsl:template match="/">
        <xsl:apply-templates />
    </xsl:template>

    <xsl:template match="person:people">
        <table>
            <tr>
                <td width="60%">
                    <h1>eclipse pdt contributors activity</h1>
                    <div class="wtpsubtitle">
                        <xsl:text>Eclipse PDT Project</xsl:text>
                        <br />
                        <xsl:text>Contributors Activity</xsl:text>
                    </div>
                </td>
                <td>
                    <img src="/webtools/images/wtplogosmall.jpg" align="middle" height="129" hspace="50" width="207" />
                </td>
            </tr>
        </table>
        <ul class="indent">
            <li>
                <a href="main.php">Contributor Index</a>
            </li>
        </ul>
        <h2 class="bar">Introduction</h2>
        <p>
            The following people are leaders, committers, and contributors to the Eclipse Web Tools Platform project.
            The list is sorted into four groups: extremely active, very active, active, and inactive. The groupings are
            strictly merit-based: the more you contribute, the more recognition you earn. Within each group, the people
            are listed alphabetically.
        </p>
        <p>
            If you are a contributor and have been missed from the list, or are in the wrong grouping, please get your
            <a href="http://www.eclipse.org/webtools/project-charter.html#pmc">team lead</a>
            to let us know.
        </p>

        <h2 class="bar">Extremely Active Contributors</h2>
        <p>
            An
            <em>extremely active</em>
            contributor is a full-time leader or committer, or someone on their way to becoming a committer.
        </p>
        <ul class="indent">
            <xsl:call-template name="extremely-active" />
        </ul>

        <h2 class="bar">Very Active Contributors</h2>
        <p>
            A
            <em>very active</em>
            contributor is a frequent contributor of bug reports, patches, articles, dicussions, or advice.
        </p>
        <ul class="indent">
            <xsl:call-template name="very-active" />
        </ul>

        <h2 class="bar">Active Contributors</h2>
        <p>
            An
            <em>active</em>
            contributor is someone who occasionally makes valuable contributions.
        </p>
        <ul class="indent">
            <xsl:call-template name="active" />
        </ul>

        <h2 class="bar">Inactive Contributors</h2>
        <p>
            An
            <em>inactive</em>
            contributor is someone who has made valuable contributions in the past, but who is now either temporarily
            inactive or has moved on to other projects.
        </p>
        <ul class="indent">
            <xsl:call-template name="inactive" />
        </ul>

    </xsl:template>

    <xsl:template name="extremely-active">
        <xsl:for-each select="person:contributor[@activity-level='extremely-active']">
            <xsl:call-template name="extremely-active-contributor">
                <xsl:with-param name="html"
                    select="concat('person.php?name=', substring(@href,1,string-length(@href)-4))" />
                <xsl:with-param name="person" select="document(@href)/person:person" />
            </xsl:call-template>
        </xsl:for-each>
    </xsl:template>

    <xsl:template name="extremely-active-contributor">
        <xsl:param name="html" />
        <xsl:param name="person" />
        <xsl:variable name="anchor-name">
            <xsl:call-template name="anchor-name">
                <xsl:with-param name="name" select="$person/person:name" />
            </xsl:call-template>
        </xsl:variable>
        <table width="100%">
            <tr>
                <td width="80%" valign="top">
                    <li>
                        <b>
                            <a name="{$anchor-name}" href="{$html}">
                                <xsl:call-template name="full-name">
                                    <xsl:with-param name="name" select="$person/person:name" />
                                </xsl:call-template>
                            </a>
                        </b>
                        <xsl:apply-templates select="$person" mode="detail" />
                        <br />
                        <xsl:apply-templates select="$person/person:contribution/*" mode="markup" />
                        <xsl:apply-templates select="$person/person:biography/*" mode="markup" />
                    </li>
                </td>
                <td valign="top">
                    <img alt="{$person/person:name/person:given-name} {$person/person:name/person:family-name}"
                        style="width: {$person/person:small-photo/@width}px; height: {$person/person:small-photo/@height}px;"
                        src="{$person/person:small-photo/@href}" align="right" hspace="3" vspace="3" />
                </td>
            </tr>
        </table>
    </xsl:template>

    <xsl:template name="very-active">
        <xsl:for-each select="person:contributor[@activity-level='very-active']">

            <xsl:call-template name="very-active-contributor">
                <xsl:with-param name="html"
                    select="concat('person.php?name=', substring(@href,1,string-length(@href)-4))" />
                <xsl:with-param name="person" select="document(@href)/person:person" />
            </xsl:call-template>

        </xsl:for-each>
    </xsl:template>

    <xsl:template name="very-active-contributor">
        <xsl:param name="html" />
        <xsl:param name="person" />
        <xsl:variable name="anchor-name">
            <xsl:call-template name="anchor-name">
                <xsl:with-param name="name" select="$person/person:name" />
            </xsl:call-template>
        </xsl:variable>
        <li>
            <b>
                <a name="{$anchor-name}" href="{$html}">
                    <xsl:call-template name="full-name">
                        <xsl:with-param name="name" select="$person/person:name" />
                    </xsl:call-template>
                </a>
            </b>
            <xsl:apply-templates select="$person" mode="detail" />
            <br />
            <xsl:apply-templates select="$person/person:contribution/*" mode="markup" />
            <xsl:apply-templates select="$person/person:biography/*" mode="markup" />
        </li>
    </xsl:template>

    <xsl:template name="active">
        <xsl:for-each select="person:contributor[@activity-level='active']">

            <xsl:call-template name="active-contributor">
                <xsl:with-param name="html"
                    select="concat('person.php?name=', substring(@href,1,string-length(@href)-4))" />
                <xsl:with-param name="person" select="document(@href)/person:person" />
            </xsl:call-template>

        </xsl:for-each>
    </xsl:template>

    <xsl:template name="active-contributor">
        <xsl:param name="html" />
        <xsl:param name="person" />
        <xsl:variable name="anchor-name">
            <xsl:call-template name="anchor-name">
                <xsl:with-param name="name" select="$person/person:name" />
            </xsl:call-template>
        </xsl:variable>
        <li>
            <b>
                <a name="{$anchor-name}" href="{$html}">
                    <xsl:call-template name="full-name">
                        <xsl:with-param name="name" select="$person/person:name" />
                    </xsl:call-template>
                </a>
            </b>
            <xsl:apply-templates select="$person" mode="detail" />
            <br />
            <xsl:apply-templates select="$person/person:contribution/*" mode="markup" />
        </li>
    </xsl:template>

    <xsl:template name="inactive">
        <xsl:for-each select="person:contributor[@activity-level='inactive']">

            <xsl:call-template name="inactive-contributor">
                <xsl:with-param name="html"
                    select="concat('person.php?name=', substring(@href,1,string-length(@href)-4))" />
                <xsl:with-param name="person" select="document(@href)/person:person" />
            </xsl:call-template>

        </xsl:for-each>
    </xsl:template>

    <xsl:template name="inactive-contributor">
        <xsl:param name="html" />
        <xsl:param name="person" />
        <xsl:variable name="anchor-name">
            <xsl:call-template name="anchor-name">
                <xsl:with-param name="name" select="$person/person:name" />
            </xsl:call-template>
        </xsl:variable>
        <li>
            <b>
                <a name="{$anchor-name}" href="{$html}">
                    <xsl:call-template name="full-name">
                        <xsl:with-param name="name" select="$person/person:name" />
                    </xsl:call-template>
                </a>
            </b>
            <xsl:apply-templates select="$person" mode="detail" />
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
