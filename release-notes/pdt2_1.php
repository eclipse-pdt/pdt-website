<?php  																														
set_include_path($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common" . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT'] . "/projects" . PATH_SEPARATOR . get_include_path());

require_once("system/app.class.php");	
require_once("system/nav.class.php"); 	
require_once("system/menu.class.php"); 	
$App 	= new App();	
$Nav	= new Nav();	
$Menu 	= new Menu();		
include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# index.php
	#
	# Author: 		Roy Ganor
	# Date:			2008-06-14
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "PDT 2.1 Release Notes";
	$pageKeywords	= "PHP";
	$pageAuthor		= "PDT Committers";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	include("_projectCommon.php");    # All on the same line to unclutter the user's desktop'
	# End: page-specific settings
	#
		
	# Paste your HTML content here!
	ob_start();
?>

<div id="maincontent">
	<div id="midcolumn">


<table style="width: 100%;" border="0" cellpadding="2">
	<tbody>
		<tr>
			<td align="left" width="60%">
				<h1> Eclipse PDT 2.1 is now available </h1>
			</td>
			<td>
				<P align="right">
				<a href="../downloads"> <img src="../images/download_pdt.png" /></a>
				</P>
			</td>
		</tr>
	</tbody>
</table>


Eclipse <a href="www.eclipse.org/pdt">PHP Development Tools (PDT)</a> 2.1 is now available from the <a href="http://www.eclipse.org/pdt">Eclipse.org download site</a> and from the <a href="http://www.zend.com/community/pdt">Zend/PDT Community site</a> (includes Eclipse PDT and Zend Debugger which enables users to perform local and remote debugging).
<p></p>

The Eclipse PDT team would like to thank everyone who made this release possible.  As always, our Eclipse PDT community has provided countless new features, bug fixes, documentation, etc. We'd also like to thank the Eclipse Dynamic Languages Toolkit team for cooperating and helping us with the new infrastructure.<p></p>

Fully compliant with Eclipse standards, the new 2.1 release enables PHP developers to leverage a wide variety of Eclipse projects, such as <a href="http://www.eclipse.org/webtools/">Web Tools Project </a> (WTP) and <a href="http://www.eclipse.org/dltk/">Dynamic Language Toolkit</a> (DLTK), for faster and easier development. PDT 2.1 also offers strong support for Object-Oriented Programming (OOP) in PHP.<p></p>

<script type="text/javascript">
function displayList() {
	var old = document.getElementById('bugslist').style.display;
	if (old == '') {
		document.getElementById('bugslist').style.display = 'none';
	} else {
		document.getElementById('bugslist').style.display = '';
	} 
}
</script>

<p></p>
<h2>What's New in PDT 2.1?</h2>
Eclipse PDT 2.1 is the first toolkit to support the new language features provided by PHP 5.3 such as <a href="http://il.php.net/namespaces">namespaces</a> and <a href="http://wiki.php.net/rfc/closures">closures</a>, with features such as code assist and smart navigation, writing PHP 5.3 should be very easy and intuitive. 
<br/>The team has also continued fixing issues according to the feedback provided by users using PDT 2.0 that has been released at the end of last year. Find your bug <a href="javascript:displayList();">here</a>. <br/>
<div id="bugslist" style="display:none">
<table border=1 cellpadding=0 cellspacing=0 width=1319 >
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=left width=49 style='height:12.75pt;width:37pt'>#</td>
  <td align=left width=79 style='width:59pt'>Sevirity</td>
  <td align=left width=201 style='width:151pt'>Reporter</td>
  <td align=left width=235 style='width:176pt'>Component</td>
  <td align=left width=755 style='width:566pt'>Description</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260609</td>
  <td align=left>major</td>
  <td align=left>snop3@seznam.cz</td>
  <td align=left>General UI</td>
  <td align=left>Eclipse hang up after restart or exit</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>234938</td>
  <td align=left>major</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>[PHP 5.3] - Support PHP 5.3 language features</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>262860</td>
  <td align=left>normal</td>
  <td align=left>walter.tom+eclipse@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>PHPDoc code assist does not insert the types of parameters</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>264790</td>
  <td align=left>normal</td>
  <td align=left>zo2000@hotmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Code assist suggestions when inappropriate</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>208257</td>
  <td align=left>normal</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Website</td>
  <td align=left>Download page's link to update site provides no instructions
  to new users</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>239081</td>
  <td align=left>critical</td>
  <td align=left>david@davidkmuir.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[PHP Explorer] - Unable to move folders in PHP Explorer</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255635</td>
  <td align=left>normal</td>
  <td align=left>dafish@finger-spiele.de</td>
  <td align=left>Code Assist</td>
  <td align=left>Code Assists doesn't suggests variable in function scope</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255636</td>
  <td align=left>normal</td>
  <td align=left>dafish@finger-spiele.de</td>
  <td align=left>Code Assist</td>
  <td align=left>Multiple occurrences in Code Assist of the same variable</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258260</td>
  <td align=left>major</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[Include path]clicking<span style='mso-spacerun:yes'> 
  </span>include &quot;some.php&quot; - which is in include path - does not
  open the file</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258453</td>
  <td align=left>normal</td>
  <td align=left>valhallasw@gmail.com</td>
  <td align=left>General UI</td>
  <td align=left>Deadlocks in editor</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260390</td>
  <td align=left>normal</td>
  <td align=left>philippe.gablain@gmail.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>Editor could not be initialized</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260852</td>
  <td align=left>normal</td>
  <td align=left>ropsonik@interia.pl</td>
  <td align=left>Code Assist</td>
  <td align=left>no completion available in extended classes</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261817</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] - Provide code assist for PHP 5.3. elements</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>262319</td>
  <td align=left>normal</td>
  <td align=left>ribicb@yahoo.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Autocomplete not working for class variables in inherited
  classes</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>262453</td>
  <td align=left>normal</td>
  <td align=left>gnoodl@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>Include path -&gt; Libraries -&gt; Add Library, no further
  options</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>263625</td>
  <td align=left>normal</td>
  <td align=left>medgitov@gmail.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>Rename file option not exist at php explorer submenu and not
  works by F2</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>270589</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Core</td>
  <td align=left>An internal error occurred during: &quot;Selection Job
  titile&quot;.</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>272948</td>
  <td align=left>normal</td>
  <td align=left>john_arthorne@ca.ibm.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>Better name for PDT feature</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>197581</td>
  <td align=left>normal</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Updater</td>
  <td align=left>All-In-One tar.gz contains lots of extra features vs. Update
  Site</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>202565</td>
  <td align=left>minor</td>
  <td align=left>euthanasia_waltz@yahoo.co.jp</td>
  <td align=left>Debugger</td>
  <td align=left>Failed to open the source of a runtime-created function when
  StepInto</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>203400</td>
  <td align=left>minor</td>
  <td align=left>walter.tom+eclipse@gmail.com</td>
  <td align=left>Code Formatter</td>
  <td align=left>Nested switch statements don't format as expected</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>208341</td>
  <td align=left>minor</td>
  <td align=left>uramihsayibok@gmail.com</td>
  <td align=left>Editor</td>
  <td align=left>&quot;...{| ?&gt;&quot; autocompletes incorrectly *3</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>209308</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Outline Views</td>
  <td align=left>Info about the elements should be displayed in the status bar
  when they are selected in the outline view</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>210527</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>Tasks are not deleted after deleting the line</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>231851</td>
  <td align=left>normal</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Website</td>
  <td align=left>update PDT install instructions</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>233859</td>
  <td align=left>normal</td>
  <td align=left>roy@zend.com</td>
  <td align=left>PHP Modeling</td>
  <td align=left>[PHP Modeling] Disconnect old modeling builders</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>237215</td>
  <td align=left>normal</td>
  <td align=left>guy.g@zend.com</td>
  <td align=left>PHP Modeling</td>
  <td align=left>[PHP Modeling] PHP project backward compatibility</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>240127</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Editor</td>
  <td align=left>No tooltips over the annotations for Mark Occurrences in the
  right ruler</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>240854</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>[regression] Encoding - wrong appearance in Browser/Debug
  output view</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>244670</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Editor</td>
  <td align=left>Error on focus cursor on PHP file source</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>246595</td>
  <td align=left>major</td>
  <td align=left>me@ikravets.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>Problem with saving files and etc.</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>247630</td>
  <td align=left>major</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Formatter</td>
  <td align=left>Block comment: input // inner</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>247847</td>
  <td align=left>normal</td>
  <td align=left>guy.g@zend.com</td>
  <td align=left>Editor</td>
  <td align=left>Indenting problem</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>248971</td>
  <td align=left>normal</td>
  <td align=left>SiliconFiend@gmail.com</td>
  <td align=left>Editor</td>
  <td align=left>Code syntax coloring turned off by highlighted search results</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>249702</td>
  <td align=left>normal</td>
  <td align=left>euthanasia_waltz@yahoo.co.jp</td>
  <td align=left>Core</td>
  <td align=left>'cfunction' causes Syntax Error</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>249720</td>
  <td align=left>minor</td>
  <td align=left>euthanasia_waltz@yahoo.co.jp</td>
  <td align=left>Editor</td>
  <td align=left>Duplicated annotation after saving</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>249972</td>
  <td align=left>major</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[php explorer - regression] function entries should not show
  sibling variables</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>250517</td>
  <td align=left>normal</td>
  <td align=left>allanhughson@yahoo.com.au</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>An internal error occurred during: "Building PHP projects"</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>250580</td>
  <td align=left>normal</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Outline Views</td>
  <td align=left>[Quick Type Hierarchy] Filter is not functioning as expected
  after writing in it first time</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>250943</td>
  <td align=left>normal</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Editor</td>
  <td align=left>close } is not properly located after clicking enter in
  html/php file - editor issue</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>251063</td>
  <td align=left>normal</td>
  <td align=left>roy@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[Code Assist] refinement of proposals pressing CTRL+space
  twice</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>251074</td>
  <td align=left>minor</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>&quot;Open Declaration&quot; is duplicated in Navigate menu</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>251677</td>
  <td align=left>normal</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>PHP Modeling</td>
  <td align=left>error in log when using php5 syntax with php4 project</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>252574</td>
  <td align=left>normal</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Problems view</td>
  <td align=left>duplicate warning entry in html files</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>253108</td>
  <td align=left>normal</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Website</td>
  <td align=left>buildAll.xml should support packaging up all-in-one
  zips/tar.gzs</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>253191</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>[regression] Untitled PHP Document was immedialely saved using
  Ctrl+S, without confirmation dialog about parent folder</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>254393</td>
  <td align=left>normal</td>
  <td align=left>e.sand@elisand.com</td>
  <td align=left>Editor</td>
  <td align=left>C style comments causing very odd behaviour</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>254411</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Editor</td>
  <td align=left>[Regression] No syntax errors annotations for external files.</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255041</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Templates</td>
  <td align=left>Generated comment for a file is /**null * null */</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255144</td>
  <td align=left>major</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[PHP Explorer] Copy folder to another project does not copy
  sub-folders</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255151</td>
  <td align=left>major</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[PHP Explorer] Copy sub-folder to another project copies also
  the parent folder</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255171</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[regression] An exception is thrown when user closes a project
  with PHP files inside</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255204</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>[regression] Parameters type is not displayed in Generated
  element comments doc block</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255645</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>project properties - &quot;Enable project specific
  settings&quot; check box cannot be ticked using ctrl+o</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255806</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>Gode Style page in project preferences needs to be changed</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>255930</td>
  <td align=left>normal</td>
  <td align=left>eden@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>[Includepath] The user should get a message box when his
  changes affect the buildpath/includepath</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>256102</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>Create two PHP Projects - Close the second, then close the
  first - An exception ResourceException was thrown in error log</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>256585</td>
  <td align=left>major</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[regression - Usability] php files are sorted irrespecitvely
  of other types of files (css, html, XML) in the project</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>256908</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[regression] Source -&gt; Format is duplicated in php Explorer
  context menu</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257032</td>
  <td align=left>major</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[Code Assist] Very annyoing functionality on empty ctrl+space</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257033</td>
  <td align=left>normal</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[Code Assist] description should show full path to the file</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257037</td>
  <td align=left>normal</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[build path] Excludiong a folder from build path an error is
  logged</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257043</td>
  <td align=left>normal</td>
  <td align=left>gunnar@wagenknecht.org</td>
  <td align=left>Code Assist</td>
  <td align=left>NPE in CodeAssistUtils.getTypesFor</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257073</td>
  <td align=left>normal</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>PHP Modeling</td>
  <td align=left>[regression - editor/php explorer] Opening a file from library
  - no right click in editor BUT exists in php explorer - error in log</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257079</td>
  <td align=left>major</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Code Formatter</td>
  <td align=left>[PHP Explorer] Source&gt;Format is not functional</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257096</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[usability] 'Profile as'&gt; php options-should not be
  available in right click context menu in PHP Explorer view</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257369</td>
  <td align=left>critical</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[Code Assist] static and constants should not be displayed in
  code assist - after -&gt; ( only with ::)</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257481</td>
  <td align=left>normal</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Code Assist dropdown does not populate the data types of PHP
  Doc ( @var)</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257657</td>
  <td align=left>normal</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Website</td>
  <td align=left>PDT standardized group names</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257685</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>[regression] Run/Debug configuration - PHP Script - &quot;PHP
  Script arguments&quot; tab - Unknown error</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>257959</td>
  <td align=left>normal</td>
  <td align=left>shawn_d_clark@hotmail.com</td>
  <td align=left>Code Formatter</td>
  <td align=left>PHP Editor Indenting not consistent</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258226</td>
  <td align=left>normal</td>
  <td align=left>floretan@gmail.com</td>
  <td align=left>Templates</td>
  <td align=left>Remove closing PHP tags from new PHP file template</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258264</td>
  <td align=left>major</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Editor</td>
  <td align=left>extra * added to editor after adding php-doc</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258288</td>
  <td align=left>major</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Code Assist proposes wrong function ( from interface)</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258429</td>
  <td align=left>major</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Editor</td>
  <td align=left>Bracket count is broken due to reg exp - preg_match ( auto
  parenthsis addition is broken)</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258442</td>
  <td align=left>normal</td>
  <td align=left>roy@zend.com</td>
  <td align=left>Website</td>
  <td align=left>Confirm Intent</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258445</td>
  <td align=left>normal</td>
  <td align=left>roy@zend.com</td>
  <td align=left>Website</td>
  <td align=left>Communicate</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258665</td>
  <td align=left>major</td>
  <td align=left>snop3@seznam.cz</td>
  <td align=left>Code Assist</td>
  <td align=left>Code assist doesn't work in private methods where are
  &quot;if&quot; or &quot;switch&quot; statements</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258753</td>
  <td align=left>normal</td>
  <td align=left>snop3@seznam.cz</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>Can't delete closed project</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258909</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>The user cannot remove folders from include path in PHP
  Explorer</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>258922</td>
  <td align=left>major</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[Include/Build Path] Adding a folder to include path does not
  add it to build path</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259029</td>
  <td align=left>minor</td>
  <td align=left>joshualross@gmail.com</td>
  <td align=left>Debugger</td>
  <td align=left>PHP Server URL with path gets prepended multiple times in
  debug configuration</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259054</td>
  <td align=left>major</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>Automated JUnit tests fail to run as part of common builder</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259077</td>
  <td align=left>normal</td>
  <td align=left>jeferod83@gmail.com</td>
  <td align=left>Debugger</td>
  <td align=left>PDT+Xdebug+Javascript Problem</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259274</td>
  <td align=left>critical</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>Configure BuildPath -&gt; Add Folder makes no changes</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259353</td>
  <td align=left>critical</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>No completions for class variables</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259449</td>
  <td align=left>major</td>
  <td align=left>gadi@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>abstract and final should not be presented when creating a new
  object</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259750</td>
  <td align=left>normal</td>
  <td align=left>andrey@niakhaichyk.org</td>
  <td align=left>Release Engineer</td>
  <td align=left>Project meta-data needs improvement.</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259758</td>
  <td align=left>major</td>
  <td align=left>eclipse_bugzilla@mailinator.com</td>
  <td align=left>Debugger</td>
  <td align=left>XDebug will not stop at breakpoints</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259769</td>
  <td align=left>normal</td>
  <td align=left>charles@etherscapes.com</td>
  <td align=left>Editor</td>
  <td align=left>Placing cursor on constant name like MY_CONSTANT brings up
  error dialog &quot;'Selection Job titile' has encountered a problem&quot;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259850</td>
  <td align=left>major</td>
  <td align=left>demidovich@hotmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[regression] internal variable in a child classes not
  available in completion</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259852</td>
  <td align=left>normal</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>Update promoteToEclipse.pdt.properties for PDT 2.0.1 and 2.1</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259865</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Code Assist not working for global variable object members -
  exception is thrown</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259902</td>
  <td align=left>normal</td>
  <td align=left>eclipse@michaelho.com</td>
  <td align=left>Code Assist</td>
  <td align=left>AutoCompletion for static class variable does not work if
  inherited</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259915</td>
  <td align=left>normal</td>
  <td align=left>roy@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[Code Assist] Templates are injected in regular code</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>259988</td>
  <td align=left>normal</td>
  <td align=left>shawn_d_clark@hotmail.com</td>
  <td align=left>Debugger</td>
  <td align=left>Source Locator for Remote Debug Session not able to open file
  within project</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260035</td>
  <td align=left>normal</td>
  <td align=left>artur.stawiarski@interia.pl</td>
  <td align=left>Code Assist</td>
  <td align=left>code completion after `throw new` cause an error</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260051</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>[Usability] Show progress monitor when indexing at first time</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260059</td>
  <td align=left>normal</td>
  <td align=left>letssurf@gmail.com</td>
  <td align=left>Outline Views</td>
  <td align=left>overrides arrow on __construct method</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260071</td>
  <td align=left>major</td>
  <td align=left>jesusalc@yahoo.com</td>
  <td align=left>Editor</td>
  <td align=left>Does not follow links with CONTROL -CLICK Anymore</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260135</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Communicate</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260136</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Intent</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260138</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Attendance</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260139</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Ramp Down Policy</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260140</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>IP</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260141</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>APIs</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260142</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Message Bundles</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260143</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Version Numbering</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260144</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Execution Environment</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260145</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Leverage OSGi</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260146</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Signing</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260148</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Builds</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260149</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Optimization</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260151</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Work Together</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260152</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Orbit</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260154</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Localization - Babel</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260155</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Localization - ICU4J</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260157</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Usability</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260158</td>
  <td align=left>normal</td>
  <td align=left>anne.jacko@eclipse.org</td>
  <td align=left>Website</td>
  <td align=left>Accessibility</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260330</td>
  <td align=left>major</td>
  <td align=left>nicholas.j.miller@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Type hinting doesn't appear to be working</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260369</td>
  <td align=left>normal</td>
  <td align=left>joost@siyou.nl</td>
  <td align=left>Editor</td>
  <td align=left>Ctrl + Click on function doesn't work when class is in include
  file</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260492</td>
  <td align=left>normal</td>
  <td align=left>asnyder@noloh.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Autocomplete not working for local variables</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260805</td>
  <td align=left>normal</td>
  <td align=left>walter.tom+eclipse@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Code assist / autocomplete bug with @var doc before open brace</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260947</td>
  <td align=left>normal</td>
  <td align=left>walter.tom+eclipse@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Code assist after 'new' throws exception</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260952</td>
  <td align=left>normal</td>
  <td align=left>walter.tom+eclipse@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Code assist on fewer letters show fewer results than on more
  letters</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>260957</td>
  <td align=left>normal</td>
  <td align=left>walter.tom+eclipse@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Code assist shows duplicate methods if they are part of
  interface</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261405</td>
  <td align=left>minor</td>
  <td align=left>euthanasia_waltz@yahoo.co.jp</td>
  <td align=left>Editor</td>
  <td align=left>Incorrect color in editing</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261762</td>
  <td align=left>minor</td>
  <td align=left>euthanasia_waltz@yahoo.co.jp</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>'Close Project' makes error log</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261812</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>[PHP 5.3] - Provide syntax highlighting for new features</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261813</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>[PHP 5.3] - Fix AST DOM parser for PHP 5.3</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261814</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>[PHP 5.3] - Fix compiler parser for PHP 5.3</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261815</td>
  <td align=left>normal</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>[PHP 5.3] - Add ability to switch between PHP4, PHP5 and PHP
  5.3</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261816</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[PHP 5.3] - Implement namespaces presentation in PHP explorer</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261818</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Outline Views</td>
  <td align=left>[PHP 5.3] - Provide namespace information to the Outline View</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261819</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>PHP Functions View</td>
  <td align=left>[PHP 5.3] - Update PHP functions</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>261825</td>
  <td align=left>minor</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Outline Views</td>
  <td align=left>[PHP 5.3] - Show 'use' statements in outline, like JDT shows
  'imports'</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>262198</td>
  <td align=left>normal</td>
  <td align=left>medgitov@gmail.com</td>
  <td align=left>Code Folding</td>
  <td align=left>Code folding work not right</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>262394</td>
  <td align=left>major</td>
  <td align=left>marek@matulka.net</td>
  <td align=left>Editor</td>
  <td align=left>Colour artefacts while working with editor</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>262724</td>
  <td align=left>normal</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Outline Views</td>
  <td align=left>Outline view is not refreshed in case errors were fixed in the
  editor</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>262878</td>
  <td align=left>normal</td>
  <td align=left>roy@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[Code Assist] &quot;return this;&quot; statement should be
  evaluated</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>262998</td>
  <td align=left>normal</td>
  <td align=left>shawn_d_clark@hotmail.com</td>
  <td align=left>Debugger</td>
  <td align=left>JIT Debug session will start even if there are no valid files
  / paths to match</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>263106</td>
  <td align=left>major</td>
  <td align=left>medgitov@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Ctrl + Click on static function working only if function name
  uses only lower case characters</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>263635</td>
  <td align=left>normal</td>
  <td align=left>roy@zend.com</td>
  <td align=left>Editor</td>
  <td align=left>[PHP 5.3] Bad syntax is provided although follow PHP 5.3 rules</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>263789</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Null Pointer exception is thrown in error log at every
  Ctrl+Space</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>264690</td>
  <td align=left>normal</td>
  <td align=left>randy@randyfay.com</td>
  <td align=left>Core</td>
  <td align=left>Task tags do not work in non-traditional filetypes (drupal
  .module, .theme, etc.)</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>264952</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] - Add USE statement automatically</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>265182</td>
  <td align=left>normal</td>
  <td align=left>vadim.p@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>New PHP Project Wizard Next Button disabled</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>265254</td>
  <td align=left>normal</td>
  <td align=left>vadim.p@zend.com</td>
  <td align=left>Core</td>
  <td align=left>ini file generation utility in project scope and simple php
  file execution utility methods</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>266291</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>PHP Interpreter specific settings are enabled by project
  creation</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>266593</td>
  <td align=left>normal</td>
  <td align=left>snop3@seznam.cz</td>
  <td align=left>Debugger</td>
  <td align=left>Skip All Breakpoints doesn't work during debug process</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>266637</td>
  <td align=left>normal</td>
  <td align=left>rmindorff1@cogeco.ca</td>
  <td align=left>Debugger</td>
  <td align=left>debugger stops at mysqli request.</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267321</td>
  <td align=left>normal</td>
  <td align=left>qiangsheng.w@zend.com</td>
  <td align=left>Templates</td>
  <td align=left>ID Constant<span style='mso-spacerun:yes'>  </span>of
  PHPCodeTemplatePreferencePage is wrong</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267361</td>
  <td align=left>minor</td>
  <td align=left>jlawrence@uk.ibm.com</td>
  <td align=left>General UI</td>
  <td align=left>Encoding Settings are not checked in PHP Debug Preferences</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267536</td>
  <td align=left>normal</td>
  <td align=left>vadim.p@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>[External File] As you type validation doesn't work</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267543</td>
  <td align=left>normal</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>[PHP 5.3] Add &quot;namespaces&quot; node to the PHP Project
  Outline</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267544</td>
  <td align=left>normal</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>[PHP 5.3] Support importing of classes using 'USE' statement</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267803</td>
  <td align=left>major</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] 'use' statement is inserted before nemaspace
  declaration</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267805</td>
  <td align=left>normal</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] - Code assist after NS\ must show sub-namespaces</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267809</td>
  <td align=left>major</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] Wrong string is inserted when using CA in namespaces</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267813</td>
  <td align=left>major</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] Wronge 'use' statement added when using CA with
  namespaces</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267854</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] No code assist in case of double colon</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>267864</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] date_create_from_format() function not available in
  5.3</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>268072</td>
  <td align=left>normal</td>
  <td align=left>qiangsheng.w@zend.com</td>
  <td align=left>PHP Modeling</td>
  <td align=left>Generated source code is wrong</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>268270</td>
  <td align=left>normal</td>
  <td align=left>qiangsheng.w@zend.com</td>
  <td align=left>Core</td>
  <td align=left>New implementation of the PHPClassEvaluator</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>268313</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] No Code Assis for __NAMESPACE__</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>268928</td>
  <td align=left>major</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Debugger</td>
  <td align=left>[PHP 5.3] - Provide PHP 5.3 binaries for local debugger</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>268938</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] Missing magic methods in Code Assist</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>268940</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Code Asist in intrerface inheritance is not functional</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>268945</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[regression] Magic members are not sorted in CA</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>268994</td>
  <td align=left>major</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Ticked Group completion check box provokes 'No completions
  available' on empty line</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269011</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>wrong behavior using Group completion options in preferences
  page</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269179</td>
  <td align=left>major</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Outline Views</td>
  <td align=left>PHP Project Outline view does not list all duplicate-name
  functions</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269367</td>
  <td align=left>critical</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Editor</td>
  <td align=left>[PHP 5.3] Nowdoc feature - Cursor is stuck in editor, Typing
  is impossible</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269616</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Autocomplete keyword &quot;abstract&quot; before class
  definition</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269626</td>
  <td align=left>blocker</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Core</td>
  <td align=left>Parse error in latest PDT 2.1 M6</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269631</td>
  <td align=left>critical</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Updater</td>
  <td align=left>Zend debugger not install to latest build</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269634</td>
  <td align=left>major</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Autocomplete path in include operator</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269713</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Updater</td>
  <td align=left>Install fresh PDT M6 + dltk-code + dltk-rse. Problem with RSE</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269715</td>
  <td align=left>blocker</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>No correct show dropdown list in class (ctrl+space)</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>269719</td>
  <td align=left>major</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Incorrect autocomplete with operator new</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>270137</td>
  <td align=left>major</td>
  <td align=left>huffrg3@gmail.com</td>
  <td align=left>Debugger</td>
  <td align=left>Hardcoded editor id in
  XDebugModelPresentation/PHPModelPresentation</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>270319</td>
  <td align=left>normal</td>
  <td align=left>techtonik@php.net</td>
  <td align=left>Updater</td>
  <td align=left>Can't update to M6 from archived site</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>270445</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[regression] Code Assist does not suggest a function name</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>270580</td>
  <td align=left>major</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[regression] Code Assist not functional after define(</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>270600</td>
  <td align=left>major</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[regression] Code Assist used just after echo $this-&gt;
  construction is not functional for private class members</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>270707</td>
  <td align=left>normal</td>
  <td align=left>qiangsheng.w@zend.com</td>
  <td align=left>Core</td>
  <td align=left>The equals method of TypeBinding is wrong</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>270725</td>
  <td align=left>major</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Formatter</td>
  <td align=left>Refresh error with '?&gt;'</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>270980</td>
  <td align=left>normal</td>
  <td align=left>baillargeon@visi.com</td>
  <td align=left>Core</td>
  <td align=left>software update fails without indication of which element to
  deselect</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>271215</td>
  <td align=left>normal</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>Use generateFeatureVersionSuffix=true so that feature versions
  will increment if included plugins are updated</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>271233</td>
  <td align=left>normal</td>
  <td align=left>freeman3@centrum.cz</td>
  <td align=left>Editor</td>
  <td align=left>mark occurences slows down typing</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>271271</td>
  <td align=left>major</td>
  <td align=left>wundbread@gmail.com</td>
  <td align=left>Debugger</td>
  <td align=left>Error when breaking at first line</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>271918</td>
  <td align=left>normal</td>
  <td align=left>spektom@gmail.com</td>
  <td align=left>Updater</td>
  <td align=left>Installing PDT via update site succeeds on Eclipse without
  Webtools</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>271966</td>
  <td align=left>normal</td>
  <td align=left>rzajac@gmail.com</td>
  <td align=left>Editor</td>
  <td align=left>Stack Overflow during editing php file</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>272279</td>
  <td align=left>normal</td>
  <td align=left>qiangsheng.w@zend.com</td>
  <td align=left>PHP Modeling</td>
  <td align=left>Add PHP Default PHPPartitionType to
  PHPStructuredTextPartitioner</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>272420</td>
  <td align=left>normal</td>
  <td align=left>qiangsheng.w@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>Support _GLOBALS key word in OccurrenceFinder</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>272423</td>
  <td align=left>normal</td>
  <td align=left>qiangsheng.w@zend.com</td>
  <td align=left>Core</td>
  <td align=left>skip empty ListNode in<span style='mso-spacerun:yes'> 
  </span>traverse method of TypeDeclaration</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>272596</td>
  <td align=left>normal</td>
  <td align=left>david_williams@us.ibm.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>Problem with signed/packed bundles</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>272670</td>
  <td align=left>normal</td>
  <td align=left>piotr.nastaly@nastnet.com</td>
  <td align=left>Debugger</td>
  <td align=left>can't add phpunit as a php executable - null pointer exception</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>272817</td>
  <td align=left>normal</td>
  <td align=left>vadim.p@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[Code Assist] Request for extension - modifying type
  declaration flags during the build process</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>273000</td>
  <td align=left>normal</td>
  <td align=left>koopkoop2@gmail.com</td>
  <td align=left>Debugger</td>
  <td align=left>Conditional Breakpoints Do Not Work</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>273096</td>
  <td align=left>normal</td>
  <td align=left>waejr514@gmail.com</td>
  <td align=left>Updater</td>
  <td align=left>pdt-all-in-one-macosx-carbon-2.0.0GA could not use updater</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>273444</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>A cut off message in New Project dialog</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>273528</td>
  <td align=left>normal</td>
  <td align=left>qiangsheng.w@zend.com</td>
  <td align=left>General UI</td>
  <td align=left>Refactoring the PDT move action</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>273816</td>
  <td align=left>normal</td>
  <td align=left>vadim.p@zend.com</td>
  <td align=left>Editor</td>
  <td align=left>exception thrown when opening external file, or untitled
  document, file from included library</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>274291</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[Regression] No code assist for static protected attributes</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>274728</td>
  <td align=left>major</td>
  <td align=left>demestor@gmx.net</td>
  <td align=left>Debugger</td>
  <td align=left>Zend Debugger works only one time after eclipse starts</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>274937</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Block comment: incorrect insert comment before function with
  parameters</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>275004</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Not work autocompletion for &quot;is_*&quot;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>275299</td>
  <td align=left>normal</td>
  <td align=left>martin.eisengardt@fiducia.de</td>
  <td align=left>General UI</td>
  <td align=left>setting an executable causes NPE</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>275454</td>
  <td align=left>normal</td>
  <td align=left>martin.eisengardt@fiducia.de</td>
  <td align=left>General UI</td>
  <td align=left>code assist sometimes crashes eclipse</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>275456</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Extends in class not work</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>275514</td>
  <td align=left>normal</td>
  <td align=left>lance@lancehendrix.com</td>
  <td align=left>Editor</td>
  <td align=left>Null Error when trying to resolve declaring class type
  triggered from selection listener in PHP editor</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>275537</td>
  <td align=left>blocker</td>
  <td align=left>david_williams@us.ibm.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>ZipException: invalid block type</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>275543</td>
  <td align=left>major</td>
  <td align=left>codeslinger@compsalot.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>Impossible to Resync Project with File System</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276048</td>
  <td align=left>major</td>
  <td align=left>martin.oberhuber@windriver.com</td>
  <td align=left>Debugger</td>
  <td align=left>Galileo complains about &quot;PHP Debugger Port in use&quot;
  although no PDT functionality has ever been activated</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276236</td>
  <td align=left>normal</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>user and group ownership corrupt in staging dir; PDT build
  cannot sign</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276279</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>Final classes should not be suggested in CA list in case of
  inheritance</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276312</td>
  <td align=left>minor</td>
  <td align=left>pavel@onpositive.com</td>
  <td align=left>General UI</td>
  <td align=left>org.eclipse.php.internal.ui.actions.ReorgMoveAction throws
  class cast exception</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276316</td>
  <td align=left>normal</td>
  <td align=left>pavel@onpositive.com</td>
  <td align=left>General UI</td>
  <td align=left>org.eclipse.php.internal.ui.actions.OpenTypeHierarchyAction
  throws NullPointer exception during update()</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276357</td>
  <td align=left>normal</td>
  <td align=left>lance@lancehendrix.com</td>
  <td align=left>Outline Views</td>
  <td align=left>Unhandled event loop exception in org.eclipse.ui</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276433</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Not autocomplete self:: variables</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276766</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Autocomplete in IF statement</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276783</td>
  <td align=left>major</td>
  <td align=left>exceptione@hotmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>No autocompletion for classes extending types from PHP include
  path libraries</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>276877</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Outline Views</td>
  <td align=left>Outline view is not refreshed when an attribute was added</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277108</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Autocomplete path in include/require after type<span
  style='mso-spacerun:yes'>  </span>slash symbol</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277112</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Not autocomplete in function names</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277114</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Incorrect autocomplete in @return tag</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277137</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Replace code template for &quot;method comment&quot;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277188</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Not autocomplete private methods</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277258</td>
  <td align=left>normal</td>
  <td align=left>euthanasia_waltz@yahoo.co.jp</td>
  <td align=left>General UI</td>
  <td align=left>Project properties &quot;PHP Debug&quot; doesn't show project
  specific settings</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277441</td>
  <td align=left>normal</td>
  <td align=left>mjs@beebo.org</td>
  <td align=left>General UI</td>
  <td align=left>Text missing from &quot;New PHP Project&quot; widget panel</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277466</td>
  <td align=left>normal</td>
  <td align=left>eclipse@irolo.net</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>PDT / DLTK Regression &quot;Selection Job titile&quot;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277571</td>
  <td align=left>normal</td>
  <td align=left>wcandillon@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>FormalParameter children shouldn't have lazy initialization</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277589</td>
  <td align=left>normal</td>
  <td align=left>david_williams@us.ibm.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>php feature should NOT require org.eclipse.wst</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>277762</td>
  <td align=left>major</td>
  <td align=left>michal.bisco@gmail.com</td>
  <td align=left>Editor</td>
  <td align=left>Could not open the editor: Editor could not be initialized.</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>278213</td>
  <td align=left>major</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] Switch project interpreter PHP 5.1/ 5.2 to 5.3 - CA
  does not suggest 5.3 keywords</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>278261</td>
  <td align=left>normal</td>
  <td align=left>nickboldt+bugzilla@gmail.com</td>
  <td align=left>Release Engineer</td>
  <td align=left>use EPP bundles instead of &quot;packAllInOnes&quot; task</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>278386</td>
  <td align=left>normal</td>
  <td align=left>ch@lathspell.de</td>
  <td align=left>Code Assist</td>
  <td align=left>Code completion (ctrl+space) for abstract methods?</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>278504</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>The items in CA list are not ordered alphabetically</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>278992</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Autocomplete work on second times</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279064</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Website</td>
  <td align=left>PDT 2.1 All In Ones (Release Candidate) - renew to RC3</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279092</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Private/protected methods are shown in CA after $obj-&gt;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279095</td>
  <td align=left>normal</td>
  <td align=left>silviya@zend.com</td>
  <td align=left>Code Assist</td>
  <td align=left>[PHP 5.3] Constants and functions do not show in CA under
  namespace</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279117</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Show private/protected methods/attributes on reassigned $this
  variable</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279121</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Hide magic methods (__sleep(), __get(), ...)</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279249</td>
  <td align=left>normal</td>
  <td align=left>kalin.a@zend.com</td>
  <td align=left>PHP Explorer &amp; Projects management</td>
  <td align=left>PHP project wizard doesn't show the new added folders in build
  path</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279344</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Improvement in assist long extends</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279388</td>
  <td align=left>normal</td>
  <td align=left>mjs@beebo.org</td>
  <td align=left>General UI</td>
  <td align=left>Eclipse PDT reports itself as &quot;EPP PHP Package&quot;</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279435</td>
  <td align=left>normal</td>
  <td align=left>php6developer@ya.ru</td>
  <td align=left>Code Assist</td>
  <td align=left>Not show assist for self:: variables</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279752</td>
  <td align=left>normal</td>
  <td align=left>zvikico@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>PDT type resolution fails when encountered with recursion</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279756</td>
  <td align=left>normal</td>
  <td align=left>zvikico@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>PDT core plugin cannot be imported as a PDE project</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279757</td>
  <td align=left>normal</td>
  <td align=left>zvikico@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>PDT core plugin cannot be added to other plugin's dependencies</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279759</td>
  <td align=left>normal</td>
  <td align=left>zvikico@gmail.com</td>
  <td align=left>Outline Views</td>
  <td align=left>Global variables do not appear in the outline view</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279763</td>
  <td align=left>normal</td>
  <td align=left>zvikico@gmail.com</td>
  <td align=left>Core</td>
  <td align=left>Variable types resolved incorrectly when the variable class
  changes</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279871</td>
  <td align=left>major</td>
  <td align=left>mari.donkers@xs4all.nl</td>
  <td align=left>General UI</td>
  <td align=left>CTRL + SHIFT + J produces error</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>279936</td>
  <td align=left>major</td>
  <td align=left>mari.donkers@xs4all.nl</td>
  <td align=left>Editor</td>
  <td align=left>Error in findMatches()</td>
 </tr>
 <tr height=17 style='height:12.75pt'>
  <td height=17 align=right style='height:12.75pt'>280078</td>
  <td align=left>critical</td>
  <td align=left>mirrec@gmail.com</td>
  <td align=left>Code Assist</td>
  <td align=left>code assist does not work properly in extending class from
  other project</td>
 </tr>
