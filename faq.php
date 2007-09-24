<?php

header("Location: http://wiki.eclipse.org/PDT/FAQ");

require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/app.class.php") ;
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/nav.class.php") ;
require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/eclipse.org-common/system/menu.class.php") ;
$App = new App ( ) ;
$Nav = new Nav ( ) ;
$Menu = new Menu ( ) ;
include ($App->getProjectCommon ()) ; # All on the same line to unclutter the user's desktop'

#*****************************************************************************#
# index.php#
# Author: 		Yossi Leon# Date:			2006-04-28#
# Description: FAQ#
#
#****************************************************************************

#
# Begin: page-specific settings.  Change these. $pageTitle = "PDT FAQ" ;
$pageKeywords = "PHP, faq, questions" ;
$pageAuthor = "PDT Committers" ;

# Add page-specific Nav bars here# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)# $Nav->addNavSeparator("My Page Links", 	"downloads.php");# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

# End: page-specific settings#


# Paste your HTML content here!ob_start () ;

require_once ($_SERVER [ 'DOCUMENT_ROOT' ] . "/projects/common/project-info.class.php") ;
$projectInfo = new ProjectInfo ( "tools.pdt" ) ;

?>
<div id="maincontent">
<div id="midcolumn">

<table style="width: 100%;" border="0" cellpadding="2">
	<tbody>
		<tr>
			<td align="left" width="60%">
			<h1><?=$pageTitle ?>
						<br>
			<font size="1" color="#8080FF">Fequently asked question and answers</font>
			</h1>
			</td>
		</tr>
	</tbody>
</table>


<!-- Table of contents header -->
<table border="0" cellspacing="0" cellpadding="2" width="100%"
	bgcolor="#cccccc">
	<tr>
		<td bgcolor="#777777"><font color="#FFFFFF"><b><a name="toc">Table of
		contents:</a></b></font></td>
	</tr>
</table>
<ul>

	<!-- General subheader -->
	<li><b><a href="#general">General:</a></b>
	<ol>
		<li><a href="#general_about">What is PDT?</a></li>
		<li><a href="#general_license">How is PDT licensed?</a></li>
		<li><a href="#general_question">How do I ask questions?</a></li>
		<li><a href="#general_bugs">How do I report a bug or request a
		feature?</a></li>
		<li><a href="#general_faq">How do I make a suggestion for this FAQ?</a></li>
	</ol>
	<br>
	</li>
</ul>


