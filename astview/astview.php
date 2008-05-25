<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	#
	# committers.php
	#
	# Author: 		Roy Ganor
	# Date:			2007-07-18
	#
	# Description: Development page - includes nightly reports, committers list
	#
	#
	#****************************************************************************

	#
	# Begin: page-specific settings.  Change these.
	$pageTitle 		= "PDT Development";
	$pageKeywords	= "PHP, nightly, reports, committers, list";
	$pageAuthor		= "PDT Development";

	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	$Nav->addCustomNav("Find Bugs", "http://download.eclipse.org/tools/pdt/downloads/drops/results/FINDBUGS-php.html", "_self", 3);
	$Nav->addCustomNav("Best Practices", "http://download.eclipse.org/tools/pdt/downloads/drops/results/ANALYSIS-php.html", "_self", 3);
	$Nav->addCustomNav("Unit Tests", "http://download.eclipse.org/tools/pdt/downloads/drops/N". date("Ymd", mktime(0, 0, 0, date("m")  , date("d")-1, date("Y"))) . "/results/TEST-php.html", "_self", 3);
	$Nav->addCustomNav("Contributors", "http://www.eclipse.org/pdt/people/contributors.php", "_self", 3);

	# End: page-specific settings
	#

	# Paste your HTML content here!
	ob_start();

	require_once($_SERVER['DOCUMENT_ROOT'] . "/projects/common/project-info.class.php");
	$projectInfo = new ProjectInfo("tools.php");

?>

<div id="maincontent">
	<div id="midcolumn">

		<h1>org.eclipse.php.astview - AST View</h1>

		
		<div class="homeitem3col">
			<a name="purpose"></a>
			<h3>Purpose</h3>
			<p>
				A view to visualize the AST (abstract syntax tree) of a PHP
				file open in the editor. Navigate from text selection to AST nodes and
				from nodes to selections, also to show binding information provided.  <br>
			</p>
			
			<a name="install"></a>
			<h3>Install</h3>

			
			<br>
			<h4>Manual Install:</h4>
			<p>
				<ul>
					<li>
						for Eclipse 3.4 
						<a href="org.eclipse.php.astview.jar">org.eclipse.php.astview.jar</a>

						(copy to 'dropins' directory)
					</li>				
				</ul>
			</p>
  
			<a name="usage"></a>

			<h3>Usage</h3>
			<p>
		      <ol>
		        <li>Open the AST view
				  <ul>
				    <li class="nodash">from the view menu: Window &gt; Show View &gt; Other..., PHP &gt; AST View</li>

				    <li class="nodash">via shortcut: Alt+Shift+Q, A</li>
				  </ul>
                </li>
		        <li>Open a PHP file in the editor</li>
		        <li>Click on 'Show AST of active editor' (<img
		 style="width: 16px; height: 16px;" src="setfocus.gif" alt=""> ) to
		populate the view: The view shows the AST of the file opened in the
		editor and will also reveal the element corresponding to the current
		text selection<br>
		        </li>

		        <li><font color="#000000">Enable 'Link with editor' (</font><img
		 style="width: 16px; height: 16px;" src="synced.gif" alt="">) to
		automatically track the active editor and the selection in the active
		editor.<br>
		        </li>
		        <li>Double click on AST nodes to get the corresponding element
		revealed in the editor.</li>
		        <li>Double click again to see the 'extended range' of a node,
		that means the range including all comments associated with it (comment
		mapper heuristic).</li>
		        <li>When the AST's underlying document has been changed use
		'Refresh' (<img style="width: 16px; height: 16px;" src="refresh.gif"
		 alt="">)&nbsp; to update the AST.<br>

		        </li>
		      </ol>
			</p>
      
      
			<h4>AST View Elements</h4>
			<p>The AST view shows the following nodes:<br>
				<img alt="AST View" src="view.gif"></p>
			<ul>
				<li>AST nodes are shown in gray color and with source range
				information. Children of AST nodes are the node properties.<br>

				</li>
				<li>node properties have names that are all all capitalized.
				Node properties represent lists of child nodes, a child node or a
				primitive node attribute (String, int or boolean)<br>
				</li>
				<li>bindings are shown in blue. Only selected bindings are
				shown</li>
			</ul>
			
			<br>
			<h4>Advanced Features</h4>

			<ul>
				<li>(Not Implemented) You can toggle between the AST Level 2 and AST level 3 in
				the view menu (triangle). AST level 3 is the extended and modified AST
				that includes the new 5.0 language constructs. Note that the AST level
				3 is only available in 3.1 and later builds
				</li>
				<li>You can choose to show or hide bindings in the view menu
				</li>
				<li>You can choose the method to generate an AST in 'Advance Options' in the view menu
				</li>
				<li>(Not implemented) You can choose 'Add to Comparison Tray' in the context menu of a binding.
				This moves the binding to a special area in the view. When you select another binding
				in the tree, the comparison tray shows various relationships between the selection
				and the chosen binding
				</li>
			</ul>
				
			<br>

			<h4>Comments and Requests</h4>
			<ul>
				<li>
					Source is included in the plugin archive <br>
				</li>
				<li>Comments to
					*** add mail here
				</li>
			</ul>
			
			<p>
				Thanks and credits go to 
				<li>
					Initial implementation from Martin_Aeschlimann[at]ch.ibm.com.<br>
					Also available from http://www.eclipse.org/jdt/ui/astview/index.php
				</li>
				<li>
					Christian Hauser: The current AST view plugin
					is based his AST view implementation from the Zuerich Code Camp. Thanks
					a lot!<br>
				</li>
				<li>
					Markus Keller has helped absorbing AST changes and implemented more features.<br>
				</li>
			</p>

	</div>
</div>


<?
	$html = ob_get_contents();
	ob_end_clean();

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
