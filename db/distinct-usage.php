 <?php
 include 'db.php';
 echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "wamc_index";
	echo $pagename." <br />";
	$sql = "select distinct ip from hits where pagename = ".$pagename.";";
	echo $sql."<br />";
	$STH = $DBH->query($sql);  
	
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		echo $count. " ~ ";
		echo $row->ip . " ~ \n";  
	    echo "<br />";
	   }
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
echo "<hr />";

?>