</table>
</div>
<p></p>
<h3>PHP 5.3</h3>
The Eclipse and PHP communitites grow together. When one makes a move, the other takes an action as well.<br/> 
When PHP has made the intent to deliver its new major version, Eclipse PHP Development Tools (PDT) has been adapted by supporting the new PHP 5.3 language features with an early release.  
<br/>
<h4>Project Management</h4>
Creating a new project (File -> New) has now additional entry for project version for PHP 5.3 projects:

<img src="http://farm3.static.flickr.com/2463/3631461109_7558f3ebd1.jpg?v=0" />

<h4>Source editing</h4>
Syntax coloring and validation is provided:<br/> <img src="http://farm4.static.flickr.com/3331/3631461137_fa190b34b8_o.png" /><br/>
Code assist :<br/> <img alt="Code Assist with PHP 5.3" src="http://farm4.static.flickr.com/3323/3632275984_9e70cfbca8.jpg?v=0"><br/>

<h4>Code Navigation</h4>
Namespace grouping in the PHP Explorer:<br/> <img src="http://farm4.static.flickr.com/3335/3631461199_07d6291153.jpg?v=0" /><br/>

<p></p>
<h3>Bug Fixes and New Features</h3>
Although veteran Eclipse users are familiar with this term, it is new to most PHP developers. The Build Path mechanism provides users with the ability to separate application resources (PHP files) from other resources (such as images, CSS, JavaScript files), thereby speeding up the Eclipse build process as well as making the project more modular.

