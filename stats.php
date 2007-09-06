<?php
#
# Sample PHP code to issue a Downloads query.# Logic, DB and Presentation lumped here for simplicity.#
#


# Load up the classfile# You need to tell the WebMaster from which URL you are loading this class from, # otherwise the connect() will fail.require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_downloads_ro.class.php" ;

# :::::PLEASE NOTE:::::# There are usually in excess of 200 million records, and queries can take up to a few minutes to execute# Don't use these queries in "publicly accessible" web pages!!!# Queries that run for more than 5 minutes are killed by the SQL server.

# simplisticly silly way of preventing the page from being accessed by just anybody.# Linking to page.php?password=abc123 obviously defeats the whole purpose of this.$_PASSWORD = $_GET [ 'password' ] ;
if ($_PASSWORD == "abc123") {
	
	# Connect to database	$dbc = new DBConnectionDownloads ( ) ;
	$dbh = $dbc->connect () ;
	$fileName = "\"/tools/pdt/downloads/drops/S%\"" ;
	//	$fileName = "\"/tools/pdt/downloads/drops/S20070611-M1/%\"" ;
	
	# look for eclipse-SDK, breakdown by file, for all dates, all countries	$sql_info = "SELECT 
							IDX.file_name, 
							COUNT(DOW.file_id) AS RecordCount
					FROM 
							download_file_index AS IDX
							INNER JOIN downloads AS DOW ON DOW.file_id = IDX.file_id
					WHERE
							IDX.file_name LIKE $fileName
					GROUP 
							BY IDX.file_name
		" ;
	
	# We track date-based queries differently as MySQL 4.0.x doesn't support subselects	# and in our tests, joining the index table AND using a where for the dates	# resulted in mysql using a tablesort on the entire downloads table, which took minutes.	# Here, for dates, we fetch the resultset in two steps: one select to get the	# file_id's matching the file pattern (trivial), and another select where IN($ids_csv_list)
	# Fetch the ID's if it's a date-based query
	$file_id_csv = "" ;
	$sql = "SELECT 
					IDX.file_id
				FROM download_file_index AS IDX 
  				INNER JOIN downloads AS DOW ON IDX.file_id = DOW.file_id 
				WHERE IDX.file_name LIKE $fileName
 				GROUP BY IDX.file_id" ;
	/*	$rs = mysql_query ( $sql, $dbh ) ;
	while ( $myrow = mysql_fetch_assoc ( $rs ) ) {
		array_push ( $aFileID, $myrow [ 'file_id' ] ) ;
	}*/
	
	# look for eclipse-SDK, breakdown by country for a specific date range	//	$sql_info3 = "SELECT DOW.ccode, COUNT(DOW.ccode) AS RecordCount FROM download_file_index AS IDX INNER JOIN downloads AS DOW ON IDX.file_id = DOW.file_id WHERE IDX.file_id IN ($file_id_csv) AND DOW.download_date BETWEEN $date_from AND $date_to GROUP BY DOW.ccode" ;
	//	$rs = mysql_query ( $sql_info, $dbh ) ;
	//	$rs3 = mysql_query ( $sql_info3, $dbh ) ;	
	/*	$totalCount = 0;
	while ( $myrow = mysql_fetch_assoc ( $rs ) ) {
		$currentCount = $myrow [ 'RecordCount' ];
		if ($currentCount > 150) {
			echo "File: " . $myrow [ 'file_name' ] . " Count: " . $currentCount . "<br />" ;
			$totalCount += $currentCount;
		}
	}
	echo "Total Count: " . $totalCount . "<br />";
	
	
	//	echo "Results by ccode: <br />" ;	while ( $myrow = mysql_fetch_assoc ( $rs3 ) ) {
		echo "Country: " . $myrow [ 'ccode' ] . " Count: " . $myrow [ 'RecordCount' ] . "<br />" ;
	}*/
	for ($i=8; $i>0; $i--) {
		$date_from = "\"2007-0".$i. "-01\"" ;
		$date_to = "\"2007-0".($i+1). "-01\"" ;	
		printStats($fileName, $date_from, $date_to, $dbh);
	}
	
	$rs = null ;
	$rs2 = null ;
	$rs3 = null ;
	$dbh = null ;
	$dbc = null ; 
} else {
	echo "You are not authorized to access this page." ;
}

function printStats ($fileName, $date_from , $date_to, $dbh) {
	$aFileID = array ( ) ;
	$file_id_csv = implode ( ",", $aFileID ) ;
	# look for eclipse-SDK, breakdown by file for a specific date range	$sql_info2 = "SELECT IDX.file_name, COUNT(DOW.file_id) AS RecordCount FROM download_file_index AS IDX INNER JOIN downloads AS DOW ON DOW.file_id = IDX.file_id WHERE IDX.file_id in ($file_id_csv) AND DOW.download_date BETWEEN $date_from AND $date_to GROUP BY IDX.file_id" ;
	$rs2 = mysql_query ( $sql_info2, $dbh ) ;
	if (mysql_errno ( $dbh ) > 0) {
		echo "There was an error processing this request - " . mysql_error ( $dbh ) ;
		
		# For debugging purposes - don't display this stuff in a production page.		# echo mysql_error($dbh);		

		# Mysql disconnects automatically, but I like my disconnects to be explicit.		$dbc->disconnect () ;
		exit () ;
	}
	$totalCount = 0 ;
	echo "<b>Download statistics for " . $fileName . " with the following dates:" . $date_from . " - " . $date_to . "</b><br />" ;
	
	while ( $myrow = mysql_fetch_assoc ( $rs2 ) ) {
		$currentCount = $myrow [ 'RecordCount' ] ;
		if ($currentCount > 150) {
			echo "File: " . $myrow [ 'file_name' ] . " Count: " . $currentCount . "<br />" ;
			$totalCount += $currentCount ;
		}
	}
	echo "Total Count: " . $totalCount . "<br />" ;
	$dbc->disconnect () ;
}
?>