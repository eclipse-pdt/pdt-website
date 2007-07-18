<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
$pageKeywords	= "";
$pageAuthor		= "Bob Fraser";

$root = $_SERVER['DOCUMENT_ROOT'];

# Generate the web page
// Load the XML source
$xml = DOMDocument::load('people.xml');

//Set the page title
$pageTitle = "Eclipse Web Tools Platform Project - Contributors Activity";

// Load the XSL source
$xsl = DOMDocument::load($root . '/webtools/people/contributorsphoenix.xsl');

// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules

$maincontent = $proc->transformToXML($xml);
//$maincontent = htmlentities($maincontent);
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

$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
