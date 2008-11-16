<?php
require($_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/buildServer-common.php");

$pageTitle = "PHP Development Tools (PDT) - Release Notes";

$streams = array(
	"pdt" => array(
		"2.0.x" => "HEAD",
		"1.0.x" => "R1_0_5_20080723"
	),
);

require ($_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/relnotes-common.php");
?>
