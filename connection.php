<?php
  $localhost = "localhost";
  $user      = "root";
  $pass      = "arni";
  $db_name   = "shhData";

  $conn = mysqli_connect($localhost,$user,$pass,$db_name);
 /*
  if($conn->connect_error){
     die("Error : -> ".$conn->connect_error);
  }
  else{
  	echo 'connection';
  }*/
  if($conn){
    echo 'Samband';
  }  
?>