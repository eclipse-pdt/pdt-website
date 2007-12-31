<?php  																														
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	

$App 	= new App();	
$Nav	= new Nav();	
$Menu 	= new Menu();		
include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

$pageTitle 		= "PDT";
$pageKeywords	= "PDT";
$pageAuthor		= "Yossi Leon, Zend Technologies";

ob_start();

require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
$projectInfo = new ProjectInfo("tools.php");
?>
<div id="midcolumn">

<table>
	<tr>
		<td valign="top"><b><font face="Arial,Helvetica" style="font-size: 17pt;">PDT Project Plan for 1.1 Release</font></td>
		<td>&nbsp;</td>
	</tr>
</table>
<p>Last revised: <tt>12/31/2007</tt>
<p><em>&nbsp;&nbsp;&nbsp; Please send comments about this plan to
the</em> <a href="news://news.eclipse.org/eclipse.tools.pdt">eclipse.tools.pdt</a> <em>newsgroup.</em></p>

<p>This document lays out the feature and API set for the next 
release of the PDT project, release 1.1.</p>

<ul type="disc">
<li><a href="#Deliverables">Release Deliverables</a></li>
<li><a href="#Milestones">Release Milestones</a></li>
<li><a href="#TargetOperatingEnvironments">Target Operating Environments</a></li>

</ul>

<p>PDT 1.1 is planned to be released on September 2008. 
The project will continue to be based on Eclipse 3.4 and WTP 2.0 planned releases.
You can find all PDT open bugs 
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=pdt&content=">here</a>.</p>

<p>The first part of the plan deals with the important matters of release
deliverables, release milestones and target operating environments. 
These are all things that need to be clear for any release, even if no features were to change.&nbsp;</p>

<h2><a name="Deliverables"></a>Release Deliverables</h2>
<p>The release deliverables are:</p>
<ul type="disc">
<li>Source code release for PDT is available in the eclipse.org <a
href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=Tools_Project">CVS
repositories</a> and the download <a href="http://download.eclipse.org/tools/pdt/downloads/index.php">page</a>.</li>

<li>PDT runtime binaries and SDK distributions are available in the download 
<a href="http://download.eclipse.org/tools/pdt/downloads/index.php">page</a>.</li>
<li>PDT runtime binaries and SDK features are available via eclipse.org update site
(Click <a href="http://www.eclipse.org/pdt/install.php#installation_methods">here</a> for additional information).</li>
</ul>

<h2><a name="Milestones"> </a> Release Milestones</h2>

<p>PDT builds are available weekly as <em>Integration builds</em>. PDT
Milestone Releases are approximately every six weeks of integration builds.</p>

<p>Following the final milestone, release candidates will begin. There should be at least two
release candidates before the actual release. Scheduled release candidates should end 
one week before the release.

<li> 1.1M1 - 11th of June 2007 </li>
<li> 1.1M2 - 30th of August 2007 </li>
<li> 1.1RC1 - 21st of August 2007 </li>
<li> 1.1RC2 - Will be scheduled if needed </li>

<h2><a name="TargetOperatingEnvironments"> </a> Target Operating
Environments</h2>

<p>PDT 1.0 will support all operating environments supported by the Eclipse
Platform itself. For a list of supported environments, refer to <a
href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_2.html#TargetOperatingEnvironments">
Eclipse Project</a> for a list of reference platforms.</p>

</div>

<?
$html = ob_get_contents();
ob_end_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
