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
	$ga = <<< END
<span style="display:none"><script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script><script type="text/javascript">
_uacct = "UA-2284412-1";
urchinTracker();
</script>
<script type="text/javascript">
var sc_project=2769171; 
var sc_invisible=0; 
var sc_partition=28; 
var sc_security="e6400172"; 
</script><script type="text/javascript" src="http://www.statcounter.com/counter/counter_xhtml.js"></script><noscript><div class="statcounter"><a class="statcounter" href="http://www.statcounter.com/"><img class="statcounter" src="http://c29.statcounter.com/2769171/0/e6400172/0/" alt="blog counter" /></a></div></noscript>
</span>
END;

	// override the default left navigator links (because there is no oter way to add the "About this project" link before them :(
	$Nav->setLinkList( array() );
	$Nav->addCustomNav("About this project", "/projects/project_summary.php?projectid=tools.pdt", "", 1 );
	
	// add the predefined links for left navigator (Committers, Newsgroup, Bugs, Articles)
	// this is a BAD practice since they are maintainted by Denis Roy in the nav.class.php file
	// and now I add them explicitly, bug good Denis did not provide a way to Link object to the Nav
	// so I cannot reuse his LinkList objects even if i want to :(
	$Nav->addCustomNav("Committers", "http://wiki.eclipse.org/index.php/Development_Resources", "_self", 1);
	$Nav->addCustomNav("Newsgroups", $www_prefix . "/newsgroups/", "_self", 1);
	$Nav->addCustomNav("Bugs", "https://bugs.eclipse.org/bugs/", "_self", 1);
	$Nav->addCustomNav("Articles", $www_prefix . "/articles/", "_self", 1);
	
	// [almaz] the links here are relative to /pdt to make the links valid even when this page is included from a PHP file
	// that is not at the root, such as from  plans/php_plan_1_1.php
	$Nav->addNavSeparator("Project Home", 	"/pdt/index.php"); 
	$Nav->addCustomNav("Downloads", 		"http://download.eclipse.org/tools/pdt/downloads/", 	"_self", 2);
	$Nav->addCustomNav("Installation", 		"/pdt/install.php","_self", 2);
	$Nav->addCustomNav("Project Plan", 		"/pdt/plans/php_plan_1_1.php","_self", 2);
	$Nav->addCustomNav("Wiki", 				"http://wiki.eclipse.org/index.php/PDT", 		"_self", 2);
	$Nav->addCustomNav("FAQ", 				"http://wiki.eclipse.org/PDT/FAQ", 			"_self", 2);
	$Nav->addCustomNav("Development", 		"/pdt/development.php", 			"_self", 2);	


?>  
  