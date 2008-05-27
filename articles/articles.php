<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# committers.php
	#
	# Author: 		Roy Ganor
	# Date:			2007-07-18
	#
	# Description: ASTView page 
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "PDT Articles";
	$pageKeywords	= "PHP, articles";
	$pageAuthor		= "PDT Development";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addCustomNav("Find Bugs", "http://download.eclipse.org/tools/pdt/downloads/drops/results/FINDBUGS-php.html", "_self", 3);
	$Nav->addCustomNav("Best Practices", "http://download.eclipse.org/tools/pdt/downloads/drops/results/ANALYSIS-php.html", "_self", 3);
	$Nav->addCustomNav("Unit Tests", "http://download.eclipse.org/tools/pdt/downloads/drops/N". date("Ymd", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"))) . "/results/TEST-php.html", "_self", 3);
	$Nav->addCustomNav("Contributors", "http://www.eclipse.org/pdt/people/contributors.php", "_self", 3);
	$Nav->addCustomNav("Articles", "http://www.eclipse.org/pdt/articles/articles.php", "_self", 3);

	# End: page-specific settings
	#

	# Paste your HTML content here!
	ob_start();

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	$projectInfo = new ProjectInfo("tools.php");

?>

<div id="maincontent">
	<div id="midcolumn">

		<div class="homeitem3col">
			<h3>Articles</h3>
			<ul>
				<li><a href="/pdt/articles/ast/PHP_AST.html">Abstract Syntax Tree</a>.
				</li>
			</ul>
			<ul>
				<li><a href="/pdt/articles/astview/astview.php">AST View</a>.
				</li>
			</ul>
			<ul>
				<li><a href="/pdt/articles/editor/php_editor.html">PHP Editor</a>.
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
