<?php
$buildServerCommonFiles = array( 
	"/opt/public/cbi/modeling/includes/buildServer-common.php",
	$_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/buildServer-common.php",
);
$foundBuildServerCommonFile = false;
foreach ($buildServerCommonFiles as $bs)
{
	if (is_file($bs))
	{
		require_once($bs); $foundBuildServerCommonFile = true; break;
	}
}
if (!$foundBuildServerCommonFile)
{
	print "Warning: could not find modeling/includes/buildServer-common.php in _common.php";
}
else
{
	unset($foundBuildServerCommonFile);
}

$defaultProj = "";
unset($_GET["project"]); // pdt has no subprojects, so this should be blank
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); $App = new App(); $Nav = new Nav(); $Menu = new Menu(); include($App->getProjectCommon());
ob_start();

/* config */

/* zips that are allowed to be absent from the downloads page (eg., new ones added mid-stream) */
$extraZips = array("pdt-SDK", "pdt-examples", "pdt-all-in-one-win32", "pdt-all-in-one-linux-gtk", "pdt-all-in-one-macosx-carbon");

/* $project => sections/Project Name => (prettyname => filename) */
/* only required if using something other than the default 4; otherwise will be generated */
$dls = array(
	"/" => array( # use "/" because PDT has no parent or child projects/components
		"PDT" => array(
		 	"SDK (Runtime, Source)" => "SDK",
			"Runtime" => "runtime",
			"Examples" => "examples",
			"Automated Tests" => "Automated-Tests",
		),
		"PDT <b style=\"color:green\">All-In-One</b> (includes Eclipse + dependencies)" => array(
		 	"Windows 32-bit" => "all-in-one-win32",
			"Linux x86/GTK 2" => "all-in-one-linux-gtk",
			"Mac OS X Carbon" => "all-in-one-macosx-carbon",
		),
	),
);

/* list of valid file prefixes for projects who have been renamed; keys have leading / to match $proj */
/* only required if using something other than the default; otherwise will be generated */
$filePre = array( # use "/" because PDT has no parent or child projects/components
	"/" => array("PDT", "pdt") // PDT-sdk-*.zip
);

/* define showNotes(), $oldrels, doLanguagePacks() in extras-$proj.php (or just extras.php for flat projects) if necessary, downloads-common.php will include them */
/* end config */

if ($isBuildServer) { include_once $_SERVER["DOCUMENT_ROOT"] . "/pdt/build/sideitems-common.php"; }
require_once($_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/downloads-common.php");

$html = ob_get_contents();
ob_end_clean();

$html .= "<!-- START: Google Analysis report --><script type=\"text/javascript\"> var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\"); document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\")); </script> <script type=\"text/javascript\"> try { var pageTracker = _gat._getTracker(\"UA-3036363-2\"); pageTracker._trackPageview(); } catch(err) {} </script><!-- END: Google Analysis report -->";

$trans = array_flip($projects);
$pageTitle = "PHP Development Tools (PDT) - Downloads";
$pageKeywords = ""; // TODO: add something here
$pageAuthor = "Nick Boldt";

# Generate the web page
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/modeling/includes/downloads.css"/>' . "\n");
$App->AddExtraHtmlHeader('<script src="/modeling/includes/downloads.js" type="text/javascript"></script>' . "\n"); //ie doesn't understand self closing script tags, and won't even try to render the page if you use one
$App->AddExtraHtmlHeader('<link type="application/rss+xml" rel="alternate" title="PDT Build Feed" href="http://www.eclipse.org/downloads/download.php?file=/'.$PR.'/feeds/builds-'.$projct.'.xml"/>' . "\n");
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
