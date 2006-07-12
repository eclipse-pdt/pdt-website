<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Guy Harpaz
	# Date:			2006-06-26
	#
	# Description: downloads
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Installation";
	$pageKeywords	= "PHP, Installation Instruction";
	$pageAuthor		= "PHP IDE Committers";

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
						<font size="1" color="#8080FF">PHP IDE Installation Instruction</font>
						</h1>
					</td> 
				</tr>
			</tbody>
		</table>

		<blockquote>
			<ul>
				<li><a href="#introduction">Introduction</a></li>
				<li><a href="#build_types">Build Types</a></li>
				<li><a href="#package_types">Package Types</a></li>
				<li><a href="#debugger">Debugger</a></li>
				<li><a href="#common_problems">Common Problems</a></li>
			</ul>
		</blockquote>



		<h2><a name="introduction"></a>Introduction</h2>
		<p>
			Below are complete instructions for installing the PHP IDE. 
			If you are already familiar with Eclipse plugins, you might want to follow the 
			abbreviated requirements and instructions on the 
			<a href="http://download.eclipse.org/tools/php/downloads/index.php">download page</a>.
			Otherwise, follow along below for detailed steps for installing the PHP IDE.
		</p>
				
		<h2><a name="build_types"></a>Build Types</h2>
		<p>
			There are several types of builds used in the PHP IDE project. 
			The builds are differentiated on the degree of their stability
			
			<ul>
				<li><b>Released Builds</b> - the right builds for people who want to be on a stable, 
					tested release, and don't need the latest greatest features and improvements
					
				<li><b>Stable Builds</b> - Integration builds that have been found to be stable 
					enough for most people to use
					
				<li><b>Integration Builds</b> - Integration builds are produced every few day from 
					latest development tags

				<li><b>Nightly Builds</b> - Nightly builds are produced every night from whatever 
					has been released into the HEAD stream of the CVS repository
			</ul>
		</p>
		<p>
			Read more about Build Types <a href="http://www.eclipse.org/php/build_types.php">here</a>
		</p>
		
		<h2><a name="package_types"></a>Package Types</h2>
		<p>
			There are two types of packages used in the PHP IDE project:
			<ul>
				<li><b>All in one</b> - includes the complete set of software to start using PHP IDE 
				immediately. This package already has PHP IDE combined with the complete set of 
				prerequisites, eclipse 3.2 sdk, emf, gef, jem and WTP. You will not need anything else

				<li><b>Runtime</b> - only includes the PHP IDE project builds. There are the 
				prerequisites to install PHP IDE. The following must be downloaded and installed before 
				the PHP IDE can be installed.
				<ul>
					<li>Eclipse Platform
					<li>GEF
					<li>EMF
					<li>JEM
					<li>WTP
				</ul>
			</ul>
		</p>
		<p>
			<b>Note:</b> The version you choose will depend on the version of Eclipse you are running.
		</p>
			
		<h2><a name="debugger"></a>Debugger</h2>
		<p>
			The PHP IDE project does not contain server side implementation for PHP debugging and will 
			welcome any open source or commercial implementation of the debug protocol 
			(The debug protocol implemented can be found at http://www.eclipse.org/php/docs.php)
		</p>
		<p>
			

			<b>PHP Executable Debugger</b>
			<ul>
				<li><a href="http://www.zend.com/phpide#debugger">Zend Executable Debugger</a> : a free Eclipse 
					plugin that adds PHP executable debug capabilities to the Eclipse environment.
			</ul>
			<br>
			<b>PHP Web Server Debugger</b>
			<ul>
				<li><a href="http://www.zend.com/phpide#ws_debugger">Zend Web Server Debugger</a> -
			</ul>
		</p><br>
			
		<h2><a name="common_problems"></a>Common Problems</h2>
		<p>
			Some problems are due to cached information within Eclipse. Eclipse caches information 
			about plugins for faster startup. Adding PHP IDE runtime package may result in stale 
			cached information. Symptoms of this problem include:

			<ul>
				<li>The PHP IDE perspective does not appear in Eclipse
				<li>You receive "An error occurred" dialogs when opening PHP Views or the PHP Editor
			</ul>
		</p>
		<p>
			The solution is to clean up the cached information. The recommended practice is to 
			start Eclipse with the <i>eclipse -clean</i>
		</p>

	</div>

</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
