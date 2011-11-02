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
	<h3>Eclipse PDT 3.0.x All In Ones</h3>
	<p><a href='http://code.google.com/p/zend-sdk/downloads/list'>These downloads include Eclipse 3.7.1 and PDT 3.0.2</a></p>
</div>

<div class="homeitem3col">
	<h3>Eclipse PDT 2.2.0 All In Ones / Eclipse PHP Package</h3>
	<p>These downloads include PDT 2.2.0, Eclipse 3.6, Mylyn and 
		<?php
		$releasetag = "R";
		$version = array("Windows 32-bit" => "win32.zip", "Linux x86/GTK 2 32-bit" => "linux-gtk.tar.gz", "Linux x86/GTK 2 64-bit" => "linux-gtk-x86_64.tar.gz", "Mac OSX Cocoa 32-bit" => "macosx-cocoa.tar.gz", "Mac OSX Cocoa 64-bit" => "macosx-cocoa-x86_64.tar.gz", "Mac OSX Carbon" => "macosx-carbon.tar.gz");
		$sizes   = array("Windows 32-bit" => "141M", "Linux x86/GTK 2 32-bit" => "139M", "Linux x86/GTK 2 64-bit" => "140M", "Mac OSX Cocoa 32-bit" => "139M", "Mac OSX Cocoa 64-bit" => "139M", "Mac OSX Carbon" => "138M" );

		print '<a href="http://www.eclipse.org/pdt/downloads/?showAll=1&hlbuild=R200906250959&project=pdt#R200906250959">all other required plugins</a>.</p>
	<ul>';
		foreach ($version as $label => $suffix)
		{
			print <<<EOL
			<li>
				<div> $sizes[$label] (<a href="http://download.eclipse.org/technology/epp/downloads/release/helios/$releasetag/eclipse-php-helios-$suffix.md5">md5</a>)</div>
				<a href="http://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/helios/$releasetag/eclipse-php-helios-$suffix">
				<img alt="All-In-One Bundle including Eclipse and required dependencies" src="/modeling/images/dl-icon-aio-bundle.gif"/> <b style="color:green">All-In-One</b> $label</a>
			</li>
EOL;
		}
		?>
	</ul>
</div>

<div class="homeitem3col">
	<h3>PDT 2.1 SR-2 All In Ones / Eclipse PHP Package</h3>
	<p>These downloads include PDT 2.1-SR2, Eclipse 3.5-SR2, Mylyn and
		<?php
		$version = array("Windows 32-bit" => "SR2-win32.zip", "Linux x86/GTK 2 32-bit" => "SR2-linux-gtk.tar.gz", "Linux x86/GTK 2 64-bit" => "SR2-linux-gtk-x86_64.tar.gz", "Mac OSX Cocoa 32-bit" => "SR2-macosx-cocoa.tar.gz", "Mac OSX Cocoa 64-bit" => "SR2-macosx-cocoa-x86_64.tar.gz", "Mac OSX Carbon" => "SR2-macosx-carbon.tar.gz");
		$sizes   = array("Windows 32-bit" => "141M", "Linux x86/GTK 2 32-bit" => "139M", "Linux x86/GTK 2 64-bit" => "140M", "Mac OSX Cocoa 32-bit" => "139M", "Mac OSX Cocoa 64-bit" => "139M", "Mac OSX Carbon" => "138M" );
		$releasetag = "SR2";
		print '<a href="http://www.eclipse.org/pdt/downloads/?showAll=1&hlbuild=R200906250959&project=pdt#R200906250959">all other required plugins</a>.</p>
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
