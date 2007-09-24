<?php
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/app.class.php") ;
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/nav.class.php") ;
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/menu.class.php") ;
$App = new App ( ) ;
$Nav = new Nav ( ) ;
$Menu = new Menu ( ) ;
include ($App->getProjectCommon ()) ; # All on the same line to unclutter the user's desktop'

#*****************************************************************************#
# index.php#
# Author: 		Yossi Leon# Date:			2006-06-26#
# Description: downloads#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these. $pageTitle = "Installation" ;
$pageKeywords = "PHP, Installation Instruction" ;
$pageAuthor = "PDT Committers" ;

# Add page-specific Nav bars here# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)# $Nav->addNavSeparator("My Page Links", 	"downloads.php");# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

# End: page-specific settings#


# Paste your HTML content here!ob_start () ;

require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/projects/common/project-info.class.php") ;
$projectInfo = new ProjectInfo ( "tools.php" ) ;

?>
<div id="maincontent">
<div id="midcolumn">

<table style="width: 100%;" border="0" cellpadding="2">
	<tbody>
		<tr>
			<td align="left" width="60%">
			<h1><?=$pageTitle ?>
						<br>
			<font size="1" color="#8080FF">PDT Installation Instruction</font></h1>
			</td>
		</tr>
	</tbody>
</table>

<blockquote>
<ul>
	<li><a href="#introduction">Introduction</a></li>
	<li><a href="#installation_methods">Installation Methods</a></li>
	<li><a href="#build_types">Build Types</a></li>
	<li><a href="#debugger">Debugger</a></li>
	<li><a href="#common_problems">Common Problems</a></li>
	<li><a href="#additional_resources">Additional Resources</a></li>
</ul>
</blockquote>



<h2><a name="introduction"></a>Introduction</h2>
<p>Below are complete instructions for installing the PDT. If you are
already familiar with Eclipse plugins, you might want to follow the
abbreviated requirements and instructions on the <a
	href="http://download.eclipse.org/tools/pdt/downloads/index.php">download
page</a>. Otherwise, follow along below for detailed steps for
installing the PDT.</p>

<h2><a name="#installation_methods"></a>Installation Methods</h2>
<p>PDT can be installed in various ways, depeneding on the configuration
you have installed already, and depending on your familiarity with
Eclipse.


<ul>
	<li><b>All in One</b> - The easiest way to install PDT, specially if
	you don't have any previous installation of Eclipse. Simply download
	the all-in-one package, unzip it to the desired location, and run the
	executable Eclipse file located in it. This installation includes all
	you need to have as part of the package, including Eclipse Platform,
	WTP (Web Tools Project) and more.
	
	
	<li><b>PDT Feature</b> - This installation method is recommended if you
	have a previous installation of Eclipse. For this installation to work
	you need to have the different dependencies required for PDT. In
	general, PDT is based on WTP (Web Tools Project) and once it's already
	installed (with the correct version), there isn't much you need install
	besides that. For the complete list of dependencies, refer to the <a
		href="http://download.eclipse.org/tools/pdt/downloads/index.php">download
	page</a>. Once you've downloaded the PDT feature, you need to extract
	it's plugins and features directories to the existing folders of the
	already installed Eclipse. If you have Eclipse running already, you
	will have to restart it to have PDT as part of your Eclipse. Due to cahce issues, 
	it's best to start Eclipse for the first time with a clean environment 
	by executing <i>Eclipse -clean</i>.
	
	
	<li><b>Update Manager</b> - The update manager installation is done via
	the update manager of the already installed Eclipse. Go to Help ->
	Software Updates -> Find and Install. Choose the "Search For New
	Feature to Install" and add a new site with the following link
	"http://download.eclipse.org/tools/pdt/updates/" and press Next to
	start the update process. <br>
	For additional installation community resources, please go to <a
		href="#additional_resources">Additional Resources</a> section below.

</ul>
</p>
<h2><a name="build_types"></a>Build Types</h2>
<p>There are several types of builds used in the PDT project. The builds
are differentiated on the degree of their stability
<ul>
	<li><b>Released Builds</b> - the right builds for people who want to be
	on a stable, tested release, and don't need the latest greatest
	features and improvements
	

	<li><b>Stable Builds</b> - Integration builds that have been found to
	be stable enough for most people to use
	
	
	<li><b>Integration Builds</b> - Integration builds are produced every
	few day from latest development tags
	
	
	<li><b>Nightly Builds</b> - Nightly builds are produced every night
	from whatever has been released into the HEAD stream of the CVS
	repository

</ul>
</p>
<p>Read more about Build Types <a
	href="http://www.eclipse.org/pdt/build_types.php">here</a></p>


<h2><a name="debugger"></a>Debugger</h2>
<p>The PDT project does not contain server side implementation for PHP
debugging and will welcome any open source or commercial implementation
of the debug protocol (The debug protocol implemented can be found at
http://www.eclipse.org/pdt/docs.php)</p>
<p><b>PHP Executable Debugger</b>


<ul>
	<li><a href="http://www.zend.com/pdt#debugger">Zend Executable Debugger</a>
	 - A free Eclipse plugin that adds PHP executable debug capabilities to
	the Eclipse environment.

</ul>
<b>PHP Web Server Debugger</b>
<ul>
	<li><a href="http://www.zend.com/pdt#ws_debugger">Zend Web Server
	Debugger</a> -

</ul>
</p>
<h2><a name="common_problems"></a>Common Problems</h2>
<p>Some problems are due to cached information within Eclipse. Eclipse
caches information about plugins for faster startup. Adding PDT runtime
package may result in stale cached information. Symptoms of this problem
include:


<ul>
	<li>The PDT perspective does not appear in Eclipse
	
	
	<li>You receive "An error occurred" dialogs when opening PHP Views or
	the PHP Editor

</ul>
</p>
<p>The solution is to clean up the cached information. The recommended
practice is to start Eclipse with the <i>Eclipse -clean</i></p>

<h2><a name="additional_resources"></a>Additional Resources</h2>
<p><a
	href="http://wiki.eclipse.org/IRC_FAQ#How_do_I_install_a_project_with_multiple_dependencies.3F">
http://wiki.eclipse.org/IRC_FAQ#How_do_I_install_a_project_with_multiple_dependencies.3F</a>
</p>
</div>

</div>


<?
$html = ob_get_contents () ;
ob_end_clean () ;

# Generate the web page$App->generatePage ( $theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html ) ;
?>