<img alt="include path code assist" src="http://farm4.static.flickr.com/3649/3632276006_aede8be424.jpg?v=0">

<p></p>

<h3>Eclipse 3.5 Features and Bug Fixes</h3>
Eclipse 3.5 has been released as well and provides a variety of bug fixes and useful features. 
For a full list of new Eclipse 3.5 features, <a href="http://download.eclipse.org/eclipse/downloads/drops/S-3.5M7-200904302300/eclipse-news-M7.html">click here</a>

<p></p>

<h2>More information on PDT </h2>

<ul>
<li>PDT Project on Zend.com:  <a href="http://www.zend.com/en/community/pdt">http://www.zend.com/en/community/pdt</a></li>
<li>PDT Project on Eclipse.org: <a href="http://www.eclipse.org/pdt/">http://www.eclipse.org/pdt/</a>  </li>
<li>PDT DEV2QA: <a href="http://www.eclipse.org/pdt/">http://www.eclipse.org/pdt/</a></li>
</ul>












<p></p>
<h2>What's New in PDT 2.1?</h2>
PDT 2.1 was designed based on principles different to those of Eclipse PDT 1.0. For example, different techniques were used to model workspace projects. PDT 2.1 now uses an indexing and caching mechanism for improved performance and experience with code assist and navigation. Moreover, since PHP provides enhanced Object-Oriented features like inheritance and polymorphism, PDT 2.1 provides enhanced features such as type hierarchy, override indicators and type navigation for programmers who utilize these language properties. 
<p></p>
<h3>Fund your resolved bug</h3>
<a href="http://bit.ly/wnfum">Locate your bug</a>
As previously mentioned, PDT 2.1 is based on the robust Eclipse framework for caching and indexing language elements, utilizing the proven mechanism used by the Eclipse Dynamic Languages Toolkit project. In addition, PDT 2.1 has a  reduced list of dependencies which includes only those features that are a "must have" for PHP developers (so no more unnecessary Java or J2EE components in the tool). Of course, Eclipse provides an easy way to add extra plug-ins as required.
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
PDT 2.1 introduces a new code assist mechanism. This new mechanism is smarter as it crawls through code to determine variable types, providing more appropriate suggestions than those provided in PDT 1.0. PDT 2.1, code assist also supports camel case matches when entering code, which displays code assist options based on an element's initials. In addition, code assist supports options for 'magic members'. These are properties and methods which were declared using the @property or @method tags within PHP DocBlock comments rather than in the PHP script itself.
<p> </p>
<img src="http://farm4.static.flickr.com/3208/3138497480_8b6500d9e4_o.png" />

