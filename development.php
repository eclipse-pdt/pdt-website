<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# committers.php
	#
	# Author: 		Roy Ganor
	# Date:			2007-07-18
	#
	# Description: Development page - includes nightly reports, committers list 
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDT Development";
	$pageKeywords	= "PHP, nightly, reports, committers, list";
	$pageAuthor		= "PDT Development";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addCustomNav("Find Bugs", "http://download.eclipse.org/tools/pdt/downloads/drops/results/FINDBUGS-php.html", "_self", 1);
	$Nav->addCustomNav("Best Practices", "http://download.eclipse.org/tools/pdt/downloads/drops/results/ANALYSIS-php.html", "_self", 1);
	$Nav->addCustomNav("Unit Tests", "http://download.eclipse.org/tools/pdt/downloads/drops/N20070717/results/TEST-php.html", "_self", 1);

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
			<h3>Reports</h3>
			<ul>
				<li><a href="http://download.eclipse.org/tools/pdt/downloads/drops/results/FINDBUGS-php.html">FindBugs Report</a>. 
				 	read more on <a href="http://findbugs.sourceforge.net/">http://findbugs.sourceforge.net</a>
				</li>
				<li><a href="http://download.eclipse.org/tools/pdt/downloads/drops/results/ANALYSIS-php.html">Static Analysis Report (J2SE best practices)</a>. 
				 	read more on <a href="http://www.eclipse.org/tptp/platform/index.php">http://www.eclipse.org/tptp/platform/index.php</a>
				</li>
				<li><a href="http://download.eclipse.org/tools/pdt/downloads/drops/N<?=date("Ymd", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"))?>/results/TEST-php.html">Unit Test Results (<?=date("Ymd", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"))?>)</a>. 
				 	read more on <a href="http://www.junit.org">http://www.junit.org</a>
				</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>People</h3>
			<ul>
				<li>
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
