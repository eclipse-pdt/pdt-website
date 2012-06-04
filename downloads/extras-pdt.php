<?php

$oldrels = array(
	#"1.0.3" => array("2008/06/03 00:00", "http://download.eclipse.org/tools/pdt/downloads/release.php?release=R20080603"),
);

function doRequirements()
{
?>

<div class="homeitem3col">
	<h3>Eclipse PDT 3.0.x All In Ones</h3>
	<p>Note: PDT 3.0 can be easily added to an existing Eclipse installation via the Indigo repository, read <a href="http://download.eclipse.org/releases/indigo/">more</a></p>
	<p><a target="_blank" href="http://www.zend.com/en/community/pdt/downloads">Download All-In-One package including Eclipse 3.7.2 and PDT 3.0.2 from Zend</a> (this link will take you to an external site and an alternative distribution)</p>
</div>

<div class="homeitem3col">
	<h3>PHP Debugging</h3>
<p>In order to be able to perform debugging using PDT, your HTTP server needs to be configured appropriately. You can download one of the following extra packages:</p>
<ul id="rDebug">
	<li><img src="http://www.eclipse.org/modeling/images/dl-more.gif" alt="Zend Debugger Site" /> Zend Debugger (<a href="http://static.zend.com/topics/Zend-Debugger-Installation-Guide-050211.pdf">See manual configuration guide</a>, or download a ready to use <a href="http://www.zend.com/products/server-ce/downloads">Zend Sever Community Edition</a></li>
	<li><img src="http://www.eclipse.org/modeling/images/dl-more.gif" alt="Xdebug Site" /> <a href="http://xdebug.org/"> XDebug </a> </li>
	<br> Note: Due to Eclipse licensing requirements, PDT with debugger packages are distributed from external locations. <br>
	<a href="http://www.eclipse.org/pdt/articles/debugger/os-php-eclipse-pdt-debug-pdf.pdf">Click here</a> to learn how to set up your environment in order to be able to perform debugging with PDT.
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
