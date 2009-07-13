<?php

$oldrels = array(
	#"1.0.3" => array("2008/06/03 00:00", "http://download.eclipse.org/tools/pdt/downloads/release.php?release=R20080603"),
);

function doRequirements()
{
?>

<ul><li><a href="javascript:toggle('rDebug')">PHP Debugger [required for debugging]</a>
<ul id="rDebug"><br>
In order to be able to perform debugging using PDT, you should download one of the following extra packages:
	<li><img src="http://www.eclipse.org/modeling/images/dl-more.gif" alt="Zend PDT Community Site" /> <a href="http://www.zend.com/community/pdt?ecl=EclipseZend"> PDT and Zend Server Community Edition</a></li>
	<li><img src="http://www.eclipse.org/modeling/images/dl-more.gif" alt="Xdebug Site" /> <a href="http://xdebug.org/"> XDebug </a> </li>
	<br> Note: Due to Eclipse licensing requirements, PDT with debugger packages are distributed from external locations. <br>
	<a href="http://www.eclipse.org/pdt/articles/debugger/os-php-eclipse-pdt-debug-pdf.pdf">Click here</a> to learn how to set up your environment in order to be able to perform debugging with PDT.
</ul></li></ul>

<div class="homeitem3col">
	<h3>PDT 2.1 All In Ones / Eclipse PHP Package</h3>
	<p>These downloads include PDT 2.1, Eclipse 3.5, Mylyn and 
		<?php
		$version = array("Windows 32-bit" => "win32.zip", "Linux x86/GTK 2 32-bit" => "linux-gtk.tar.gz", "Linux x86/GTK 2 64-bit" => "linux-gtk-x86_64.tar.gz", "Mac OSX Cocoa" => "macosx-cocoa.tar.gz", "Mac OSX Carbon" => "macosx-carbon.tar.gz");
		$sizes   = array("Windows 32-bit" => "141M", "Linux x86/GTK 2 32-bit" => "139M", "Linux x86/GTK 2 64-bit" => "140M", "Mac OSX Cocoa" => "139M", "Mac OSX Carbon" => "138M" );
		$releasetag = "R";
	
		print '<a href="http://www.eclipse.org/downloads/packages/eclipse-ide-php-developers/galileo' . strtolower($releasetag) . '">all other required plugins</a>.</p>
	<ul>';
		foreach ($version as $label => $suffix)
		{
			print <<<EOL
			<li>
				<div> $sizes[$label] (<a href="http://download.eclipse.org/technology/epp/downloads/release/galileo/$releasetag/eclipse-php-galileo-$suffix.md5">md5</a>)</div>
				<a href="http://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/galileo/$releasetag/eclipse-php-galileo-$suffix">
				<img alt="All-In-One Bundle including Eclipse and required dependencies" src="/modeling/images/dl-icon-aio-bundle.gif"/> <b style="color:green">All-In-One</b> $label</a>
			</li>
EOL;
		}
		?>
	</ul>
</div>

<div class="homeitem3col">
	<h3>PDT 2.0.1 All In Ones</h3>
	<p>These downloads include PDT 2.0.1, Eclipse 3.4.1, and <a href="http://www.eclipse.org/pdt/downloads/?hlbuild=R200904281148#R200904281148">all other required plugins</a>.</p>
	<ul>
		<li> 
		<div>127.8M (<a href="http://download.eclipse.org/tools/pdt/downloads/drops/2.0.1/R200904281148/pdt-all-in-one-win32-2.0.1.zip.md5">md5</a>)</div><a href="http://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/drops/2.0.1/R200904281148/pdt-all-in-one-win32-2.0.1.zip"><img alt="All-In-One Bundle including Eclipse and required dependencies" src="/modeling/images/dl-icon-aio-bundle.gif"/> <b style="color:green">All-In-One</b> Windows 32-bit</a></li> 
		<li> 
		<div>126.7M (<a href="http://download.eclipse.org/tools/pdt/downloads/drops/2.0.1/R200904281148/pdt-all-in-one-linux-gtk-2.0.1.tar.gz.md5">md5</a>)</div><a href="http://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/drops/2.0.1/R200904281148/pdt-all-in-one-linux-gtk-2.0.1.tar.gz"><img alt="All-In-One Bundle including Eclipse and required dependencies" src="/modeling/images/dl-icon-aio-bundle.gif"/> <b style="color:green">All-In-One</b> Linux x86/GTK 2</a></li> 
		<li> 
		<div>126.4M (<a href="http://download.eclipse.org/tools/pdt/downloads/drops/2.0.1/R200904281148/pdt-all-in-one-macosx-carbon-2.0.1.tar.gz.md5">md5</a>)</div><a href="http://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/drops/2.0.1/R200904281148/pdt-all-in-one-macosx-carbon-2.0.1.tar.gz"><img alt="All-In-One Bundle including Eclipse and required dependencies" src="/modeling/images/dl-icon-aio-bundle.gif"/> <b style="color:green">All-In-One</b> Mac OS X Carbon</a></li> 
	</ul>
</div>
<?php
}

function showNotes()
{
	global $PWD;
	#$oldNightlies = loadDirSimple($PWD, "N.*", "d");
	#rsort($oldNightlies); 
	#reset($oldNightlies);

?>

	<!-- <div class="homeitem3col">
		<h3>Nightly Builds</h3>
		<ul>
		<?php foreach ($oldNightlies as $on)
		{
			print "<li><a href=\"http://download.eclipse.org/tools/pdt/downloads/release.php?release=$on\">$on</a></li>\n";
		} ?>
		</ul>
	</div> -->

	<div class="homeitem3col">
		<h3>Questions?</h3>
		<p>If you have problems downloading the drops or with this site, contact the <a href="mailto:webmaster@eclipse.org">webmaster</a>.</p>
		<p>Looking for the <a href="http://download.eclipse.org/tools/pdt/downloads/index-old.php">old PDT download page</a>? You can find it <a href="http://download.eclipse.org/tools/pdt/downloads/index-old.php">here</a>.</p>
		
		<p>All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.html">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
	</div>
<?php
}

?>
