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
}

update_manager("PDT", "PHP Development Tools", $PRS, false, true);
?>
