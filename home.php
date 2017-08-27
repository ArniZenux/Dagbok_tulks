<?php
session_start();
include('connection.php');

$name = $_SESSION['Nafn'];
$id = $_SESSION['Id'];

echo '<br>Home.php<br>';

echo $_SESSION['Id'];
echo '<br>';
echo $_SESSION['Nafn'];
echo '<br>';
echo $_SESSION['Netfang'];
echo '<br>';
echo 'Name: '.$name;

echo '<hr>';

$sql = "SELECT Heiti,Stadur, Dagur, Byrja, Endir FROM tblVerkefni_isl WHERE ID='$id';";
//$sql = "SELECT Heiti,Stadur, Dagur, Byrja, Endir FROM tblVerkefni;";
//$sql = "SELECT ID, Name, Email , Password FROM tblNotandi;";
$result = mysqli_query($conn,$sql);
if(!$result){
	echo 'ekki samband';
}

while($row = mysqli_fetch_array($result) ){
  echo $row[0].'<br>';
  echo $row[1];
  //echo $Nafn_heiti;
}

$conn->close(); 

?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
	<title>Home</title>
</head>
<body>
<br><a href="logout.php">Logout</a>
</body>
</html>