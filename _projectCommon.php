<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional

	/* @var $Nav Nav */
	// override the default left navigator links (because there is no oter way to add the "About this project" link before them :(
	$Nav->setLinkList( array() );
	$Nav->addCustomNav("About this project", "/projects/project_summary.php?projectid=tools.pdt", "", 1 );
	
	// add the predefined links for left navigator (Committers, Newsgroup, Bugs, Articles)
	// this is a BAD practice since they are maintainted by Denis Roy in the nav.class.php file
	// and now I add them explicitly, bug good Denis did not provide a way to Link object to the Nav
	// so I cannot reuse his LinkList objects even if i want to :(
	$Nav->addCustomNav("Committers", "http://wiki.eclipse.org/index.php/Development_Resources", "_self", 1);
	$Nav->addCustomNav("Newsgroups", "/newsgroups/", "_self", 1);
	$Nav->addCustomNav("Bugs", "https://bugs.eclipse.org/bugs/", "_self", 1);
	$Nav->addCustomNav("Articles", "/articles/", "_self", 1);
	
	// [almaz] the links here are relative to /pdt to make the links valid even when this page is included from a PHP file
	// that is not at the root, such as from  plans/php_plan_2_0.php
	$Nav->addNavSeparator("Project Home", 	"/pdt/index.php"); 
	$Nav->addCustomNav("Downloads", 		"http://download.eclipse.org/tools/pdt/downloads/", 	"_self", 2);
	$Nav->addCustomNav("Installation", 		"/pdt/install.php","_self", 2);
	$Nav->addCustomNav("Project Plan", 		"/pdt/plans/php_plan_2_0.php","_self", 2);
	$Nav->addCustomNav("Wiki", 				"http://wiki.eclipse.org/index.php/PDT", 		"_self", 2);
	$Nav->addCustomNav("FAQ", 				"http://wiki.eclipse.org/PDT/FAQ", 			"_self", 2);
	$Nav->addCustomNav("Tutorials", 				"http://wiki.eclipse.org/PDT/TUTORIALS", 			"_self", 2);
	$Nav->addCustomNav("Development", 		"/pdt/development.php", 			"_self", 2);	


?>  
  