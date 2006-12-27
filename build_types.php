<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

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
	$pageTitle 		= "PDT Build Types";
	$pageKeywords	= "PHP, build types";
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

		There are a couple of "dimensions" of the PDT Build Types. 

		<h2>Released Builds</h2>
		<p> 
			Releases are builds that have been declared major releases by the committers and PMC- 
			for example "R1.0". Releases are the right builds for people who want to be on a stable, 
			tested release, and don't need the latest greatest features and improvements. 
			Released builds always have an "R" at the beginning of the name i.e. R1.0, R2.0 etc. 
			Non-release builds are named according to the date of the build - for example 20051027 
			is the build from Oct 27, 2005.
		</p>
		
		<h2>Maintenance Builds</h2>
		<p> 
			Occasionally, we might find there are a few bugs in a Released Build, so a Maintenance 
			Release will be planned. Until a maintenance release is formally declared and released, 
			it will be called a "Maintenance Build", and will have a prefix of "M". This roughly 
			corresponds to "an integration build" but a maintenance build is typically more stable 
			that an I-Build, since the M-build is based on a declared release (not a new release) 
			and M-builds contain bug fixes only ... not new function, as I-builds do. 
			When the maintenance is finalized, approved, and released, it will become a Released Build.
		</p>
		
		<h2>Stable Builds</h2>
		<p> 
			Stable builds are integration builds that have been found to be stable enough for most 
			people to use. They are promoted from integration build to stable build by the architecture 
			team after they have been used for a few days and deemed reasonably stable. 
			The latest stable build is the right build for people who want to stay up to date with 
			what is going on in the latest development stream, and don't mind putting up with a few 
			problems in order to get the latest greatest features and bug fixes. 
			The latest stable build is the one the development team likes people to be using, 
			because of the valuable and timely feedback.
		</p>
		
		<h2>Integration Builds</h2>
		<p> 
			All component teams tag their work in what they believe is a stable, consistent state, 
			and they update the build configuration to indicate that the next integration build should 
			take this version of the component. Integration builds are built from these versioned 
			components that have been specified by each component team as the best version available for 
			the next build.	
		</p>
		
		<h2>Nightly Builds</h2>
		<p> 
			Nightly builds are produced every night from whatever has been released into the HEAD 
			stream of the CVS repository. They are completely untested and will almost always have 
			major problems. Many will not work at all. These drops are normally only useful to 
			developers actually working on the Eclipse Project.
		</p>

	</div>

</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
