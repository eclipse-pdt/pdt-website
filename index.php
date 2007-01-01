<?php  		


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
	# Date:			2006-04-27
	#
	# Description: main project page
	#
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDT Project";
	$pageKeywords	= "PHP, tool, web";
	$pageAuthor		= "PDT Committers";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	# Enable polls on this page: Polls are good for 3 months!
	
	$App->usePolls();
	
	$Poll = new Poll(1, "Which feature requires the most serious future enhancements?");
	$Poll->addOption(1, "Debugging");
	$Poll->addOption(2, "Editor");
	$Poll->addOption(3, "PHP Explorer");
	$Poll->addOption(4, "Outline Views");
	# $Poll->noGraph();  # uncomment to disable bar graph
	$pollHTML = $Poll->getHTML();
	
		
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
						<font size="1" color="#8080FF">PHP Development Tool</font>
						</h1>
					</td>
				</tr>
			</tbody>
		</table>

		<h2>About PDT</h2>
		<p> The PDT project is working towards providing a PHP Development 
		Tool framework for the Eclipse platform. This project will encompass all development 
		components necessary to develop PHP and will facilitate extensibility. 
		It will leverage the existing Web Tools Project in providing developers with PHP capabilities.
		</p>
		
		<p>Project Principles:</p>
		<ul>
			<li> Intuitive and easy to learn </li>
			<li> Seamless integration with the Web Tools project </li>
			<li> Adherence to Eclipse standards </li>
			<li> Extensibility </li>
			<li> Continuous support of PHP developments </li>
		</ul>
		
		<p>Scehdule:</p>
		<ul>
		<table>
			<tr>
				<td><li>September, 2007</td>
				<td> - <b>PDT 1.0 release</b></td>
			</tr>
			<tr>
				<td><li>February, 2007</td>
				<td> - <b>PDT 0.7 release</b></td>
			</tr>
			<tr>
				<td><li>29th of January, 2007</td>
				<td> - 0.7 RC2</td>
			</tr>
			<tr>
				<td><li>1st of January, 2007</td>
				<td> - 0.7 RC1</td>
			</tr>
			<tr>
				<td><li>21th of December, 2006</td>
				<td> - 0.7 Milestone 4</td>
			</tr>
			<tr>
				<td><li>December, 2006</td>
				<td> - Unit testing and debugger</td>
			</tr>
			<tr>
				<td><li>December, 2006</td>
				<td> - Debugger infrastructure improvements and changes</td>
			</tr>
			<tr>
				<td><li>November, 2006</td>
				<td> - Bug fixes and Include Path Explorer ui and core changes</td>
			</tr>
			<tr>
				<td><li>October 12, 2006</td>
				<td> - Eclipse Summit: Presenting PDT</td>
			</tr>
			<tr>
				<td><li>July, 2006</td>
				<td> - Upgrade to Eclipse 3.2 and WTP 1.5</td>
			</tr>
			<tr>
				<td><li>April, 2006</td>
				<td> - Finish 3rd development stage</td>
			</tr>
			<tr>
				<td><li>March 20-23, 2006</td>
				<td> - EclipseCon: Presenting PDT</td>
			</tr>
			<tr>
				<td><li>March 8, 2006</td>
				<td> - Creation review</td>
			</tr>
		</table>
		</ul>

		<p> The PDT is licensed under the <a href="http://www.eclipse.org/legal/epl-v10.html">Eclipse
		Public License</a>
		and is implemented in java as a set of plugins to the <a href="http://www.eclipse.org">Eclipse</a> 
		platform. </p>

		<div class="homeitem">
			<h3>Quick Navigation</h3>
			<ul>
				<li><a href="downloads.php">Downloads</a>. 
					Get available PDT builds
				</li>
				<li><a href="http://wiki.eclipse.org/index.php/PHP">PHP Wiki</a>. 
					Find more information and discussions in the PHP Wiki page
				</li>

				<li><a href="http://bugs.eclipse.org/bugs">Bugzilla</a>. 
				  	Bug reports / searches, feature requests, suggestions (e.g., enhancements, new uses, etc.) for the PDT
				</li>

				<li><a href="docs.php">Documents</a>. 
				  	Technical articles and references for PDT users and developers
				</li>

				<li><a href="news://news.eclipse.org/eclipse.tools.php">Newsgroup</a>. 
					Your way of communicating with the community of people developing and using the Eclipse 
					PDT eclipse based tool. 
					Ask questions about usage of the PDT, share ideas, issues, and insights
					(simple <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.php"> 
					web interface </a> also available)
				</li>

				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=Tools_Project">CVS Repository</a>. 
				  	The WWW interface for the CVS Repositories. 
				  	All PDT development is carried out in this repository
				</li>
				
				<li><a href="http://dev.eclipse.org/mailman/listinfo/php-dev">Mailing List</a>. 
				  	Get involved in the development of the PDT project. 
				  	If you have questions about usage of the PDT please use the PDT Newsgroup
				</li>

			</ul>
		</div>
		
		<div class="homeitem">
			<h3>What's New</h3>
			<ul>
				<li>
					<span class="normal"><b>December&nbsp;18<sup>th</sup></b></span> -
					<a href="http://download.eclipse.org/tools/php/downloads/index.php?release=S20061218-M4">Milestone 4</a>. 
					is ready!
				</li>
				<li>
					<span class="normal"><b>October&nbsp;26<sup>th</sup></b></span> -
					<a href="http://download.eclipse.org/tools/php/downloads/index.php?release=S20061026-M3">Milestone 3</a>. 
					is ready!
				</li>
				<li>
					<span class="normal"><b>October&nbsp;12<sup>th</sup></b></span> -
					PDT presentation in the <a href="http://www.eclipsecon.org/summiteurope2006/index.php?page=detail/&id=43">Eclipse Summit</a>
					by Yossi Leon, PDT Project Leader
				</li>
				<li>
					<span class="normal"><b>July&nbsp;6<sup>th</sup></b></span> -
					<a href="http://download3.eclipse.org/tools/php/downloads/index.php?release=S0.7M2">Milestone 2</a>. 
					is ready!
				</li>

				<li>
					<span class="normal"><b>July&nbsp;5<sup>th</sup></b></span> -
					Debuggers are available from the 
					<a href="http://www.eclipse.org/php/install.php">Installation</a> page.
				</li>

			</ul>
		</div>
		
	</div>
	<div id="rightcolumn">
		<div class="sideitem">
			<h6>Poll</h6>
			<?php echo $pollHTML; ?>
		</div>
	</div>

</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>