<div align="center">
<table border="0" cellpadding="3" cellspacing="0"
	style="border-collapse: collapse" bordercolor="#111111" width="100%">
	<tr>
		<td bgcolor="#777777"><font color="#FFFFFF"><b><a name="general">General</a></b></font></td>
		<td bgcolor="#777777"><a href="#toc"><font color="#FFFFFF"> <img
			src="http://www.eclipse.org/eclipse/faq/up_nav.gif" width="16"
			height="16" alt="Goto Top" border="0" align="middle">top</font></a></td>
	</tr>
	<tr>
		<td colspan="2">
		<ol>
			<li><b><a name="general_about">What is PDT?</a></b>
			<p>The <a target="_top" href="http://www.eclipse.org/pdt">PDT</a> is
			working towards providing a fully functional PHP Integrated
			Development Environment framework for the Eclipse platform. This
			project will encompass all development components necessary to
			develop PHP-based Web Applications and will facilitate extensibility.
			It will leverage the existing <a target="_top"
				href="http://www.eclipse.org/webtools">Eclipse WTP Project</a> in
			providing developers with PHP capabilities. <br>
			The main components in this project are: Editor (syntax highlighting,
			code assist and code folding), Inspection (file / project outline and
			PHP explorer view) and Debug (PHP script and web page methods). <br>
			b</p>
			<hr>
			</li>

			<li><b><a name="general_license">How is PDT licensed?</a></b>
			<p>PDT is licensed in accordance with the <a
				href="http://www.eclipse.org/legal/epl-v10.html">Eclipse Public
			License</a>. Third party components built using PDT are made
			available under their own licenses <br>
			</p>
			<hr>
			</li>

			<li><b><a name="general_debugger">Does PDT include a debugger? Where
			can i find one?</a></b>
			<p>PDT doesn't come with any bundled debugger but you can download <a
				href="http://www.zend.com/pdt/">Zend Debugger from Zend.com</a> or <a
				href="https://bugs.eclipse.org/bugs/show_bug.cgi?id=169408">XDebug
			from bugzilla</a>. <br>
			</p>
			<hr>
			</li>

			<li><b><a name="general_question">How do I ask questions?</a></b>
			<p>Questions about the use of PDT in user projects that are not
			addressed in this FAQ should be posted to the <a
				href="news://news.eclipse.org/eclipse.tools.pdt">PDT newsgroup</a>.
			Questions and comments regarding the implementation of PDT itself
			should be posted to the <a
				href="https://dev.eclipse.org/mailman/listinfo/pdt-dev">PDT mailing
			list</a>. <br>
			</p>
			<hr>
			</li>

			<li><b><a name="general_bugs">How do I report a bug or request a
			feature?</a></b>
			<p>PDT like all Eclipse projects, uses <a target="_top"
				href="http://www.bugzilla.org/">Bugzilla</a> as its bug and feature
			tracking system. Entering a bug or a feature report is as simple as
			filling in a web form on the <a href="http://dev.eclipse.org/bugs/">eclipse
			bugzilla page</a>. The first time you enter a bug you will need to <a
				href="http://dev.eclipse.org/bugs/createaccount.cgi">create a new
			bugzilla account</a> for yourself by providing an email address and
			choosing a password. Before submitting a bug, please be sure to check
			the list of <a
				href="https://bugs.eclipse.org/bugs/buglist.cgi?bug_status=NEW&bug_status=ASSIGNED&bug_status=REOPENED&email1=&emailtype1=substring&emailassigned_to1=1&email2=&emailtype2=substring&emailreporter2=1&bugidtype=include&bug_id=&changedin=&votes=&chfieldfrom=&chfieldto=Now&chfieldvalue=&product=pdt&short_desc=&short_desc_type=allwordssubstr&long_desc=&long_desc_type=allwordssubstr&keywords=&keywords_type=anywords&field0-0-0=noop&type0-0-0=noop&value0-0-0=&cmdtype=doit&order=Reuse+same+sort+as+last+time">open
			PDT bugs</a> and <a
				href="https://bugs.eclipse.org/bugs/buglist.cgi?short_desc_type=allwordssubstr&short_desc=&product=pdt&long_desc_type=allwordssubstr&long_desc=&bug_file_loc_type=allwordssubstr&bug_file_loc=&keywords_type=allwords&keywords=&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&emailtype1=substring&email1=&emailtype2=substring&email2=&bugidtype=include&bug_id=&votes=&changedin=7&chfieldfrom=&chfieldto=Now&chfieldvalue=&cmdtype=doit&order=Reuse+same+sort+as+last+time&field0-0-0=noop&type0-0-0=noop&value0-0-0=">recentely
			closed PDT bugs</a>.<br>
			<br>
			</p>
			<hr>
			</li>

			<li><b><a name="general_faq">How do I make a suggestion for this FAQ?</a></b>
			<p>The best ways to contribute to this FAQ is to send it to the <a
				href="https://dev.eclipse.org/mailman/listinfo/pdt-dev">PDT mailing
			list</a> or to post your suggestion to the <a
				href="news://news.eclipse.org/eclipse.tools.pdt">PDT newsgroup</a>
			with the subject prefixed by "[FAQ]". You may post just a question or
			both a question and answer. <br>
			</p>
			<hr>
			</li>

		</ol>
		</td>

</table>

</div>

</div>


<?
$html = ob_get_contents () ;
ob_end_clean () ;

# Generate the web page$App->generatePage ( $theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html ) ;
?>
