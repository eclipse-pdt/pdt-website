<?php
    $eclipseVersion = '2024-06';
    $latest = '8.2';
    $latestDev = '8.3';

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
		$theme = 'quicksilver';
	}

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional

	/** @var $Nav Nav */
	// override the default left navigator links (because there is no oter way to add the "About this project" link before them :(
	$Nav->setLinkList( array() );
	$Nav->addCustomNav("About", "#about", "", 1 );
	$Nav->addCustomNav("Features", "#features", "", 1 );

	// add the predefined links for left navigator (Committers, Newsgroup, Bugs, Articles)
	// this is a BAD practice since they are maintainted by Denis Roy in the nav.class.php file
	// and now I add them explicitly, bug good Denis did not provide a way to Link object to the Nav
	// so I cannot reuse his LinkList objects even if i want to :(
	$Nav->addCustomNav("Download", "#download", "", 1);
	$Nav->addCustomNav("Extensions", "#extensions", "_self", 1);
	$Nav->addCustomNav("Contributing", "#contributing", "", 1);

	// [almaz] the links here are relative to /pdt to make the links valid even when this page is included from a PHP file
	// that is not at the root, such as from  plans/php_plan_2_0.php
	$Nav->addNavSeparator("Project", 	"");
	$Nav->addCustomNav("News & Noteworthy", "https://github.com/eclipse-pdt/pdt/wiki/NewIn" . str_replace('.', '', $latest), "_self", 2);
	$Nav->addCustomNav("Marketplace", "https://marketplace.eclipse.org/content/php-development-tools", "_self", 2);
	$Nav->addCustomNav("Project Repository", "https://github.com/eclipse-pdt/pdt", "_self", 2);
	$Nav->addCustomNav("Project Details", "https://projects.eclipse.org/projects/tools.pdt/", "_self", 2);

	$Nav->addNavSeparator("Support", 	"");
	$Nav->addCustomNav("Manual", "https://help.eclipse.org/topic/org.eclipse.php.help/html/table_of_contents.html", "_self", 2);
	$Nav->addCustomNav("PDT Forum", "https://www.eclipse.org/forums/index.php/f/85/", "_self", 2);
	$Nav->addCustomNav("Wiki", "https://github.com/eclipse-pdt/pdt/wiki", "_self", 2);
	$Nav->addCustomNav("Mailing List", "https://dev.eclipse.org/mailman/listinfo/pdt-dev", "_self", 2);
	$Nav->addCustomNav("Submit A Bug", "https://github.com/eclipse-pdt/pdt/issues/new?assignees=&labels=bug&template=bug_report.md&title=", "_self", 2);

	// fork me
	/** @var $App App */
	$App->setThemeVariables(array('leftnav_html' => '<a href="https://github.com/eclipse-pdt/pdt" class="fork-me"><img width="149" height="149" src="https://github.blog/wp-content/uploads/2008/12/forkme_right_orange_ff7600.png?resize=149%2C149" class="attachment-full size-full" alt="Fork me on GitHub" data-recalc-dims="1"></a>'));
?>

<style type="text/css">
	.carousel-control .glyphicon-chevron-left, .carousel-control .icon-prev, .carousel-control .glyphicon-chevron-right, .carousel-control .icon-next { color: #f7941e; }
	.carousel-control.right, .carousel-control.left { background: none !important; }
	.carousel-indicators li { border-color: #f7941e; }
	.carousel-indicators .active { background-color: #f7941e; }
    .fork-me {
        position: absolute;
        top: 0px;
        right: 0px;
        z-index: 3;
    }
</style>
