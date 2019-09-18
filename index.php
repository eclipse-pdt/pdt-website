<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");
	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();
	include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Eclipse PHP Development Tools";
	$pageKeywords	= "PHP, tool, web, editor, composer, debuger, profiler, phpunit, xdebug";
	$pageAuthor		= "PDT Team";

	$eclipseVersion = '<?=$eclipseVersion; ?>';

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("PDT", 	"/pdt/index.php");

	# End: page-specific settings
	#

	# Paste your HTML content here!
	ob_start();
?>

<div id="maincontent">
	<div id="midcolumn">

		<h1><?=$pageTitle?></h1>

		<h2 id="about">About</h2>
		<p>
		The PHP IDE project delivers a PHP Integrated Development Environment framework for the
		Eclipse platform. This project encompasses the development components necessary to
		develop PHP-based Web Applications and facilitates extensibility. It leverages the
		existing Web Tools Project in providing developers with PHP capabilities.
		</p>

		<div class="block-box block-box-classic">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					<li data-target="#carousel-example-generic" data-slide-to="4"></li>
					<li data-target="#carousel-example-generic" data-slide-to="5"></li>
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="img/shot1-min.png" alt="PHP Editor" itemprop="primaryImageOfPage" width="890" height="584">
						<div class="carousel-caption"></div>
					</div>
					<div class="item">
						<img src="img/shot5-min.png" alt="PHP Editor Dark Theme" itemprop="primaryImageOfPage" width="890" height="584">
						<div class="carousel-caption"></div>
					</div>
					<div class="item">
						<img src="img/shot4-min.png" alt="Advanced Content Assist" width="890" height="584">
						<div class="carousel-caption"></div>
					</div>
					<div class="item">
						<img src="img/shot6-min.png" alt="Advanced Content Assist Dark Theme" width="890" height="584">
						<div class="carousel-caption"></div>
					</div>
					<div class="item">
						<img src="img/shot2-min.png" alt="CSS Editor " width="890" height="584">
						<div class="carousel-caption"></div>
					</div>
					<div class="item">
						<img src="img/shot3-min.png" alt="Advanced Editing Features" width="890" height="584">
						<div class="carousel-caption"></div>
					</div>
				</div>

				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span>
				</a> <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>

		<h2 id="features">Features</h2>
		<div>
			<ul>
				<li>Syntax Highlighting</li>
				<li>Syntax Validation</li>
				<li>Content Assist</li>
				<li>Code Navigation</li>
				<li>PHP Debugging (Zend Debugger / Xdebug)</li>
				<li>PHP Profiling (Zend Debugger / Xdebug)</li>
				<li>PHPUnit</li>
				<li>Code Formatter</li>
				<li>Refactoring</li>
				<li>Code Templates</li>
				<li>Remote Projects</li>
				<li>Power of Eclipse Ecosystem</li>
			</ul>
		</div>

		<h2 id="download">Download</h2>
		<h3>Eclipse Package for PHP Developers</h3>

		<p>The essential starting point for PHP developers, including a PHP language support, a Git client, XML Editor and Mylyn, Terminal.<br /></p>
		<p>Click on the links below to start downloading package for specific OS. You have to install Java in your system.</p>
        <div class="row">
    		<div class="col-md-8">
    			<h3>OS X</h3>

    			<a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/<?=$eclipseVersion; ?>/R/eclipse-php-<?=$eclipseVersion; ?>-macosx-cocoa-x86_64.dmg" class="btn btn-primary" rel="nofollow">64 bit</a>

    		</div>
    		<div class="col-md-8">
    			<h3>Windows</h3>

    			<a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/<?=$eclipseVersion; ?>/R/eclipse-php-<?=$eclipseVersion; ?>-win32-x86_64.zip" class="btn btn-primary" rel="nofollow">64 bit</a>

    		</div>
    		<div class="col-md-8">
    			<h3>Linux</h3>

    			<a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/<?=$eclipseVersion; ?>/R/eclipse-php-<?=$eclipseVersion; ?>-linux-gtk-x86_64.tar.gz" class="btn btn-primary" rel="nofollow">64 bit</a>

    		</div>
        </div>

		<h3>Update existing Eclipse</h3>
		<p>
			In Eclipse, click <i>Help -> Install New Software</i> and work with <a href="#compositeLatest" class="red">*</a>: <a href="http://download.eclipse.org/tools/pdt/updates/6.3" rel="nofollow">http://download.eclipse.org/tools/pdt/updates/6.3</a>
		</p>
		<div>
			<a href="http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=1944539" rel="nofollow" class="drag" title="Drag to your running Eclipse workspace to install PHP Development Tools">
				<img src="img/install.png" class="img-responsive center-block" alt="Drag to your running Eclipse workspace to install PHP Development Tools" />
			</a>
		</div>
		<div>
			<img src="img/update_dialog.png" class="img-responsive" alt="Eclipse Install&amp;Update Dialog" width="843" height="743">
		</div>
		<p>If you're looking for developer builds, try out <a href="#compositeLatestNightly" class="red">**</a>: <a href="http://download.eclipse.org/tools/pdt/updates/7.0" rel="nofollow">http://download.eclipse.org/tools/pdt/updates/7.0</a> </p>
		<p>All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.html" rel="nofollow">Eclipse.org Software User Agreement</a> unless otherwise specified.</p>
		<p><span class="red">&nbsp;*</span> - Latest stable: <a id="compositeLatest" href="http://download.eclipse.org/tools/pdt/updates/latest/" rel="nofollow">http://download.eclipse.org/tools/pdt/updates/latest/</a><br />
		<span class="red">**</span> - Latest nightly: <a id="compositeLatestNightly" href="http://download.eclipse.org/tools/pdt/updates/latest-nightly/" rel="nofollow">http://download.eclipse.org/tools/pdt/updates/latest-nightly/</a></p>

