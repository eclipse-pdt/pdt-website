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
	$Nav->addCustomNav("Find Bugs", "http://download.eclipse.org/tools/pdt/downloads/drops/results/FINDBUGS-php.html", "_self", 3);
	$Nav->addCustomNav("Best Practices", "http://download.eclipse.org/tools/pdt/downloads/drops/results/ANALYSIS-php.html", "_self", 3);
	$Nav->addCustomNav("Unit Tests", "http://download.eclipse.org/tools/pdt/downloads/drops/N". date("Ymd", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"))) . "/results/TEST-php.html", "_self", 3);
	$Nav->addCustomNav("Contributors", "http://www.eclipse.org/pdt/people/contributors.php", "_self", 3);

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
				<li><a href="http://download.eclipse.org/tools/pdt/downloads/drops/N<?=date("Ymd", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")))?>/results/TEST-php.html">Unit Test Results (<?=date("Ymd", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y")))?>)</a>.
				 	read more on <a href="http://www.junit.org">http://www.junit.org</a>
				</li>
			</ul>
		</div>

		<div class="homeitem3col">
			<h3>People</h3>
			<ul>
				<li><a href="http://www.eclipse.org/pdt/people/contributors.php">PDT contributors</a>.
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

	      <div class="homeitem3col">

				<h3><a href="http://download.eclipse.org/tools/pdt/downloads/rss.php"><img src="./images/rss.jpg" align="right" title="RSS Feed" alt="[RSS]" /></a>Last Releases</h3>
	              <ul>
	              <?
				  $url = 'http://download.eclipse.org/tools/pdt/downloads/rss.php';

				  $rss = fetch_rss($url);
	              $index = 0;

                  while ($index < sizeof($rss->items) && $index < 4) {

	                    $message = $rss->items[$index];
	                    ?>
						<li>
							<a href="javascript:toggle('rel_<?=$index ?>')"> <img id="img_rel_<?=$index ?>"  src="./images/plus.gif" alt="expand" /> <span class="normal"><b><?=$message["title"] ?></b></span> </a>
							<ul id="rel_<?=$index ?>" style="display: none">
								<li><?=html_entity_decode($message["description"])?></li>
							</ul>
							| <a href="<?=html_entity_decode($message["link"]) ?>">Report </a>
						</li>
	                    <? $index += 1;
	              }
	              ?>
	              </ul>
	        </div>


	      <div class="homeitem3col">

				<h3><a href="http://www.eclipse.org/pdt/newsgroup/rss.php"><img src="./images/rss.jpg" align="right" title="RSS Feed" alt="[RSS]" /></a>Updates</h3>
	              <ul>
	              <?
				  $url = 'http://www.eclipse.org/pdt/newsgroup/rss.php';

				  $rss = fetch_rss($url);
	              $index = 0;

                  while ($index < sizeof($rss->items) && $index < 4) {

	                    $message = $rss->items[$index];
	                    ?>
						<li>
							<a href="javascript:toggle('news_<?=$index ?>')"> <img id="img_news_<?=$index ?>"  src="./images/plus.gif" alt="expand" /> <span class="normal"><b><?=$message["title"] ?></b></span> </a>
							<ul id="news_<?=$index ?>" style="display: none">
								<li><?=html_entity_decode($message["description"])?></li>
							</ul>
							| <a href="<?=html_entity_decode($message["link"]) ?>">Report </a>
						</li>
	                    <? $index += 1;
	              }
	              ?>
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
