<?php
  $localhost = "localhost";
  $user      = "root";
  $pass      = "arni";
  $db_name   = "dbaseTulkurSHH";

  $connection = new mysqli($localhost,$user,$pass,$db_name);

  if($connection->connect_error){
     die("Error : -> ".$connection->connect_error);
  }
  else{
  	echo 'connection';
  }  
?>