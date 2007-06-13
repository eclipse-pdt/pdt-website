<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# summer_camp.php
	#
	# Author: 		Yossi Leon
	# Date:			2007-06-13
	#
	# Description: summer camp
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Summer Camp";
	$pageKeywords	= "PHP, summer, camp";
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
					<td align="left" width="60%">
						<h1>
							<?=$pageTitle?>
							<br>
						</h1>
					</td> 
				</tr>
			</tbody>
		</table>

		<h2>PDT Summer Camp</h2>
		<p> In order to provide the best PHP development tool for PDT 1.0 in September we wish to use the 
		community help and conduct a summer camp where we will define few potential enhancements with
		working groups assigned to them.</p>
		
		The current enhancement candidates are:
		<ul>
			<li> Smarty templates support - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=182860">#182860</a> </li>
			<li> Auto genration of getters and setters - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=180116">#180116</a> </li>
			<li> Mylar integration - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=178350">#178350</a> </li>
			<li> Smarter code assist - Recently used elements would appear after certain keystroke is pressed </li>
			<li> Outline view additional filters - <a href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=171513">#171513</a> </li>
		</ul>
		
		<p>If you are ineterested taking part in the development of one of these enhancements please contact
		the project leader.
		</p>
		

	</div>

</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
