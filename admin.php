<?php
include('connection.php');
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
 
      <h1>Administrator</h1>
      <br>
      <ul>
         <li><a href="tulkur.php">Nýr túlkur</a></li>
         <li><a href="verkefni.php">Nýtt verkefni</a></li>
         <li><a href="vidskiptavinur.php">Nýr viðskiptavinur</a></li>
         <li>Breyta verkefni</li>
         <li>Breyta túlk</li>
         <li>Breyta viðskiptavini</li>
         <li>Tölfræði</li>
      </ul>

      <hr>
      
      <h2>Verkefnilisti</h2>
        
		<table class="table">
		  <thead>
		    <tr>
			  <th>Nr</th>
			  <th>Verkefni</th>
			  <th>Staður</th>
			  <th>Dagur</th>
			  <th>Byrja</th>
			  <th>Endir</th>
			  <th>Viðskiptavinur</th>
			  <th>Vettvangur</th>
			</tr>
		  </thead>
		  <tbody>
		   <tr class="danger">
               <th>1</th>
               <td>Kaffiboð hjá Don Corleone</td>
               <td>Siðamúla 7</td>
               <td>Þriðjudagur</td>
               <td>12:00</td>
               <td>12:40</td>
               <td>Don Árni Ingi Jóhanneson</td>
               <td>Ráðgjafi</td>
            </tr>
          </tbody>
        </table>
    </div>

</body>
</html>