<?php

$oldrels = array(
	"1.0.3" => array("2008/06/03 00:00", "http://download.eclipse.org/tools/pdt/downloads/release.php?release=R20080603"),
);

function showNotes()
{

	global $PWD;
	$oldNightlies = loadDirSimple($PWD, "N.*", "d");
	rsort($oldNightlies); 
	reset($oldNightlies);
 ?>

	<div class="homeitem3col">
		<h3>Nightly Builds</h3>
		<ul>
		<?php foreach ($oldNightlies as $on)
		{
			print "<li><a href=\"http://download.eclipse.org/tools/pdt/downloads/drops/release.php?release=$on/\">$on</a></li>\n";
		} ?>
		</ul>
	</div>

       
       <div class="homeitem3col">
		<h3>Questions?</h3>
		<p>If you have problems downloading the drops or with this site, contact the <a href="mailto:webmaster@eclipse.org">webmaster</a>.</p>
		<p>Looking for the <a href="http://download.eclipse.org/tools/pdt/downloads/index-old.php">old PDT download page</a>? You can find it <a href="http://download.eclipse.org/tools/pdt/downloads/index-old.php">here</a>.</p>
		
		<p>All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.html">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
	</div>
<?php
}

?>