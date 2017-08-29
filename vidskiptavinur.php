<?php
include('save_nyrvidskiptavinur.php');

$msg = '<br>';

 /*if(isset($_POST['submit-in'])){
    $name      = $_POST['username'];
    $email     = $_POST['netfang'];
    //$kennitala = $_POST['kennitala'];
    $pass      = $_POST['password'];
    
    $name = stripcslashes($name);
    $pass = stripcslashes($pass);
   
    $sql = "INSERT INTO tblNotandi(Name, Email, Password) VALUES('$name','$email','$pass');";
  
    $result = mysqli_query($conn,$sql);
    if ($result){
       $msg = '<br>Vista!';
    }
    else{
      $msg = '<br>Mistók!';
    }
  }
 $conn->close(); 
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
</head>
<body onload="viewData()">
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="admin.php">Menu</a>
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
      
      <h2>Nýr túlkur</h2>
          <form method="POST" action="" class="form-signin">
            <h2 class="form-signin-heading">Skrá viðskiptavin</h2>
            <label for="inputEmail" class="sr-only">Nafn</label>
            <input type="text" id="inputEmail" class="form-control" placeholder="Nafn" name="username">
            <!--<label for="inputPassword" class="sr-only">Kennitala</label>
            <input type="text" id="inputPassword" class="form-control" placeholder="Kennitala" name="kennitala">
            -->
            <label for="inputPassword" class="sr-only">Sími (GSM)</label>
            <input type="text" id="inputPassword" class="form-control" placeholder="Lykliorð" name="password">
            <label for="inputPassword" class="sr-only">Netfang @</label>
            <input type="text" id="inputPassword" class="form-control" placeholder="Netfang @" name="netfang">
            <br>
            <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit-in" value="Skrá">
          </form>
       <?php
         echo $msg;
       ?>
      <h2>Túlkur</h2>
      <table id="tabledit" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Kennitala</th>
            <th>Nafn</th>
            <th>Símanúmer</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table> 
    
    </div>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/jquery-tabledit/jquery.tabledit.min.js"></script>
  <script>
    function viewData(){
      $.ajax({
          url:'save_nyrvidskiptavinur.php?p=view',
          method:'GET'
      }).done(function(data){
        $('tbody').html(data)
        tableData()
      })
    }

    function tableData(){
      $('#tabledit').Tabledit({
        url: 'save_nyrvidskiptavinur.php',
        columns: {
                   identifier: [0, 'Numer'],
                   editable: [[1, 'Nafn'], [2, 'Símanúmer'], [3, 'lastname']]
        }
       });
    }
   </script>
</body>
</html>