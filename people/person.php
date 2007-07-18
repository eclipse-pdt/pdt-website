<?php
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/app.class.php") ;
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/nav.class.php") ;
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/menu.class.php") ;
$App = new App ( ) ;
$Nav = new Nav ( ) ;
$Menu = new Menu ( ) ;
include ($App->getProjectCommon ()) ; # All on the same line to unclutter the user's desktop'
$pageKeywords = "" ;
$pageAuthor = "Bob Fraser" ;

$root = $_SERVER [ 'DOCUMENT_ROOT' ] ;


function getCleanXMLFilename ( $userName ) {
	// Takes userName and returns "userName.xml" or null if userName is not well formed.
	// userName must contain only a-z and '-' characters
	if (preg_match ( '/[^a-z\-]/', $userName )) {
		return null ;
	}
	//Don't try to get xml files that aren't real people
	if ($userName == "people" || $userName == "build") {
		return null ;
	}
	return ($userName . '.xml') ;
}

# Generate the web page


//Set the initial page title
$pageTitle = "Eclipse PDT Project Team" ;

// Get an untainted copy of username suffixed with '.xml'.
$cleanXMLFilename = getCleanXMLFilename ( $App->getHTTPParameter ( "name" ) ) ;

if ($cleanXMLFilename != null && file_exists ( $cleanXMLFilename )) {
	// Load the XML source
	$xml = DOMDocument::load ( $cleanXMLFilename ) ;
	
	//Set the page title
	$pageTitle = "Eclipse PDT Project Team" ;
	$xpath = new DOMXPath ( $xml ) ;
	$givenNameNode = $xpath->query ( "/person:person/person:name/person:given-name" )->item ( 0 ) ;
	$familyNameNode = $xpath->query ( "/person:person/person:name/person:family-name" )->item ( 0 ) ;
	
	if ($givenNameNode != null && $familyNameNode != null) {
		$pageTitle .= ' - ' . $givenNameNode->nodeValue . ' ' . $familyNameNode->nodeValue ;
	}
	
	// Load the XSL source
	$xsl = DOMDocument::load ( $root . '/pdt/people/personphoenix.xsl' ) ;
	
	// Configure the transformer
	$proc = new XSLTProcessor ( ) ;
	$proc->importStyleSheet ( $xsl ) ; // attach the xsl rules
	$maincontent = $proc->transformToXML ( $xml ) ;
} else {
	$maincontent = <<<EOHTML
<p>
<b>We're sorry!</b>
</p>
<p>
Cannot find the person you are looking for.  Please try looking in the <a href="/webtools/people/index.html">eclipse wtp contributors index</a>.
</p>
EOHTML;
}

$html = <<<EOHTML
<div id="maincontent">
	<div id="midcolumn">
		<p>
		$maincontent
		</p>
		<p></p>
	</div>
</div>

EOHTML;
$App->generatePage ( $theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html ) ;
?>
