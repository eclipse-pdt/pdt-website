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

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("PDT", 	"/pdt/index.php");

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
				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="img/shot1-min.png" alt="PHP Editor" itemprop="primaryImageOfPage" width="890" height="565">
						<div class="carousel-caption"></div>
					</div>
					<div class="item">
						<img src="img/shot2-min.png" alt="CSS Editor " width="890" height="565">
						<div class="carousel-caption"></div>
					</div>
					<div class="item">
						<img src="img/shot3-min.png" alt="Advanced Editing Features" width="890" height="565">
						<div class="carousel-caption"></div>
					</div>
					<div class="item">
						<img src="img/shot4-min.png" alt="Advanced Content Assist" width="890" height="565">
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
				<li>PHP Debugging (Zend Debugger / XDebug)</li>
				<li>PHP Profiling (Zend Debugger)</li>
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
		<p>Click on the buttons below to start downloading package for specific OS. You have to install Java in your system.</p>

		<div class="large-4 columns">
			<h3>OS X</h3>
			<ul>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/oxygen/3/eclipse-php-oxygen-3-macosx-cocoa-x86_64.dmg" rel="nofollow">64 bit</a></li>
			</ul>
		</div>
		<div class="large-4 columns">
			<h3>Windows</h3>
			<ul>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/oxygen/3/eclipse-php-oxygen-3-win32.zip" rel="nofollow">32 bit</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/oxygen/3/eclipse-php-oxygen-3-win32-x86_64.zip" rel="nofollow">64 bit</a></li>
			</ul>
		</div>
		<div class="large-4 columns">
			<h3>Linux</h3>
			<ul>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/oxygen/3/eclipse-php-oxygen-3-linux-gtk.tar.gz" rel="nofollow">32 bit</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/technology/epp/downloads/release/oxygen/3/eclipse-php-oxygen-3-linux-gtk-x86_64.tar.gz" rel="nofollow">64 bit</a></li>
			</ul>
		</div>

		<h3>Download PDT ZIP package</h3>
		<p>This packages contain PDT p2 repository, which can be used to install PDT in Eclipse without access to Eclipse.org</p>
		<ul>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-5.3.0.201803070838.zip" rel="nofollow">PDT Update 5.3.0 (2018-03-21)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-5.2.0.201712021751.zip" rel="nofollow">PDT Update 5.2.0 (2017-12-20)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-5.0.0.201706130902.zip" rel="nofollow">PDT Update 5.0.0 (2017-06-28)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.3.0.201703131616.zip" rel="nofollow">PDT Update 4.3.0 (2017-03-23)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.2.0.201611142355.zip" rel="nofollow">PDT Update 4.2.0 (2016-12-21)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.1.0.201609140517.zip" rel="nofollow">PDT Update 4.1.0 (2016-09-28)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.0.1.201606232253.zip" rel="nofollow">PDT Update 4.0.1 (2016-07-11)</a></li>
			<li><a href="https://www.eclipse.org/downloads/download.php?file=/tools/pdt/downloads/pdt-Update-4.0.0.201606081033.zip" rel="nofollow">PDT Update 4.0.0 (2016-06-22)</a></li>
		</ul>

		<h3>Update existing Eclipse</h3>
		<p>
			In Eclipse, click <i>Help -> Install New Software</i> and work with <a href="#compositeLatest" class="red">*</a>: <a href="http://download.eclipse.org/tools/pdt/updates/5.3">http://download.eclipse.org/tools/pdt/updates/5.3</a>
		</p>
		<div class="pagination-centered">
			<a href="http://marketplace.eclipse.org/marketplace-client-intro?mpc_install=1944539" class="drag" title="Drag to your running Eclipse workspace to install PHP Development Tools"><img src="img/install.png" alt="Drag to your running Eclipse workspace to install PHP Development Tools" /></a> <img src="img/update_dialog.png" alt="Eclipse Install&amp;Update Dialog" width="843" height="743">
		</div>
		<p>If you're looking for developer builds, try out <a href="#compositeLatestNightly" class="red">**</a>: <a href="http://download.eclipse.org/tools/pdt/updates/6.0">http://download.eclipse.org/tools/pdt/updates/6.0</a> </p>
		<p>All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.html">Eclipse.org Software User Agreement</a> unless otherwise specified.</p>
		<p><span class="red">&nbsp;*</span> - Latest stable: <a id="compositeLatest" href="http://download.eclipse.org/tools/pdt/updates/latest/">http://download.eclipse.org/tools/pdt/updates/latest/</a><br />
		<span class="red">**</span> - Latest nightly: <a id="compositeLatestNightly" href="http://download.eclipse.org/tools/pdt/updates/latest-nightly/">http://download.eclipse.org/tools/pdt/updates/latest-nightly/</a></p>

		<h2 id="docs">Docs</h2>
		<ul>
			<li><a href="http://help.eclipse.org/neon/topic/org.eclipse.php.help/html/table_of_contents.html" itemprop="relatedLink">PDT User Manual</a>. All PDT features at a glance.</li>
			<li><a href="http://wiki.eclipse.org/index.php/PDT">PDT Wiki</a>. Find more information and discussions in the PDT Wiki page</li>
			<li><a href="https://www.genuitec.com/debugging-php-with-eclipse-pdt/">Debugging PHP with Eclipse PDT: A WordPress Example</a>. Created by Octavio Gonzalez</li>
			<li><a href="documents/XDebugGuideForPDT2.0.pdf">PDT 2.0 XDebug Guide</a>. XDebug guide for configuration and usage of XDebug under PDT 2.0. Created by Dave Kelsey [Old]</li>
			<li><a href="/pdt/articles/debugger/os-php-eclipse-pdt-debug-pdf.pdf">Debugging PHP using Eclipse and PDT</a> [Old]</li>
		</ul>

		<h2 id="extensions">Extensions</h2>
		<p>The experience of developing PHP application with PDT can be extended with a large variety of plugins created by the Eclipse ecosystem. Below are open source projects and commercial products that are built on top of PDT or are integrated with PDT.</p>
		<table>
        <tr>
          <!-- <th><a href="http://p2.pdt-extensions.org/"><img src="img/extensions/pdt-eg.png" alt="PDT Extensions group" width="128" height="128"></a></th> -->
          <td>
            <h4>PDT Extensions group</h4>
            <i>Open source plugins that extend or integrate with PDT</i>
            <br><br>
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pex-core">Code&nbsp;Formatting</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pex-core">Class&nbsp;Creation</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pex-core">Getters/Setters&nbsp;Generation</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pex-core">Semantic&nbsp;Analysis</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pex-core">CS-Fixer</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#phpmaven">PHP&nbsp;Maven</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pti">CodeSniffer</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#pti">PHPDepend</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/phpfeatures.html#makegood">MakeGood</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/frameworks.html#symfony">Symfony</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/frameworks.html#phing">Phing</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/frameworks.html#yii">Yii</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/frameworks.html#drupal">Drupal</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/frameworks.html#magento">Magento</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/frameworks.html#aspectphp">Aspect&nbsp;PHP</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#yedit">YAML</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#twig">Twig</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#smarty">Smarty</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#coffee">CoffeeScript</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#markdown">Markdown</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#rest">reStructuredText</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#gherkin">Gherkin</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#shelled">Shell&nbsp;Scripts</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#vrapper">Vrapper</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#emmet">Emmet</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#jquery">JQuery</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#jshint">JSHint</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#closure">Closure</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#extjs">ExtJS</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#less">Less</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/editors.html#themes">Eclipse&nbsp;Color&nbsp;Themes</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/misc.html#logviewer">Log&nbsp;Viewer</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/misc.html#ansi">ANSI&nbsp;Console</a>&nbsp;:: 
            <a href="http://p2.pdt-extensions.org/misc.html#copyright">Copyright&nbsp;Wizard</a>
            <br><br>
            <a href="http://p2.pdt-extensions.org/">Visit website</a>
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