<?php /*
		<h3>Download PDT ZIP package</h3>
		<p>This packages contain PDT p2 repository, which can be used to install PDT in Eclipse without access to Eclipse.org</p>
		<ul>
    		<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-6.1.0.201808281524.zip" rel="nofollow">PDT Update 6.1.0 (2018-09-19)</a></li>
    		<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-6.0.0.201806122250.zip" rel="nofollow">PDT Update 6.0.0 (2018-06-27)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-5.3.0.201803070838.zip" rel="nofollow">PDT Update 5.3.0 (2018-03-21)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-5.2.0.201712021751.zip" rel="nofollow">PDT Update 5.2.0 (2017-12-20)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-5.0.0.201706130902.zip" rel="nofollow">PDT Update 5.0.0 (2017-06-28)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.3.0.201703131616.zip" rel="nofollow">PDT Update 4.3.0 (2017-03-23)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.2.0.201611142355.zip" rel="nofollow">PDT Update 4.2.0 (2016-12-21)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.1.0.201609140517.zip" rel="nofollow">PDT Update 4.1.0 (2016-09-28)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.0.1.201606232253.zip" rel="nofollow">PDT Update 4.0.1 (2016-07-11)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.0.0.201606081033.zip" rel="nofollow">PDT Update 4.0.0 (2016-06-22)</a></li>
		</ul>
		*/ ?>
		<h2 id="extensions">Extensions</h2>
		<p>The experience of developing PHP application with PDT can be extended with a large variety of plugins created by the Eclipse ecosystem. Below are open source projects and commercial products that are built on top of PDT or are integrated with PDT.</p>
		<table>
        <tr>
          <!-- <th><a href="http://p2.pdt-extensions.org/"><img src="img/extensions/pdt-eg.png" alt="PDT Extensions group" width="128" height="128"></a></th> -->
          <td>
            <h4>PDT Extensions group</h4>
            <i>Open source plugins that extend or integrate with PDT</i>
            <br><br>
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pex-core" rel="nofollow">CS-Fixer</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#phpmaven" rel="nofollow">PHP&nbsp;Maven</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pti" rel="nofollow">CodeSniffer</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pti" rel="nofollow">PHPDepend</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/frameworks.html#symfony" rel="nofollow">Symfony</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/frameworks.html#phing" rel="nofollow">Phing</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/frameworks.html#yii" rel="nofollow">Yii</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/frameworks.html#drupal" rel="nofollow">Drupal</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/frameworks.html#magento" rel="nofollow">Magento</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/frameworks.html#aspectphp" rel="nofollow">Aspect&nbsp;PHP</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#yedit" rel="nofollow">YAML</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#twig" rel="nofollow">Twig</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#smarty" rel="nofollow">Smarty</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#coffee" rel="nofollow">CoffeeScript</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#markdown" rel="nofollow">Markdown</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#rest" rel="nofollow">reStructuredText</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#gherkin" rel="nofollow">Gherkin</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#shelled" rel="nofollow">Shell&nbsp;Scripts</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#vrapper" rel="nofollow">Vrapper</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#emmet" rel="nofollow">Emmet</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#jquery" rel="nofollow">JQuery</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#jshint" rel="nofollow">JSHint</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#closure" rel="nofollow">Closure</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#extjs" rel="nofollow">ExtJS</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#less" rel="nofollow">Less</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/editors.html#themes" rel="nofollow">Eclipse&nbsp;Color&nbsp;Themes</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/misc.html#logviewer" rel="nofollow">Log&nbsp;Viewer</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/misc.html#ansi" rel="nofollow">ANSI&nbsp;Console</a>&nbsp;::
            <a href="http://p2.pdt-extensions.org/misc.html#copyright" rel="nofollow">Copyright&nbsp;Wizard</a>
            <br><br>
            <a href="http://p2.pdt-extensions.org/" rel="nofollow">Visit website</a>
          </td>
				</tr>
		</table>

		<h2 id="contributing">Contributing</h2>
		<p>
		PDT is an Open Source project and we welcome everyone who's interested to contribute his or her source code or help project in some other way. Visit our <a href="https://wiki.eclipse.org/PDT/Contributing">wiki page</a> to learn how to get source code and build it.
		</p>
		<p>
		Don't hesitate to nurture PDT developers team with your questions and hit our <a href="http://dev.eclipse.org/mailman/listinfo/pdt-dev">mailing list</a>.
		</p>
		<h3>Thanks to <img src="https://www.yourkit.com/images/yklogo.png" alt="YourKit" /></h3>
		<p>YourKit is kindly supporting open source projects with its full-featured <a href="http://www.yourkit.com/java/profiler/index.jsp">YourKit Java Profiler</a>.
		<a href="http://www.yourkit.com">YourKit, LLC</a> is the creator of innovative and intelligent tools for profiling Java and .NET applications.
		</p>
	</div>
</div>

<?php
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
