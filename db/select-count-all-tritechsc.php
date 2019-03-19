 <html><head><title>
 select all count </title></head>
 <style>

html {
    font-family: "Lucida Sans", sans-serif;
}
body {
font-family: "Lucida Sans", sans-serif;
font-size: 24px;
    background-color: #000;
    color: #00ff00;
    padding: 5px;
}

 </style>
 <body>
 <?php
 include 'db/db.php';
 // Auto-Body-Technology $autobody = 0;~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 $autobody = 0;
 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Auto-Body-Technology";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
	//	echo $count. " ~ ";
	//	echo $row->ip . " ~ \n";  
	 //   echo "<br />";
	   }
	    $autobody = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
// echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 //Auto-Systems-Technology  
 $auto = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Auto-Systems-Technology";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	   $auto = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Careers-in-Health-Care 
$health = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Careers-in-Health-Care";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	   $health = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
// echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//  Construction-Trades 
$construct = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Construction-Trades";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	   $construct = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Cosmetology 
$cos = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Cosmetology";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	   $cos = $count;
	}
	
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Culinary-Arts 
 $ca = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Culinary-Arts";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	   $ca = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Cyber-Security  
$cyber = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Cyber-Security";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	   $cyber = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Dental-Assisting 
$dental = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Cosmetology";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	   // echo "<br />";
	   }
	   $dental = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Diesel-Technology
$diesel = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Diesel-Technology";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	    $diesel = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Digital-Arts-Filmmaking  
$digital = 0; 

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Digital-Arts-Filmmaking";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $digital = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Early-Childhood-Education 
$ece = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Early-Childhood-Education";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
	//	echo $count. " ~ ";
	//	echo $row->ip . " ~ \n";  
	//    echo "<br />";
	   }
	     $ece = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
// echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Firefighting  
$fire = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Firefighting";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $fire = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Game-Design 
$game = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Game-Design";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $game = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Law-Enforcement  
$law = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Law-Enforcement";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $law = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Pre-Nursing 
$nurse = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Pre-Nursing";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $nurse = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Pre-Veterinary-Technician 
$vet = 0;
try{
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Pre-Veterinary-Technician";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $vet = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Radio-Broadcasting 
$radio = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Radio-Broadcasting";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $radio = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//Teen-Parenting 
$teen = 0;

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Teen-Parenting";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $teen = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//  echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Welding-Technology 
$weld = 0; 

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Welding-Technology";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $weld = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// Tri-Tech Overview 
$ttprograms = 0; 

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Tri-Tech-Programs";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $ttprograms = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
// Tri-Tech Overview 
$tritech = 0; 

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "Tri-Tech";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $tritech = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Tri-Tech Overview 
$tritech = 0; 

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "LOC";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $tritech = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Tri-Tech Overview 
$loc = 0; 

 try{ 
# MySQL with PDO_MYSQL  
	$DBH = new PDO("mysql:host=$host;database =$database ", $user, $pass); 
	$pagename = "LOC";
	//echo $pagename." <br />";
	$STH = $DBH->query("select distinct ip from ttcompsci.programs where pagename = \"$pagename\";");  
	$STH->setFetchMode(PDO::FETCH_OBJ); 
	$count = 0;
	while($row = $STH->fetch()){
		$count++;
		//echo $count. " ~ ";
		//echo $row->ip . " ~ \n";  
	    //echo "<br />";
	   }
	     $loc = $count;
	}
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
//echo "<hr />";
//  ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~


echo "<hr />";
echo "Auto-Body-Technology = "; echo $autobody. "<br />";
echo "Auto-Systems-Technology =   "; echo $auto. "<br />";
echo "Careers-in-Health-Care = "; echo $health. "<br />";
echo "Construction-Trades = "; echo $construct."<br />";
echo "Cosmetology = "; echo $cos."<br />";
echo "Culinary-Arts =  "; echo $ca."<br />";
echo "Cyber-Security  "; echo $cyber."<br />";
echo "Dental-Assisting = "; echo $dental."<br />";
echo "Diesel-Technology = "; echo $diesel."<br />";
echo "Digital-Arts-Filmmaking = "; echo $digital."<br />";
echo "Early-Childhood-Education = "; echo $ece."<br />";
echo "Firefighting = "; echo $fire."<br />";
echo "Game-Design = "; echo $game."<br />";
echo "Law-Enforcement = "; echo $law."<br />";
echo "Learning Opportunity Center = "; echo $loc."<br />";
echo "Pre-Nursing = "; echo $nurse."<br />";
echo "Pre-Veterinary-Technician = "; echo $vet."<br />";
echo "Radio-Broadcasting = "; echo $radio."<br />";
echo "Teen-Parenting = "; echo $teen."<br />";
echo  "Welding-Technology = "; echo $weld."<br />";
echo  "Tri-Tech  = "; echo $tritech."<br />";
echo  "Tri-Tech Programs = "; echo $ttprograms."<br />";
echo "<hr />";
?>
</body>
</html>
