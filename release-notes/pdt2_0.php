<?php  																														
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
$App 	= new App();	
$Nav	= new Nav();	
$Menu 	= new Menu();		
include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Roy Ganor
	# Date:			2008-12-28
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDT 2.0 Release Notes";
	$pageKeywords	= "PHP";
	$pageAuthor		= "PDT Committers";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

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
			<td align="left" width="60%">
				<h1> Eclipse PDT 2.0 is now available </h1>
			</td>
			<td>
				<P align="right">
				<a href="../downloads"> <img src="../images/download_pdt.png" /></a>
				</P>
			</td>
		</tr>
	</tbody>
</table>


Eclipse <a href="www.eclipse.org/pdt">PHP Development Tools (PDT)</a> 2.0 is now available from the <a href="http://www.eclipse.org/pdt">Eclipse.org download site</a> or from the <a href="http://www.zend.com/community/pdt">Zend/PDT Community site</a> (includes Eclipse PDT and Zend Debugger which enables users to perform local and remote debugging).
<p></p>

The Eclipse PDT team would like to thank everyone who made this release possible.  As always, our Eclipse PDT community has provided countless new features, bug fixes, documentation, etc. We'd also like to thank the Eclipse Dynamic Languages Toolkit team for cooperating and helping us with the new infrastructure.<p></p>

Fully compliant with Eclipse standards, the new 2.0 release enables PHP developers to leverage a wide variety of Eclipse projects, such as <a href="http://www.eclipse.org/webtools/">Web Tools Project </a> (WTP) and <a href="http://www.eclipse.org/dltk/">Dynamic Language Toolkit</a> (DLTK), for faster and easier development. PDT 2.0 also offers strong support for Object-Oriented Programming (OOP) in PHP.<p></p>

<p></p>
<h2>What's New in PDT 2.0?</h2>
PDT 2.0 was designed based on principles different to those of Eclipse PDT 1.0. For example, different techniques were used to model workspace projects. PDT 2.0 now uses an indexing and caching mechanism for improved performance and experience with code assist and navigation. Moreover, since PHP provides enhanced Object-Oriented features like inheritance and polymorphism, PDT 2.0 provides enhanced features such as type hierarchy, override indicators and type navigation for programmers who utilize these language properties. 
<p></p>
<h3>Lighter and Faster</h3>
As previously mentioned, PDT 2.0 is based on the robust Eclipse framework for caching and indexing language elements, utilizing the proven mechanism used by the Eclipse Dynamic Languages Toolkit project. In addition, PDT 2.0 has a  reduced list of dependencies which includes only those features that are a "must have" for PHP developers (so no more unnecessary Java or J2EE components in the tool). Of course, Eclipse provides an easy way to add extra plug-ins as required.
<p></p>
<h3>Buildpath Configuration</h3>
Although veteran Eclipse users are familiar with this term, it is new to most PHP developers. The Build Path mechanism provides users with the ability to separate application resources (PHP files) from other resources (such as images, CSS, JavaScript files), thereby speeding up the Eclipse build process as well as making the project more modular.
<p></p>
<img src="http://farm4.static.flickr.com/3103/3127928318_3795f43c38.jpg?v=0" />
<p></p>
<h3>Mark Occurrences</h3>
The Mark Occurrences feature enables users to see where an element is referenced by simply clicking on the element in the editor. When the Mark Occurrences feature is enabled, all occurrences of the element within the active file will be highlighted, and indicators will be displayed in the annotations bar (to the right of the editor). 'Read' and 'write' occurrences are marked in different colors. <p></p>
<img src="http://farm4.static.flickr.com/3129/3138473414_33875e2308_o.png" />
<p></p>
<h3>Override Indicators</h3>
'Override Indicators' are markers that display special decoration icons to indicate methods that override or implement other methods from a super-type's class / interface. The override indicators will be displayed as triangles in the marker bar (the vertical ruler to the left of the editor) next to the method's definition. Green triangles indicate an overridden method, while white triangles indicate an implemented method. Hovering over a triangle displays a tool-tip that reveals the overridden or implemented method's super-type.
<p></p>
<img src="http://farm4.static.flickr.com/3226/3127116193_b4ecc0a9d8.jpg?v=0" />
<p></p>
<h3>Type hierarchy</h3>
The Type Hierarchy view is exceptionally useful for viewing and navigating OO PHP code. There are three presentation formats available through this view: the Type Hierarchy, the Supertype Hierarchy, and the Subtype Hierarchy. These three presentation formats revolve around a focal point type, indicated by the label decoration, which is the type on which the view was opened. When viewing classes, the view displays the class hierarchy from the object through to all of the class and subclasses. When viewing interfaces, the view displays all classes that implement the interface and their subtypes. When viewing supertypes, the view displays classes that are extended and interfaces that are implemented. When viewing subtypes, the view displays a class and its subclasses or an interface and the classes that implement it.

