<?php
	require_once "/home/data/httpd/eclipse-php-classes/system/dbconnection_downloads_ro.class.php" ;

	#
	# Sample PHP code to issue a Downloads query.
	#
 
	# :::::PLEASE NOTE:::::
	# There are usually in excess of 200 million records, and queries can take up to a few minutes to execute
	# Don't use these queries in "publicly accessible" web pages!!!
	# Queries that run for more than 5 minutes are killed by the SQL server.
 
 
	# simplisticly silly way of preventing the page from being accessed by just anybody.
	# Linking to page.php?password=abc123 obviously defeats the whole purpose of this.
	$_PASSWORD = $_GET['password'];
	if($_PASSWORD == "abc123") {
 
		# look for eclipse-SDK, breakdown by file, for all dates, all countries
		$sql_info = "SELECT 
					IDX.file_name, 
					IDX.download_count
				FROM 
					download_file_index AS IDX
				WHERE
					IDX.file_name LIKE \"%pdt\"
		";
                $result = $App->downloads_sql($sql_info);
                while($row = mysql_fetch_assoc($result)) {
                    echo "File: " . $row['file_name'] . " Count: " . $row['download_count'] . "\n";
                }
 
		# We track date-based queries differently as MySQL 5's subselects are actually slower
		# and in our tests, joining the index table AND using a where for the dates
		# resulted in mysql using a tablesort on the entire downloads table, which took minutes.
		# Here, for dates, we fetch the resultset in two steps: one select to get the
		# file_id's matching the file pattern (trivial), and another select where IN($ids_csv_list)
 
		# Fetch the ID's if it's a date-based query
		$aFileID = array();
		$file_id_csv = "";
		$sql = "SELECT 
				IDX.file_id
				FROM download_file_index AS IDX 
  				INNER JOIN downloads AS DOW ON IDX.file_id = DOW.file_id 
				WHERE IDX.file_name LIKE \"%pdt\"
 				GROUP BY IDX.file_id";
		$rs = $App->downloads_sql($sql_info);
		while($myrow = mysql_fetch_assoc($rs)) {
			array_push($aFileID, $myrow['file_id']);
		}
		$file_id_csv = implode(",", $aFileID);
 
 
		# look for eclipse-SDK, breakdown by file for a specific date range
		$sql_info2 = "SELECT IDX.file_name, COUNT(DOW.file_id) AS RecordCount FROM download_file_index AS IDX INNER JOIN downloads AS DOW ON DOW.file_id = IDX.file_id WHERE IDX.file_id in ($file_id_csv) AND DOW.download_date BETWEEN \"2006-02-01\" AND \"2006-02-28\" GROUP BY IDX.file_id";
 
		# look for eclipse-SDK, breakdown by country for a specific date range
		$sql_info3 = "SELECT DOW.ccode, COUNT(DOW.ccode) AS RecordCount FROM download_file_index AS IDX INNER JOIN downloads AS DOW ON IDX.file_id = DOW.file_id WHERE IDX.file_id IN ($file_id_csv) AND DOW.download_date BETWEEN \"2006-02-01\" AND \"2006-02-28\" GROUP BY DOW.ccode";
 
		$rs 	= $App->downloads_sql($sql_info);
		$rs2 	= $App->downloads_sql($sql_info2);
		$rs3 	= $App->downloads_sql($sql_info3);
 
		echo "File count - all: <br />";			
		while($myrow = mysql_fetch_assoc($rs)) {
			echo "File: " . $myrow['file_name'] . " Count: " . $myrow['RecordCount'] . "<br />";
		}
 
		echo "File count - date: <br />";			
		while($myrow = mysql_fetch_assoc($rs2)) {
			echo "File: " . $myrow['file_name'] . " Count: " . $myrow['RecordCount'] . "<br />";
		}
 
		echo "Results by ccode: <br />";			
		while($myrow = mysql_fetch_assoc($rs3)) {
			echo "Country: " . $myrow['ccode'] . " Count: " . $myrow['RecordCount'] . "<br />";
		}
	}
	else {
		echo "You are not authorized to access this page.";
	}
?>