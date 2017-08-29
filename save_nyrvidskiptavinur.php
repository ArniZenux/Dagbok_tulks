<?php
include('connection.php');

$page = isset($_GET['p'])? $_GET['p'] : '' ;
if($page=='view'){
   $sql = "SELECT * FROM tblVidskiptavinur;";
   $result = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_array($result)) {
   		  ?>
   		  <tr>;
  		    <td><?php echo $row['Kennitala'] ?></td>
  		    <td><?php echo $row['Name'] ?></td>
  		    <td><?php echo $row['Simi'] ?></td>
		    </tr>
		<?php
		}
 }
?>