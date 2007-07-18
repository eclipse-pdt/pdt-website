<?xml version="1.0" encoding="UTF-8"?>
<!-- 
    This XSLT stylesheet creates html redirects for WTP People pages.
    
    Change Log:
    
    2007-05-23: Bob Fraser <bfraser@bea.com>
    - Created.
-->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:person="http://eclipse.org/webtools/person" exclude-result-prefixes="person">
    <xsl:output method="xml" encoding="UTF-8" indent="yes" omit-xml-declaration="yes" />
    <xsl:template match="/person:person">
        <!-- We assume name/family-name in lowercase will be the same as the basename of the xml file.
            This may not be a safe assumption.
        -->
        <xsl:variable name="name" select="translate(person:name/person:family-name, 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 'abcdefghijklmnopqrstuvwxyz')" />
        <xsl:variable name="href" select="concat('person.php?name=', $name)" />
        <html>
            <head>
                <meta http-equiv="refresh">
                    <xsl:attribute name="content">
                        <xsl:value-of select="concat('0; ', $href)" />
                    </xsl:attribute>
                </meta>
            </head>
            <body>
                <a>
                    <xsl:attribute name="href">
                        <xsl:value-of select="$href" />
                    </xsl:attribute>
                    This document has moved
                </a>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