<img src="http://farm4.static.flickr.com/3081/3127957598_6dd860b88f_o.png" />

<p></p>
<h3>Type and Method Navigation</h3>
Any method or type in the workspace can be opened using the Open Type wizard or the Open Method wizard. The Open Type/Method dialog maintains a history of recently opened elements. These are shown when the dialog is opened and stay above a separator line when filter expressions are typed.
<p></p>
<img src="http://farm4.static.flickr.com/3200/3127137391_8979da32a0.jpg?v=0" />
<p></p>
<h3>Improved Code Assist</h3>
PDT 2.0 introduces a new code assist mechanism. This new mechanism is smarter as it crawls through code to determine variable types, providing more appropriate suggestions than those provided in PDT 1.0. PDT 2.0, code assist also supports camel case matches when entering code, which displays code assist options based on an element's initials. In addition, code assist supports options for 'magic members'. These are properties and methods which were declared using the @property or @method tags within PHP DocBlock comments rather than in the PHP script itself.
<p> </p>
<img src="http://farm4.static.flickr.com/3208/3138497480_8b6500d9e4_o.png" />

<p></p>
<h3>Eclipse 3.4.1 Features and Bug Fixes</h3>
Eclipse 3.4.1 was released in mid September and provides a variety of bug fixes and useful features. For example, using the <a href="http://help.eclipse.org/help33/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-cvs-project-set.htm">Team Project Set</a> feature users can share workspaces with other team members. A project set is a text file that contains a pointer to each of the projects contained in the project set. When a project set is imported, these pointers are used to fetch the projects from the repository. Project sets can include any projects that are mapped to supported repository toolings, such as CVS.
For a full list of new Eclipse 3.4.1 features, <a href="http://update.eclipse.org/downloads/drops/R-3.4-200806172000/whatsnew3.4/eclipse-news-part1.html">click here</a>

<p></p>

<h2>More information on PDT </h2>
<ul>
<li>PDT Project on Zend.com:  http://www.zend.com/en/community/pdt</li>
<li>PDT Project on Elcipse.org: http://www.eclipse.org/pdt/ </li>
<li>PDT DEV2QA: http://wiki.eclipse.org/PDT/2.0_Plan </li>
<li>Known Issues: 
	<ul>
		<li>240553 - PDT Debugger - Breakpoint on Linked resource doesn't work</li>
		<li>240591 - Outline - [regression] php project outline is missing the groups</li>
		<li>240804 - PHP Expl - [regression] Cannot move projects</li>
		<li>253712 - Editor - Switching a project from PHP5 to PHP4 - build errors</li>
		<li>259449 - Code Assist - abstract should not be presented in code assist</li>
	</ul>
</ul>

<p></p>




</div>
</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	$html .= "<!-- START: Google Analysis report --><script type=\"text/javascript\"> var gaJsHost = ((\"https:\" == document.location.protocol) ? \"https://ssl.\" : \"http://www.\"); document.write(unescape(\"%3Cscript src='\" + gaJsHost + \"google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E\")); </script> <script type=\"text/javascript\"> try { var pageTracker = _gat._getTracker(\"UA-3036363-2\"); pageTracker._trackPageview(); } catch(err) {} </script><!-- END: Google Analysis report -->";

	
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>


