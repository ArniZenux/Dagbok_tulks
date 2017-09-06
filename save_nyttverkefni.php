<?php

$localhost = "localhost";
$user      = "root";
$pass      = "arni";
$db_name   = "dbaseTulkurSHH";

$conn = mysqli_connect($localhost,$user,$pass,$db_name);

/*if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}*/

$page = isset($_GET['p'])? $_GET['p'] : '' ;
if($page=='view'){
   $sql = "SELECT * FROM tblVerkefni;";
   $result = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_array($result)) {
   		  ?>
   		  <tr class="bg-danger">';
		   <td><?php echo $row['Nr'] ?></td>
		   <td><?php echo $row['Heiti'] ?></td>
		   <td><?php echo $row['Stadur'] ?></td>
       <td><?php echo $row['Dagur'] ?></td>
       <td><?php echo $row['Timi_byrja'] ?></td>
       <td><?php echo $row['Timi_endir'] ?></td>
       <td><?php echo $row['Vettvangur'] ?></td>
		  </tr>;
		<?php
		}
 }
?>