<?php
if ($_SERVER["SERVER_NAME"] != "www.eclipse.org") {
	header("Location: http://www.eclipse.org/pdt/updates/");
}
require($_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/updates-common.php");

$PRS = array(
	"PDT" => "tools/pdt"
);

function notes()
{
	print "<blockquote>For the latest information on how to install PDT, see <a href='http://wiki.eclipse.org/PDT/Installation'>Installing PDT</a>.</blockquote>";
}

update_manager("PDT", "PHP Development Tools", $PRS, false, true, 
	array("2.0 Releases (R)" => "2.0/releases/","2.0 Milestones &amp; RCs (S)" => "2.0/milestones/", "2.0 Interim Builds (I &amp; M)" => "2.0/interim/"),
	array("1.0 Releases (R)" => "releases/", 	"1.0 Milestones &amp; RCs (S)" => "milestones/", 	 "1.0 Interim Builds (I &amp; M)" => "interim/"));
?>
