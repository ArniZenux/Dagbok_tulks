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
?>

<!DOCTYPE html>
<html lang="is">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
       <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body>
<div class="container">
 <table class="table">
  <thead>
  <tr>
  <th>#</th>
  <th>Verkefni</th>
  <th>Staður</th>
  <th>Dagur</th>
  <th>Byrja</th>
  <th>Endir</th>
  </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT Heiti,Stadur, Dagur, Byrja, Endir FROM tblVerkefni_isl WHERE ID='$id';";
$result = mysqli_query($conn,$sql);
mysqli_query ('SET NAMES UTF8;');
mysqli_query ('SET COLLATION_CONNECTION=utf8_icelandic_ci;');

if(!$result){
	echo 'ekki samband';
}
while($row = mysqli_fetch_array($result) ){
  echo '<tr class="bg-danger">';
  echo  '<th scope="row">1</th>';
  echo  '<td>'.$row[0].'</td>';
  echo  '<td>'.$row[1].'</td>';
  echo  '<td>'.$row[2].'</td>';
  echo  '<td>'.$row[3].'</td>';
  echo  '<td>'.$row[4].'</td>';
  echo '</tr>';

}
$conn->close(); 
?>
  </tbody>
</table>

<br><a href="logout.php">Logout</a>
</div>
</body>
</html>