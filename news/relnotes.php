<?php
require($_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/buildServer-common.php");

$pageTitle = "PHP Development Tools (PDT) - Release Notes";

$streams = array(
	"pdt" => array(
		"3.4.x" => "HEAD",
		"3.3.x" => "R33_maintenance",
		"3.2.x" => "R32_maintenance",
		"3.1.x" => "R31_maintenance",
		"3.0.x" => "R30_maintenance"
	),
);

require ($_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/relnotes-common.php");
?>
