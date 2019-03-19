<?php
   $host = "localhost";
   $database = "wamc2";
   $user = "wamc2";
   $pass = "h2xy455x7";
	
  	function clean($input, $maxlength)
 	{
     $input = substr($input, 0, $maxlength);
    $input = EscapeShellCmd($input);
   return ($input);
  }
?>
