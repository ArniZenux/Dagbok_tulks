<?php
session_start();
include('connection.php');
//include('loader.php');
//$name = $_SESSION['Nafn'];
$Kennitala = $_SESSION['Kt'];
/*
echo '<br>Home.php<br>';
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
  <title>Administrator</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
       <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <!-- 
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          -->
          <a class="navbar-brand" href="">Dagbók táknmálstúlks</a>
        </div>
        <!-- <div id="navbar" class="collapse navbar-collapse">  --> 
          <ul class="nav navbar-nav navbar-right">
            <!--<li class="active"><a href="#">Heima</a></li>
            <li><a href="#about">Stilling</a></li> -->
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>   Útskrá</a></li>
          </ul>
      </div>
</nav>

<br><br>

<div class="container">

<div class="form_home"> 
            <h1>Dagbók táknmálstúlks</h1>
             <br>
              <ul class="tab-group">
                <li><a href="#">Verkefnislisti</a></li>            
                <li><a href="#">Tölfræði</a></li>
              </ul>
             <hr> 
               <?php
                 $sql = "SELECT Nafn FROM tblTulkur WHERE Kt = '$Kennitala';";
                 $result = mysqli_query($conn,$sql);
                 $row = mysqli_fetch_array($result);
                 echo '<h3>'.$row['Nafn'].'</h3>';
               ?>
               <table class="table">
                <thead>
                <tr>
                <th>Nr</th>
                <th>Verkefni</th>
                <th>Staður</th>
                <th>Dagur</th>
                <th>Byrja</th>
                <th>Endir</th>
                <th>Vettvangur</th>
                </tr>
                </thead>
                <tbody>
              <?php
              $sql = "SELECT Nr, Heiti, Stadur, Dagur, Timi_byrja, Timi_endir, Vettvangur FROM tblVerkefni WHERE Nr='1';";
              $result = mysqli_query($conn,$sql);

              if(!$result){
              	echo 'ekki samband';
              }

              while( $row = mysqli_fetch_array($result) ){
                echo '<tr class="info">';
                echo  '<td scope="row">'.$row[0].'</th>';
                echo  '<td>'.$row[1].'</td>';
                echo  '<td>'.$row[2].'</td>';
                echo  '<td>'.$row[3].'</td>';
                echo  '<td>'.$row[4].'</td>';
                echo  '<td>'.$row[5].'</td>';
                echo  '<td>'.$row[6].'</td>';
                echo '</tr>';
              }
              $conn->close(); 
              ?>
                </tbody>
              </table>
  </div>
</div>
</body>
</html>