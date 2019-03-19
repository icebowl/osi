  <html><head><title>
 select all count </title></head>
 <style>

html {
    font-family: "Lucida Sans", sans-serif;
}
body {
font-family: "Lucida Sans", sans-serif;
font-size: 12px;
    background-color: #000;
    color: #00ff00;
    padding: 5px;
}

 </style>
 <body>
 
 
 <?php
 include 'db.php';

  echo "<hr />";
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "wamc_index";
	echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from wamc2.hits where pagename = \"$pagename\";");  
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

</body>
</html>
