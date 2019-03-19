<?php
//include 'db.php'; include 'error.php';

//echo " $hostName     $databaseName  $username <br />";

 if (!($connection = @ mysql_pconnect($host,$user, $pass))) die("Could not connect to database");
	mysql_select_db("stream", $connection);


	$query = "DELETE FROM wamc2.hits WHERE hits.ip = "96.41.213.59";";
//echo "$query";
 $result = @ mysql_query ($query, $connection)  or showerror();
	mysql_close();

?>
