<?php

$mysqli = new mysqli('localhost', 'root', 'arni', 'shhdata');

if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}

/*$localhost = "localhost";
$user      = "root";
$pass      = "arni";
$db_name   = "SHHData";

$conn = mysqli_connect($localhost,$user,$pass,$db_name);
/*

/*if (mysqli_connect_errno()) {
  echo json_encode(array('mysqli' => 'Failed to connect to MySQL: ' . mysqli_connect_error()));
  exit;
}*/

$page = isset($_GET['p'])? $_GET['p'] : '' ;
if($page=='view'){
   /*$sql = "SELECT * FROM tblVerkefni;";
   $result = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_array($result)) {
   		 */
   $result = $mysqli->query("SELECT * FROM tblVerkefni ORDER BY tblVerkefni.Nr DESC;");
   while($row = $result->fetch_assoc()){
        ?>
   		  <tr class="active">';
  		   <td><?php echo $row['Nr'] ?></td>
  		   <td><?php echo $row['Heiti'] ?></td>
  		   <td><?php echo $row['Stadur'] ?></td>
         <td><?php echo $row['Dagur'] ?></td>
         <td><?php echo $row['Tima_byrja'] ?></td>
         <td><?php echo $row['Tima_endir'] ?></td>
         <td><?php echo $row['Vettvangur'] ?></td>
		  </tr>;
		<?php
		}
 }

else{
   //header('Content-Type: application/json');

    $input = filter_input_array(INPUT_POST);

    if ($input['action'] == 'edit') {
        $mysqli->query("UPDATE tblVerkefni SET Heiti='" . $input['Heiti'] . "', Stadur='" . $input['Stadur'] . "', Dagur='" . $input['Dagur'] . "', Tima_byrja='" . $input['Tima_byrja'] . "', Tima_endir='" . $input['Tima_endir'] . "', Vettvangur='" . $input['Vettvangur'] . "' WHERE Nr='" . $input['Nr'] . "'");
    } else if ($input['action'] == 'delete') {
        $mysqli->query("UPDATE tblVerkefni SET deleted=1 WHERE id='" . $input['id'] . "'");
    } else if ($input['action'] == 'restore') {
        $mysqli->query("UPDATE tblVerkefni SET deleted=0 WHERE id='" . $input['id'] . "'");
    }

    mysqli_close($mysqli);

    //echo json_encode($input);
  }
?>