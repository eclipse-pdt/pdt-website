<?php  																														
header('location: http://download.eclipse.org/tools/pdt/downloads/');
die;

require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
$App 	= new App();	
$Nav	= new Nav();	
$Menu 	= new Menu();		
include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Yossi Leon
	# Date:			2006-05-01
	#
	# Description: downloads
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDT Downloads";
	$pageKeywords	= "PHP, downloads";
	$pageAuthor		= "PDT Committers";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
		
	# Paste your HTML content here!
	ob_start();

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	$projectInfo = new ProjectInfo("tools.php");
	
?>
<div id="maincontent">
	<div id="midcolumn">

		<table style="width: 100%;" border="0" cellpadding="2">
			<tbody>
				<tr>
					<td align="left" width="60%"><h1><?=$pageTitle?>
						<br>
						<font size="1" color="#8080FF">Latest PDT downloads</font>
						</h1>
					</td> 
				</tr>
			</tbody>
		</table>

		<h2>Under Construction</h2>
		<p> There are no downloads available yet</p>

	</div>

</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	$html .= "<!-- START: Google Analysis report --><script type=\"text/javascript\"> var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\"); document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\")); </script> <script type=\"text/javascript\"> try { var pageTracker = _gat._getTracker(\"UA-3036363-2\"); pageTracker._trackPageview(); } catch(err) {} </script><!-- END: Google Analysis report -->";

	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>