<p></p>
<h3>Eclipse 3.4.1 Features and Bug Fixes</h3>
Eclipse 3.4.1 was released in mid September and provides a variety of bug fixes and useful features. For example, using the <a href="http://help.eclipse.org/help33/index.jsp?topic=/org.eclipse.platform.doc.user/tasks/tasks-cvs-project-set.htm">Team Project Set</a> feature users can share workspaces with other team members. A project set is a text file that contains a pointer to each of the projects contained in the project set. When a project set is imported, these pointers are used to fetch the projects from the repository. Project sets can include any projects that are mapped to supported repository toolings, such as CVS.
For a full list of new Eclipse 3.4.1 features, <a href="http://update.eclipse.org/downloads/drops/R-3.4-200806172000/whatsnew3.4/eclipse-news-part1.html">click here</a>

<p></p>

<h2>More information on PDT </h2>
<ul>
<li>PDT Project on Zend.com:  <a href="http://www.zend.com/en/community/pdt">http://www.zend.com/en/community/pdt</a></li>
<li>PDT Project on Eclipse.org: <a href="http://www.eclipse.org/pdt/">http://www.eclipse.org/pdt/</a>  </li>
<li>PDT DEV2QA: <a href="http://www.eclipse.org/pdt/">http://www.eclipse.org/pdt/</a></li>
<li>Known Issues: 
	<ul>
		<li><a href="https://bugs.eclipse.org/240553">240553</a> PDT Debugger - Breakpoint on Linked resource doesn't work</li>
		<li><a href="https://bugs.eclipse.org/240591">240591</a> Outline - [regression] php project outline is missing the groups</li>
		<li><a href="https://bugs.eclipse.org/240804">240804</a> PHP Explorer - [regression] Cannot move projects</li>
		<li><a href="https://bugs.eclipse.org/253712">253712</a> Editor - Switching a project from PHP5 to PHP4 - build errors</li>
		<li><a href="https://bugs.eclipse.org/259449">259449</a> Code Assist - abstract should not be presented in code assist</li>
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


