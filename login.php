<?php
 session_start();
 include("connection.php");
 //include("login.php");
 
 $msg = '<br>';

 if(isset($_POST['submit-in'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $name = stripcslashes($name);
    $pass = stripcslashes($pass);
   
    $sql = "SELECT ID, Name, Email FROM tblNotandi WHERE Name='$name' AND Password='$pass';";
  
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
  
    if (mysqli_num_rows($result) == 1){
      $_SESSION['Id'] = $row['ID'];
      $_SESSION['Nafn'] = $row['Name'];
      $_SESSION['Netfang'] = $row['Email'];
      header("Location: home.php"); 
    }
    else{
      $msg = '<br>Notandi eða lykliorð er rangt!';
    }
  }
 $conn->close(); 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form method="POST" action="" class="form-signin">
        <h2 class="form-signin-heading">Dagbók táknmálstúlks</h2>
        <label for="inputEmail" class="sr-only">Notandi</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Notandi" name="username">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="text" id="inputPassword" class="form-control" placeholder="Lykliorð" name="password">
        <br>
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit-in" value="Submit">
      </form>
        <?php
          echo $msg;
        ?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <!-- <script src="node_modules/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>-->
  </body>
</html>
