<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# whois.php
	#
	# Author: 		Yossi Leon
	# Date:			2007-11-14
	#
	# Description: Who is using PDT by extending the product or bundling it with other products
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "Who is Using / Extending PDT?";
	$pageKeywords	= "PHP, who, using, Zend, Studio, Zero, Project, APDT";
	$pageAuthor		= "Yossi Leon";

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
						<font size="1" color="#8080FF">Which products or projects are using/extending the PDT project</font>
						</h1>
					</td>
				</tr>
			</tbody>
		</table>
		<h2>Zend Studio for Eclipse</h2>
		<p>Zend Studio for Eclipse is Zend Studio’s next generation product which is based 
		on proven Zend Studio technology and the Eclipse PHP Developers Tools (PDT) project. 
		Zend Studio for Eclipse creates a unique IDE that provides professional PHP development capabilities 
		combined with the Eclipse multi-language support and plug-in extension technology that creates the 
		worlds most powerful PHP IDE. <a href="http://www.zend.com/products/zend_studio/eclipse/">Learn more</a>
		</p>
		
		<br>
		<h2>Project Zero - IBM REST Development Framework</h2>
		<p>Project Zero introduces a simple environment for creating, assembling and executing 
		applications based on popular Web technologies. The Project Zero environment includes a 
		scripting runtime for Groovy and PHP with application programming interfaces optimized for 
		producing REST-style services, integration mash-ups and rich Web interfaces. Project Zero is 
		an incubator project started within IBM that is focused on the agile development of the next 
		generation of dynamic Web applications. <a href="http://www.projectzero.org/wiki/bin/view/">Learn more</a>
		</p>
		
		<br>
		<h2>APDT - PHP Aspect</h2>
		<p>
		The Aspect PHP Development Tools (APDT) project provides Eclipse platform based tool support for 
		AOSD with PHPAspect. The goal is to deliver a user experience that is consistent with PDT when 
		working with PHPAspect projects and resources. This project provides an integration layer between 
		the PHPAspect weaver, runtime and Eclipse/PDT extension points.
		<a href="http://code.google.com/p/apdt/">Learn more</a>
		</p>
	</div>
</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
