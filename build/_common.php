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

	"BaseBuilderBranch" => "R35_M5",

	"BranchAndJDK" => array (
		"emft.eclipse.org=------------,------------",
		"2.2.0=HEAD,/opt/sun-java2-5.0",
		"2.1.1=R2_1_Galileo,/opt/sun-java2-5.0",
		"2.0.1=R2_0_0_20081231,/opt/sun-java2-5.0",		
		"1.0.5=R1_0_5_20080723,/opt/sun-java2-5.0",
		"modeling.eclipse.org=------------,------------",
		"2.2.0=HEAD,/opt/sun-java2-5.0",
		"2.1.1=R2_1_Galileo,/opt/sun-java2-5.0",
		"2.0.1=R2_0_0_20081231,/opt/sun-java2-5.0",		
		"1.0.5=R1_0_5_20080723,/opt/sun-java2-5.0",
	),

	/* define a regular expression to be used to collect the most recent 
	 * matching dependencies for running a build. See also releng-common/tools/scripts/start_cron.sh
	 * and /home/www-data/build/requests/dependencies.urls.txt 
	 * */ 	
	"regex" => 
		"I200.*/eclipse-SDK-|[SR]-.*200.*/eclipse-SDK-|" . 
		"[ISR]200.*/emf-runtime-2.5|" .
		"[ISR]200.*/xsd-runtime-2.5|" .
		"[ISR]200.*/GEF-.+-3.5|" .
		"[ISR]3.1/.+/wtp-wst-|" .		
		"R1.0/.+/dltk-core-sdk-|" . 
		"R1.0/.+/dltk-core-Automated_Tests-|" .
		"R1.0/.+/dltk-mylyn-|" .
		"dtp-sdk-1.7",

	"Mapfile_Rule_Default" => 0, // 0: "Use Map, No Tagging=use-false" or 1:"Generate Map, No Tagging=gen-false"

	"EmailDefault" => "michael@zend.com, roy@zend.com", // prefil email contact box with comma-sep'd list, eg., pdt-dev@eclipse.org or bugzilla inbox(es)

	"Users" => array("mspector","mspector",NULL) /* build user, eclipse cvs user, IES cvs user */
);

?>
