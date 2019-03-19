 <?php
 include 'db.php';
 
 
 try{
	 
# MySQL with PDO_MYSQL  
  $DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
  $STH = $DBH->query("select * from wamc2.hits order by id desc;");  
  $STH->setFetchMode(PDO::FETCH_OBJ); 
		//$therows = $STH->fetchColumn();
		//echo "$therows <hr />";
	while($row = $STH->fetch()){
		echo $row->id . " ~ \n";  
		echo $row->ip . " ~ \n";  
		echo $row->timein . " ~ \n";  
		echo $row->datein . " ~ \n";   
	    echo $row->pagename . " ~ \n";   
	    echo " <br />";
	   }
//id	ip	timein	datein	pagename
	
	}
    catch(Exception $e)

    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';

    }


# creating the statement  
//$STH = $DBH->query('SELECT name, addr, city from folks');  
  
# setting the fetch mode  
//$STH->setFetchMode(PDO::FETCH_OBJ);  
  
# showing the results  
//while($row = $STH->fetch()) {  
//    echo $row->name . "\n";  
//    echo $row->addr . "\n";  
//    echo $row->city . "\n";  
//}  

?>

