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
	
# Paste your HTML content between the EOHTML markers!	
$html = <<<EOHTML

<div id="midcolumn">

<table>
	<tr>
		<td valign="top"><b><font face="Arial,Helvetica" style="font-size: 20pt;">PDT Project Plan for Release 0.7</font></td>
		<td>&nbsp;</td>
	</tr>
</table>
<p>Last revised: <tt>12/04/2006</tt>
<p><em>&nbsp;&nbsp;&nbsp; Please send comments about this plan to
the</em> <a href="news://news.eclipse.org/eclipse.tools.pdt">eclipse.tools.pdt</a> <em>newsgroup.</em></p>

<p>This document lays out the feature and API set for the next 
release of the PDT project, release 0.7.</p>

<ul type="disc">
<li><a href="#Deliverables">Release deliverables</a></li>
<li><a href="#Milestones">Release milestones</a></li>
<li><a href="#TargetOperatingEnvironments">Target operating environments</a></li>
<li><a href="#OutstandingIssues">Outstanding Issues</a></li>


</ul>

<p>The plan of the 0.7 version is based on the initial SRS which is 
available <a href="../documents/PDT 0.7 SRS.pdf">here</a>.
On top of that SRS many bugs were submitted together with enhancement requests that 
were/will be included in the 0.7 release. You can find all PDT open bugs 
<a href="https://bugs.eclipse.org/bugs/buglist.cgi?query_format=specific&order=relevance+desc&bug_status=__open__&product=pdt&content=">here</a>.</p>

<p>The first part of the plan deals with the important matters of release
deliverables, release milestones, target operating environments, and
release-to-release compatibility. These are all things that need to be clear for
any release, even if no features were to change.&nbsp;</p>

<h2><a name="Deliverables"></a>Release Deliverables</h2>
<p>The release deliverables are:</p>
<ul type="disc">
<li>Source code release for PDT is available in the eclipse.org <a
href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=Tools_Project">CVS
repositories for PHP</a>.</li>

<li>PDT runtime binaries and SDK distributions are available in the download 
<a href="http://download.eclipse.org/tools/pdt/downloads/index.php">page</a>.</li>
<li>PDT runtime binaries and SDK features are available on eclipse.org update site
(install via Eclipse update manager).</li>
</ul>

<h2><a name="Milestones"> </a> Release Milestones</h2>

<p>PDT builds are available weekly as <em>Integration builds</em>. PDT
Milestone Releases are approximately every six weeks of integration builds.</p>

<p>Following the final milestone, release candidates will begin. There should be at least two
release candidates before the actual release. Scheduled release candidates should end 
one week before the release.

<li> 0.7M3 - 26th of October 2006 </li>
<li> 0.7M4 - 21st of December 2006 </li>
<li> 0.7RC1 - 1st of January 2007 </li>
<li> 0.7RC2 - 29th of January 2007 </li>

<h2><a name="TargetOperatingEnvironments"> </a> Target Operating
Environments</h2>

<p>PDT 0.7 will support all operating environments supported by the Eclipse
Platform itself. For a list of supported environments, refer to <a
href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_2.html#TargetOperatingEnvironments">
Eclipse Project 3.2</a> for a list of reference platforms.</p>

</div>

EOHTML;


	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
