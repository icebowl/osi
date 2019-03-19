<?php
   $host = "localhost";
   $database = "";
   $user = "";
   $pass = "";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
