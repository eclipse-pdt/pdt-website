<?php
set_include_path($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common" . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] . "/projects" . PATH_SEPARATOR . get_include_path());

require_once("system/app.class.php");	
require_once("system/nav.class.php"); 	
require_once("system/menu.class.php"); 	
$App 	= new App();	
$Nav	= new Nav();	
$Menu 	= new Menu();		

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Yossi Leon, Assaf Almaz
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
	# $Nav->addNavSeparator("PDT", 	"/pdt/index.php");
		
	include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	
	# End: page-specific settings
	#
	
	# Enable polls on this page: Polls are good for 3 months!
	# $App->usePolls();
	# $Poll = new Poll(2, "Which view is the most ?");
	# $Poll->addOption(1, "PHP Explorer (workspace view)");
	# $Poll->addOption(2, "Outline");
	# $Poll->addOption(3, "Project Explorer (current project view)");
	# $Poll->addOption(4, "Functions view");
	# $Poll->noGraph();  # uncomment to disable bar graph
	# $pollHTML = $Poll->getHTML();
		
	# Paste your HTML content here!
	ob_start();

	require_once("common/project-info.class.php");
	$projectInfo = new ProjectInfo("tools.php");
	
?>

<div id="maincontent">
	<div id="midcolumn">

		<table style="width: 100%;" border="0" cellpadding="2">
			<tbody>
				<tr>
					<td align="left" width="60%"><h1><?=$pageTitle?>
						<br>
						<font size="1" color="#8080FF">PHP Development Tools</font>
						</h1>
					</td>
				</tr>
			</tbody>
		</table>

		<h2>About PDT</h2>
		<p> The PDT project provides a PHP Development 
		Tools framework for the Eclipse platform. This project encompasses all development 
		components necessary to develop PHP and facilitate extensibility. 
		It leverages the existing Web Tools Project in providing developers with PHP capabilities.
		</p>
		
		<p>Project Principles:</p>
		<ul>
			<li> Intuitive and easy to learn </li>
			<li> Seamless integration with the Web Tools project </li>
			<li> Adherence to Eclipse standards </li>
			<li> Extensibility </li>
			<li> Continuous support of PHP developments </li>
		</ul>
		<br>
		<p>
			<a href="whois.php">Products and projects</a> that are using PDT<br>
		</p>
		
		<p>Schedule:</p>
		
				
		<table>
			<tr>
				<td>
					<img src="/eclipse.org-common/themes/Phoenix/images/arrow.gif" >
					15th of September, 2008
				</td>
				<td> - PDT 2.0 Release</td>
			</tr>
			<tr>
				<td>
					<img src="/eclipse.org-common/themes/Phoenix/images/arrow.gif" >
					10th of June, 2008
				</td>
				<td> - <b>PDT 1.0.3 Released</b> </td>
			</tr>
			<tr>
				<td>
					<img src="/eclipse.org-common/themes/Phoenix/images/arrow.gif" >
					6 of May, 2008
				</td>
				<td> - PDT 1.1 M1</td>
			</tr>
			<tr>
				<td>
					<img src="/eclipse.org-common/themes/Phoenix/images/arrow.gif" >
					3rd of January, 2008
				</td>
				<td> - <b>PDT 1.0.2 Released</b> </td>
			</tr>
			<tr>
				<td>
					<img src="/eclipse.org-common/themes/Phoenix/images/arrow.gif" >
					12th of December, 2007
				</td>
				<td> - PDT 1.0.2 M2 </td>
			</tr>
			<tr>
				<td>
					<img src="/eclipse.org-common/themes/Phoenix/images/arrow.gif" >
					18th of September, 2007
				</td>
				<td> - <b>PDT 1.0 Released</b></td>
			</tr>
			<tr>
				<td>
					<img src="/eclipse.org-common/themes/Phoenix/images/arrow.gif" >
					30th of July, 2007
				</td>
				<td> - PDT 1.0 M2</td>
			</tr>
			<tr>
				<td>
					<img src="/eclipse.org-common/themes/Phoenix/images/arrow.gif" >
					11th of June, 2007
				</td>
				<td> - PDT 1.0 M1</td>
			</tr>
			<tr>
				<td>
					<img src="/eclipse.org-common/themes/Phoenix/images/arrow.gif" >
					6th of April, 2007
				</td>
				<td> - 0.7 RC3 (and final)</td>
			</tr>
		</table>
		

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
				<li><a href="http://wiki.eclipse.org/index.php/PDT">PHP Wiki</a>. 
					Find more information and discussions in the PHP Wiki page
				</li>

				<li><a href="http://bugs.eclipse.org/bugs">Bugzilla</a>. 
				  	Bug reports / searches, feature requests, suggestions (e.g., enhancements, new uses, etc.) for the PDT <a href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=PDT">here</a> 
				</li>

				<li><a href="docs.php">Documents</a>. 
				  	Technical articles and references for PDT users and developers
				</li>

				<li><a href="news://news.eclipse.org/eclipse.tools.pdt">Newsgroup</a>. 
					Your way of communicating with the community of people developing and using the Eclipse 
					PDT eclipse based tool. 
					Ask questions about usage of the PDT, share ideas, issues, and insights
					(simple <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.pdt"> 
					web interface </a> also available)
				</li>

				<li><a href="http://dev.eclipse.org/viewcvs/index.cgi/?cvsroot=Tools_Project">CVS Repository</a>. 
				  	The WWW interface for the CVS Repositories. 
				  	All PDT development is carried out in this repository
				</li>
				
				<li><a href="http://dev.eclipse.org/mailman/listinfo/pdt-dev">Mailing List</a>. 
				  	Get involved in the development of the PDT project. 
				  	If you have questions about usage of the PDT please use the PDT Newsgroup
				</li>

			</ul>
		</div>
		
		<div class="homeitem">
			<h3>What's New</h3>
			<ul>	
				<li>
					<span class="normal"><b>June &nbsp;10 2008</b></span> -
					<a href="http://download.eclipse.org/tools/pdt/downloads/?release=R20080603">PDT 1.0.3 Final release</a> is ready!
				</li>
				<li>
					<span class="normal"><b>May &nbsp;30 2008</b></span> -
					<a href="http://wiki.eclipse.org/BugDay/May_2008#Projects">PDT 1.1 Bug day</a> join us for a bug squash day!
				</li>
				<li>
					<span class="normal"><b>January &nbsp;3<sup>rd</sup> 2008</b></span> -
					<a href="http://download.eclipse.org/tools/pdt/downloads/?release=R20080103">PDT 1.0.2 Release</a> is Ready!
				</li>

				<li>
					<span class="normal"><b>September&nbsp;18<sup>th</sup> 2007</b></span> -
					<a href="http://download.eclipse.org/tools/pdt/downloads/?release=R20070917">PDT 1.0 Final Release</a> is Ready!
				</li>

				<li>
					<span class="normal"><b>September&nbsp;12<sup>th</sup> 2007</b></span> -
					<a href="http://download.eclipse.org/tools/pdt/downloads/?release=S20070910-RC1">1.0 RC-1</a> 
					(compatible with Eclipse 3.3 and Java 1.5 only) is ready!
				</li>

				<li>
					<span class="normal"><b>August&nbsp;26<sup>th</sup> 2007</b></span> -
					<a href="http://download.eclipse.org/tools/pdt/downloads/?release=S20070826-M3">1.0 M3</a> 
					(compatible with Eclipse 3.3 and Java 1.5 only) is ready!
				</li>

				<li>
					<span class="normal"><b>July&nbsp;16<sup>th</sup></b></span> -
					<a href="http://download.eclipse.org/tools/pdt/downloads/rss.php">PDT RSS Builds</a> Feed! 
				</li>
				
				<li>
					<span class="normal"><b>April&nbsp;6<sup>th</sup></b></span> -
					<a href="http://download.eclipse.org/tools/pdt/downloads/?release=S20070401-RC3">0.7 RC3</a> 
					is ready!
				</li>
				<li>
					<span class="normal"><b>February&nbsp;20<sup>th</sup></b></span> -
					PDT Powered by icon is now <a href="./images/PoweredBy_PDT.gif">available</a> - 
					<img src="./images/PoweredBy_PDT.gif" alt="Powered by PDT" />. 
					Use it in your site! 
				</li>
				<li>
					<span class="normal"><b>RSS News</b></span> -
					<a href="http://download.eclipse.org/tools/pdt/downloads/rss/center.xml">RSS News</a>. 
					including unit testing results and bugs status are now available.
				</li>

				<li>
					<span class="normal"><b>October&nbsp;12<sup>th</sup></b></span> -
					PDT presentation in the <a href="http://www.eclipsecon.org/summiteurope2006/index.php?page=detail/&id=43">Eclipse Summit</a>
					by Yossi Leon, PDT Project Leader
				</li>

				<li>
					<span class="normal"><b>July&nbsp;5<sup>th</sup></b></span> -
					Debuggers are available from the 
					<a href="http://www.eclipse.org/pdt/install.php">Installation</a> page.
				</li>

			</ul>
		</div>

		<script type="text/javascript">
				function toggle(id)
				{
				        e = document.getElementById(id);
				        e.style.display = (e.style.display == "" ? "none" : "");
				        document.getElementById("img_".concat(id)).src = e.style.display == "" ? "./images/minus.gif" : "./images/plus.gif";
				}
		</script>
		
	      <div class="homeitem3col">
	
				<h3><a href="http://download.eclipse.org/tools/pdt/downloads/rss/center.xml"><img src="./images/rss.jpg" align="right" title="RSS Feed" alt="[RSS]" /></a>Updates</h3>
	              <ul>
	              <?
		          define('MAGPIE_CACHE_ON', false);
				  require_once 'rss_fetch.inc';
				  $url = 'http://download.eclipse.org/tools/pdt/downloads/rss/center.xml';
				  
				  $rss = fetch_rss($url);
	              $index = 0;

                  while ($index < sizeof($rss->items) && $index < 4) {
                  		
	                    $message = $rss->items[$index];
	                    ?>
						<li>
							<a href="javascript:toggle('bugs_<?=$index ?>')"> <img id="img_bugs_<?=$index ?>"  src="./images/plus.gif" alt="expand" /> <span class="normal"><b><?=$message["title"] ?></b></span> </a>
							<ul id="bugs_<?=$index ?>" style="display: none">
								<li><?=html_entity_decode($message["description"])?></li>
							</ul>
							| <a href="<?=html_entity_decode($message["link"]) ?>">Report </a>
						</li>
	                    <? $index += 1;
	              }
	              ?>
	              </ul>
	        </div>
	        
	        <p> </p>

	</div>
	<div id="rightcolumn">
		<br>
		<br>
		<br>
		<!--<a href="http://download.eclipse.org/tools/pdt/downloads/?release=R20070917">Download PDT 1.0!</a>
	--></div>

</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

$html .= "<!-- START: Google Analysis report -->
<script src=\"http://www.google-analytics.com/urchin.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\">
_uacct = \"UA-3036363-2\";
urchinTracker();
</script>
<!-- END: Google Analysis report -->";

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>