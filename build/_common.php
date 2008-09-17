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

		"build.eclipse.org=------------,------------",
		"2.0.0=HEAD,/opt/public/common/ibm-java2-ppc-50",
	),

	/* define a regular expression to be used to collect the most recent 
	 * matching dependencies for running a build. See also releng-common/tools/scripts/start_cron.sh
	 * and /home/www-data/build/requests/dependencies.urls.txt 
	 * */ 	
	"regex" => "M200.*/eclipse-SDK-|[SR]-.*200.*/eclipse-SDK-|[MSR]200.*/emf-sdo-xsd-SDK-|[MSR]200.*/GEF-ALL-|wtp-|dltk-|dtp-",

	"Mapfile_Rule_Default" => 0, // 0: "Use Map, No Tagging=use-false" or 1:"Generate Map, No Tagging=gen-false"

	"EmailDefault" => "alon@zend.com", // prefil email contact box with comma-sep'd list, eg., pdt-dev@eclipse.org or bugzilla inbox(es)

	"Users" => array("apeled","apeled",NULL) /* build user, eclipse cvs user, IES cvs user */
);

?>
