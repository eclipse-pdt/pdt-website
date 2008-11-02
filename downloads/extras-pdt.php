<?php

$oldrels = array(
	#"1.0.3" => array("2008/06/03 00:00", "http://download.eclipse.org/tools/pdt/downloads/release.php?release=R20080603"),
);

function doRequirements()
{
?>
<div class="homeitem3col">
	<h3>PDT 1.0.3 All In Ones</h3>
	<p>These downloads include PDT 1.0.3, Eclipse 3.3, and all other required plugins.</p>
	<ul>
		<li style="border:0"><div style="float:right">123M (<a href="/downloads/download.php?file=/tools/pdt/downloads/drops/1.0.3/R200806030000/checksum/pdt-all-in-one-win32-1.0.3.zip.md5">md5</a>)</div>
			<a href="/downloads/download.php?file=/tools/pdt/downloads/drops/1.0.3/R200806030000/pdt-all-in-one-win32-1.0.3.zip">PDT 1.0.3 <b style="color:green">All-In-One</b> (Windows 32-bit)</a></li>
		<li style="border:0"><div style="float:right">122M (<a href="/downloads/download.php?file=/tools/pdt/downloads/drops/1.0.3/R200806030000/checksum/pdt-all-in-one-linux-gtk-1.0.3.tar.gz.md5">md5</a>)</div>
			<a href="/downloads/download.php?file=/tools/pdt/downloads/drops/1.0.3/R200806030000/pdt-all-in-one-linux-gtk-1.0.3.tar.gz">PDT 1.0.3 <b style="color:green">All-In-One</b> (Linux x86/GTK 2)</a></li>
		<li><div style="float:right">122M (<a href="/downloads/download.php?file=/tools/pdt/downloads/drops/1.0.3/R200806030000/checksum/pdt-all-in-one-macosx-carbon-1.0.3.tar.gz.md5">md5</a>)</div>
			<a href="/downloads/download.php?file=/tools/pdt/downloads/drops/1.0.3/R200806030000/pdt-all-in-one-macosx-carbon-1.0.3.tar.gz">PDT 1.0.3 <b style="color:green">All-In-One</b> (Mac OS X Carbon)</a></li>
	</ul>
</div>
<?php
}

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
			print "<li><a href=\"http://download.eclipse.org/tools/pdt/downloads/release.php?release=$on\">$on</a></li>\n";
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
