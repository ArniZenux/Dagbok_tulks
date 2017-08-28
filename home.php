<?php
session_start();
include('connection.php');
//include('loader.php');
$name = $_SESSION['Nafn'];
$id = $_SESSION['Id'];

/*echo '<br>Home.php<br>';
echo $_SESSION['Id'];
echo '<br>';
echo $_SESSION['Nafn'];
echo '<br>';
echo $_SESSION['Netfang'];
echo '<br>';
echo 'Name: '.$name;

echo '<hr>';
*/
?>
<!DOCTYPE html>
<html lang="is">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="signin.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Menu</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Heima</a></li>
            <li><a href="#about">Stilling</a></li>
            <li><a href="logout.php">Útskrá</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <br><br>
<div class="container">
 <h1>Dagbók táknmálstúlks</h1>
 <table class="table">
  <thead>
  <tr>
  <th>Nr</th>
  <th>Verkefni</th>
  <th>Staður</th>
  <th>Dagur</th>
  <th>Byrja</th>
  <th>Endir</th>
  </tr>
  </thead>
  <tbody>
<<<<<<< HEAD
<?php
$sql = "SELECT Heiti,Stadur, Dagur, Byrja, Endir FROM tblVerkefni_isl WHERE ID='$id';";
$result = mysqli_query($conn,$sql);
mysqli_query ('SET NAMES UTF8;');
mysqli_query ('SET COLLATION_CONNECTION=utf8_icelandic_ci;');

if(!$result){
	echo 'ekki samband';
}

while( $row = mysqli_fetch_array($result) ){
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
=======
<?php 
     $sql = "SELECT Heiti,Stadur, Dagur, Byrja, Endir FROM tblVerkefni WHERE ID='$id';";
     $result = mysqli_query($conn,$sql);

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
>>>>>>> fed0acfd3e1b7eacfc5438f40de5f66b8b037f59
?>
  </tbody>
</table>

</div>
</body>
</html>