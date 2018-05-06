<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$_theme = "";
	$theme = "";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}
		
	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional

	/* @var $Nav Nav */
	// override the default left navigator links (because there is no oter way to add the "About this project" link before them :(
	$Nav->setLinkList( array() );
	$Nav->addCustomNav("About", "#about", "", 1 );
	$Nav->addCustomNav("Features", "#features", "", 1 );
	
	// add the predefined links for left navigator (Committers, Newsgroup, Bugs, Articles)
	// this is a BAD practice since they are maintainted by Denis Roy in the nav.class.php file
	// and now I add them explicitly, bug good Denis did not provide a way to Link object to the Nav
	// so I cannot reuse his LinkList objects even if i want to :(
	$Nav->addCustomNav("Download", "#download", "", 1);
	$Nav->addCustomNav("Docs", "#docs", "", 1);
	$Nav->addCustomNav("Extensions", "#extensions", "_self", 1);
	$Nav->addCustomNav("Contributing", "#contributing", "", 1);
	
	// [almaz] the links here are relative to /pdt to make the links valid even when this page is included from a PHP file
	// that is not at the root, such as from  plans/php_plan_2_0.php
	$Nav->addNavSeparator("Project", 	""); 
	$Nav->addCustomNav("News & Noteworthy", "https://wiki.eclipse.org/PDT/NewIn53", "_self", 2);
	$Nav->addCustomNav("Project Details", "https://projects.eclipse.org/projects/tools.pdt/", "_self", 2);
	$Nav->addCustomNav("PDT Forum", "https://www.eclipse.org/forums/index.php/f/85/", "_self", 2);
	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/PDT", "_self", 2);
	$Nav->addCustomNav("Github", "http://github.com/eclipse/pdt", "_self", 2);
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/pdt-dev", "_self", 2);
	$Nav->addCustomNav("Open Bugs", "$bugurl/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=PDT&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" . $collist, "_self", 2);
	$Nav->addCustomNav("Submit A Bug", "$bugurl/bugs/enter_bug.cgi?product=" . $projectName, "_self", 2);

?>