<?php
$buildServerCommonFiles = array( 
	"/opt/public/cbi/modeling/includes/buildServer-common.php",
	$_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/buildServer-common.php",
);
$foundBuildServerCommonFile = false;
foreach ($buildServerCommonFiles as $bs)
{
	if (is_file($bs))
	{
		require_once($bs); $foundBuildServerCommonFile = true; break;
	}
}
if (!$foundBuildServerCommonFile)
{
	print "Warning: could not find modeling/includes/buildServer-common.php in _common.php\n";
}
else
{
	unset($foundBuildServerCommonFile);
}

$options = array (
	"ProjRelengRoot" => ":pserver:anonymous@dev.eclipse.org:/cvsroot/tools",

	"BaseBuilderBranch" => "RC2_34",

	"BranchAndJDK" => array (
		"emft.eclipse.org=------------,------------",
		"2.0.0=HEAD,/opt/sun-java2-5.0",
		"1.0.5=R1_0_5_20080723,/opt/sun-java2-5.0",
		"modeling.eclipse.org=------------,------------",
		"2.0.0=HEAD,/opt/sun-java2-5.0",
		"1.0.5=R1_0_5_20080723,/opt/sun-java2-5.0",
	),

	/* define a regular expression to be used to collect the most recent 
	 * matching dependencies for running a build. See also releng-common/tools/scripts/start_cron.sh
	 * and /home/www-data/build/requests/dependencies.urls.txt 
	 * */ 	
	"regex" => 
		"R-.*200.*/eclipse-SDK-|" .
		"[MSR]200.*/emf-runtime-2.4|" .
		"[MSR]200.*/xsd-runtime-2.4|" .
		"[MSR]200.*/GEF-.+-3.4|" .
		"R3.0/.+/wtp-wst-|" .
		//"dtp-|dtp_|" .
		//"R1.0/.+/dltk-rse-|" . 
		//"RSE-|",
		"R1.0/.+/dltk-core-",
	
	"Mapfile_Rule_Default" => 0, // 0: "Use Map, No Tagging=use-false" or 1:"Generate Map, No Tagging=gen-false"

	"EmailDefault" => "alon@zend.com", // prefil email contact box with comma-sep'd list, eg., pdt-dev@eclipse.org or bugzilla inbox(es)

	"Users" => array("apeled","apeled",NULL) /* build user, eclipse cvs user, IES cvs user */
);

?>
