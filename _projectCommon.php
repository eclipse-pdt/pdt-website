<?php 

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 

	$PR = "pdt";
	$projectName = "PDT";
	$isBuildServer = (preg_match("/^(emft|modeling|build)\.eclipse\.org$/", $_SERVER["SERVER_NAME"]));
	$isBuildDotEclipseServer = $_SERVER["SERVER_NAME"] == "build.eclipse.org";
	$isWWWserver = (preg_match("/^(?:www.|)eclipse.org$/", $_SERVER["SERVER_NAME"]));
	$isEclipseCluster = (preg_match("/^(?:www.||download.|download1.|build.)eclipse.org$/", $_SERVER["SERVER_NAME"]));
	$debug = (isset ($_GET["debug"]) && preg_match("/^\d+$/", $_GET["debug"]) ? $_GET["debug"] : -1);
	$writableRoot = ($isBuildServer ? $_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/" : "/home/data/httpd/writable/www.eclipse.org/");
	$writableBuildRoot = $isBuildDotEclipseServer ? "/opt/public/cbi" : "/home/www-data";
	
	$rooturl = "http://" . $_SERVER["HTTP_HOST"] . "/$PR";
	$downurl = ($isBuildServer ? "" : "http://www.eclipse.org");
	$bugurl = "https://bugs.eclipse.org";

	if (isset ($_GET["skin"]) && preg_match("/^(Blue|EclipseStandard|Industrial|Lazarus|Miasma|Modern|OldStyle|Phoenix|PhoenixTest|PlainText|Nova)$/", $_GET["skin"], $regs))
	{
		$theme = $regs[1];
	}
	else
	{
		$theme = "Phoenix";
	}

	/* projects/components in cvs */
	/* "proj" => "cvsname" */
	$cvsprojs = array ("pdt" => "org.eclipse.pdt");

	/* sub-projects/components in cvs for projects/components above (if any) */
	/* "cvsname" => array("shortname" => "cvsname") */
	$cvscoms = array();
	
	$projects = array(
		"PDT" => "pdt",
	);
	$tmp = array_flip($projects);
	$bugcoms = preg_replace("/ /", "%20", $tmp);
	
	$extraprojects = array(); //components with only downloads, no info yet, "prettyname" => "directory"
	$nodownloads = array(); //components with only information, no downloads, or no builds available yet, "projectkey"
	$nonewsgroup = array(); //components without newsgroup
	$nomailinglist = array(); //components without mailinglist
	$incubating = array(); // components which are incubating - EMF will never have incubating components -- see EMFT
	$nomenclature = "Project"; //are we dealing with "components" or "projects"?
	
	include_once $_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/scripts.php";
	
	$regs = null;
	$proj = "/pdt"; // (isset($_GET["project"]) && preg_match("/^(" . join("|", $projects) . ")$/", $_GET["project"], $regs) ? $regs[1] : getProjectFromPath($PR));
	$projct= preg_replace("#^/#", "", $proj);
	
	$buildtypes = array(
		"R" => "Release",
		"S" => "Stable",
		"I" => "Integration",
		"M" => "Maintenance",
		"N" => "Nightly"
	);
		
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
	$Nav->addCustomNav("Downloads", "$downurl/$PR/downloads/", "_self", 2);
	// apeled - disabled the link to the update manager for now
	//$Nav->addCustomNav("Update Manager", "$rooturl/updates/", "_self", 2);
	$Nav->addCustomNav("Installation", 		"http://wiki.eclipse.org/PDT/Installation","_self", 2);
	$Nav->addCustomNav("Project Plan", 		"http://www.eclipse.org/projects/project-plan.php?projectid=tools.pdt","_self", 2);
	$Nav->addCustomNav("Wiki", 				"http://wiki.eclipse.org/index.php/PDT", 		"_self", 2);
	$Nav->addCustomNav("FAQ", 				"http://wiki.eclipse.org/PDT/FAQ", 			"_self", 2);
	$Nav->addCustomNav("Tutorials", 				"http://wiki.eclipse.org/PDT/TUTORIALS", 			"_self", 2);
	$Nav->addCustomNav("Newsgroup Search", "http://www.eclipse.org/newsportal/thread.php?group=eclipse.tools.pdt", "_self", 2);
	$Nav->addCustomNav("Open Bugs", "$bugurl/bugs/buglist.cgi?query_format=advanced&short_desc_type=allwordssubstr&short_desc=&product=PDT&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&status_whiteboard_type=allwordssubstr&status_whiteboard=&keywords_type=allwords&keywords=&bug_status=UNCONFIRMED&bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=" . $collist, "_self", 2);
	$Nav->addCustomNav("Submit A Bug", "$bugurl/bugs/enter_bug.cgi?product=" . $projectName, "_self", 2);
	$Nav->addCustomNav("Development", 		"/pdt/development.php", 			"_self", 2);	

	$App->AddExtraHtmlHeader("<link rel=\"stylesheet\" type=\"text/css\" href=\"/modeling/includes/common.css\"/>\n");
	addGoogleAnalyticsTrackingCodeToHeader("UA-3036363-2");
	$App->Promotion = TRUE;
?>  
  
