<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# committers.php
	#
	# Author: 		Roy Ganor
	# Date:			2007-07-18
	#
	# Description: Committers page - includes nightly reports, committers list 
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDT Committers";
	$pageKeywords	= "PHP, nightly, reports, committers, list";
	$pageAuthor		= "PDT Committers";

	# Add page-specific Nav bars here
	$Nav->addNavSeparator("My Page Links", 	"downloads.php");
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
						<font size="1" color="#8080FF">Analysis Reports for the PDT project</font>
						</h1>
					</td>
				</tr>
			</tbody>
		</table>

		<div class="homeitem3col">
			<h3>Documents</h3>
			<ul>
				<li><a href="documents/Eclipse Summit PDT.ppt">PDT Presentation in Eclipse Summit 2006</a>. 
				 	Presentation from the Eclipse Summit 2006 presented by Yossi Leon
				</li>

			</ul>
		</div>
	</div>
	
</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
