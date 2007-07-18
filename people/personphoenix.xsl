<?xml version="1.0" encoding="UTF-8"?>

<!-- 
    This XSLT stylesheet renders the content for WTP People pages.
    
    Change Log:
    
    2007-05-01: Bob Fraser <bfraser@bea.com>
    - Original code stolen from Arthur Ryman <ryman@ca.ibm.com>
    - Modified for use with Phoenix look and feel
    
-->

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:person="http://eclipse.org/webtools/person" exclude-result-prefixes="person">

    <xsl:import href="commonnoentities.xsl" />

    <xsl:template match="/">
        <xsl:apply-templates />
    </xsl:template>

    <xsl:template match="person:person">
        <xsl:variable name="anchor-name">
            <xsl:call-template name="anchor-name">
                <xsl:with-param name="name" select="person:name" />
            </xsl:call-template>
        </xsl:variable>
        <xsl:call-template name="heading" />
        <xsl:call-template name="large-photo" />
        <xsl:call-template name="contact" />
        <xsl:call-template name="bugs" />
        <xsl:call-template name="contribution" />
        <xsl:call-template name="biography" />
        <ul class="indent">
            <li>
                <a href="contributors.php#{$anchor-name}">Contributor Activity</a>
            </li>
            <li>
                <a href="main.php#{$anchor-name}">Contributor Index</a>
            </li>
        </ul>
    </xsl:template>

    <xsl:template name="title">
        <xsl:text>Eclipse PDT Project Team</xsl:text>
        <br />
        <xsl:call-template name="role-description">
            <xsl:with-param name="role" select="/person:person/person:contribution/@role" />
        </xsl:call-template>
        <br />
        <xsl:call-template name="full-name">
            <xsl:with-param name="name" select="/person:person/person:name" />
        </xsl:call-template>
    </xsl:template>

    <xsl:template name="heading">
        <table>
            <tr>
                <td width="60%">
                    <h1>
                        <xsl:call-template name="lower-case">
                            <xsl:with-param name="text">
                                <xsl:call-template name="full-name">
                                    <xsl:with-param name="name" select="/person:person/person:name" />
                                </xsl:call-template>
                                <xsl:text> @ eclipse wtp</xsl:text>
                            </xsl:with-param>
                        </xsl:call-template>
                    </h1>
                    <div class="wtpsubtitle">
                        <xsl:call-template name="title" />
                    </div>
                </td>
            </tr>
        </table>
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
        <h2 class="bar">Contribution</h2>
        <xsl:apply-templates select="person:contribution" />
    </xsl:template>

    <xsl:template match="person:contribution">
        <xsl:apply-templates mode="markup" />
    </xsl:template>

    <xsl:template name="biography">
        <h2 class="bar">Biography</h2>
        <xsl:apply-templates select="person:biography" />
    </xsl:template>

    <xsl:template match="person:biography">
        <xsl:apply-templates mode="markup" />
    </xsl:template>

    <xsl:template name="bugs">
        <xsl:if test="person:e-mail">
            <script language="JavaScript">
                <xsl:text>var user = "</xsl:text>
                <xsl:value-of select="substring-before(person:e-mail,'@')" />
                <xsl:text>";</xsl:text>
                <xsl:text>var server = "</xsl:text>
                <xsl:value-of select="substring-after(person:e-mail,'@')" />
                <xsl:text>";</xsl:text>
                <xsl:text>
                    <![CDATA[
var bugzilla = "https://bugs.eclipse.org/bugs/buglist.cgi?product=PDT";

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
            <h2 class="bar">Bugs</h2>
            <ul class="indent">
                <li>
                    <a href="javascript:bugsIReported()">Bugs I Reported</a>
                </li>
                <li>
                    <a href="javascript:bugsINeedToVerify()">Bugs I Need to Verify</a>
                </li>
                <li>
                    <a href="javascript:bugsIOwn()">Bugs I Own</a>
                </li>
                <li>
                    <a href="javascript:bugsINeedToConfirm()">Bugs I Need to Confirm</a>
                </li>
                <li>
                    <a href="javascript:bugsINeedToResolve()">Bugs I Need to Resolve</a>
                </li>
                <li>
                    <a href="javascript:bugsINeedToClose()">Bugs I Need to Close</a>
                </li>
            </ul>
        </xsl:if>
    </xsl:template>

    <xsl:template match="person:affiliation">
        <a href="{@href}" target="_top">
            <xsl:value-of select="." />
        </a>
    </xsl:template>

    <xsl:template name="contact">
        <h2 class="bar">Contact</h2>
        <ul class="indent">
            <li>
                <b>Affiliation: </b>
                <xsl:choose>
                    <xsl:when test="person:affiliation">
                        <xsl:apply-templates select="person:affiliation" />
                    </xsl:when>
                    <xsl:otherwise>n/a</xsl:otherwise>
                </xsl:choose>
            </li>
            <li>
                <b>E-mail: </b>
                <xsl:choose>
                    <xsl:when test="person:e-mail">
                        <script language="JavaScript">
                            <xsl:text>var protocol = "mailto";</xsl:text>
                            <xsl:text>
                                function contact() { window.open(protocol + ":" + user + "@" + server, "_self"); }
                            </xsl:text>
                        </script>
                        <a href="javascript:contact()">
                            <xsl:call-template name="obfuscate-email">
                                <xsl:with-param name="email" select="person:e-mail" />
                            </xsl:call-template>
                        </a>
                    </xsl:when>
                    <xsl:otherwise>n/a</xsl:otherwise>
                </xsl:choose>
            </li>
            <li>
                <b>Home page: </b>
                <xsl:choose>
                    <xsl:when test="person:home-page/@href">
                        <a href="{person:home-page/@href}" target="_top">
                            <xsl:value-of select="person:home-page/@href" />
                        </a>
                    </xsl:when>
                    <xsl:otherwise>n/a</xsl:otherwise>
                </xsl:choose>
            </li>
        </ul>
    </xsl:template>

</xsl:stylesheet>
