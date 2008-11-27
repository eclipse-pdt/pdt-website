<?php  																														
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); $App = new App(); $Nav = new Nav(); $Menu = new Menu(); include($App->getProjectCommon());
ob_start(); ?>
<div id="midcolumn">

<table style="width: 100%;" border="0" cellpadding="2">
	<tbody>
		<tr>
			<td align="left" width="60%">
				<h1>PDT Project Plan for 2.0 Release</h1>
			</td>
		</tr>
	</tbody>
</table>
<p>Last revised: <tt>$Date: 2008/11/27 22:55:54 $</tt>
<p><em>&nbsp;&nbsp;&nbsp; Please send comments about this plan to
the</em> <a href="news://news.eclipse.org/eclipse.tools.pdt">eclipse.tools.pdt</a> <em>newsgroup.</em></p>

<p>This document lays out the feature and API set for the next 
release of the PDT project, release 2.0.</p>

<ul type="disc">
<li><a href="#Deliverables">Release Deliverables</a></li>
<li><a href="#Milestones">Release Milestones</a></li>
<li><a href="#Features">Features and Work Plan</a></li>
<li><a href="#TargetOperatingEnvironments">Target Operating Environments</a></li>

</ul>

<p>PDT 2.0 is planned to be released on December 2008. 
The project will continue to be based on <a href="http://www.eclipse.org/projects/ganymede.php">Eclipse Ganymede</a> releases .

<h2><a name="Deliverables"></a>Release Deliverables</h2>
<p>The release deliverables are:</p>
<ul type="disc">
<li>Source code release for PDT is available in the eclipse.org <a
href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.pdt/?cvsroot=Tools_Project">CVS
repositories</a> and the download <a href="http://www.eclipse.org/pdt/downloads/">page</a>.</li>

<li>PDT runtime binaries and SDK distributions are available in the download 
<a href="http://www.eclipse.org/pdt/downloads/">page</a>.</li>
<li>PDT runtime binaries and SDK features are available via eclipse.org update site
(Click <a href="http://wiki.eclipse.org/PDT/Installation">here</a> for additional information).</li>
</ul>

<h2><a name="Milestones"> </a> Release Milestones</h2>

<p>PDT builds are available weekly as <em>Integration builds</em>. PDT
Milestone Releases are approximately every six weeks of integration builds.</p>

<p>Following the final milestone, release candidates will begin. There should be at least two
release candidates before the actual release. Scheduled release candidates should end 
one week before the release.

<li> 2.0 M1 - November 03 </li>
<li> 2.0 M2 - November 24 </li>
<li> 2.0 RC1 - December 08 </li>
<li> 2.0 RC2 - December 14 </li>
<li> 2.0 RC3 - December 23</li>
<li><b> 2.0 Release - December 29 </b></li>

<h2><a name="Features"> </a> Features and Work Plan</h2>
<b>Milestone 1:</b>
<li>PHP Model Infrastructure</li>
<li>Mark Occurrences</li>
<li>Type Hierarchy View</li>
<li>Override Method Annotation</li>
<li>New PHP Explorer capabilities</li>
<li>Extended Open Type</li>
<li>Code Templates</li>
<li>Code Assist for Dynamic Variables</li>

<br>
<b>Release Candidate 1+2:</b>
<li>Bug Squash: see list of <a href="https://bugs.eclipse.org/bugs/colchange.cgi?rememberedquery=product%3DPDT%26bug_status%3DNEW%26bug_status%3DASSIGNED%26bug_status%3DREOPENED%26order%3Dbugs.bug_status%2Cbugs.target_milestone%2Cbugs.bug_id%26query_format%3Dadvanced&column_changeddate=on&column_bug_severity=on&column_priority=on&column_rep_platform=on&column_bug_status=on&column_product=on&column_component=on&column_version=on&column_target_milestone=on&column_short_short_desc=on&splitheader=0">open bugs</a></li>
<br>
* Note: PHP 5.3 is expected to be released around October-November
<br>

<h2><a name="TargetOperatingEnvironments"> </a> Target Operating
Environments</h2>

<p>PDT 2.0 will support all operating environments supported by the Eclipse
Platform itself. For a list of supported environments, refer to <a
href="http://www.eclipse.org/eclipse/development/eclipse_project_plan_3_4.html#TargetOperatingEnvironments">
Eclipse Project</a> for a list of reference platforms.</p>

</div>
<?php
$html = ob_get_contents();
ob_end_clean();

$pageTitle 		= "PDT Project Plan";
$pageKeywords	= "PDT, project, plan";
$pageAuthor		= "Guy Gurfinkel, Zend Technologies & Nick Boldt, JBoss, a division of Red Hat";

$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
