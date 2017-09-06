<?php
session_start();
include ('connection.php');
//include('login.php');
//include('header.php');
$msg = '<br>';

if(isset($_POST['submit-in'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $name = stripcslashes($name);
    $pass = stripcslashes($pass);
   
    $sql = "SELECT Kt FROM tblNotandi WHERE Notandi='$name' AND Password='$pass';";
  
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
  
    if (mysqli_num_rows($result) == 1){
      $_SESSION['Kt'] = $row['Kt'];
      //$_SESSION['Nafn'] = $row['Name'];
      //$_SESSION['Netfang'] = $row['Email'];
      header("Location: home.php"); 
    }
    else{
      $msg = '<br>Notandi eða lykliorð er rangt!';
    }
  }

if(isset($_POST['submit-in-fanney'])){
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $name = stripcslashes($name);
    $pass = stripcslashes($pass);
   
    $sql = "SELECT Kt FROM tblNotandi WHERE Notandi='$name' AND Password='$pass';";
  
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
  
    if (mysqli_num_rows($result) == 1){
      $_SESSION['Kt'] = $row['Kt'];
      //$_SESSION['Nafn'] = $row['Name'];
      //$_SESSION['Netfang'] = $row['Email'];
      header("Location: admin.php"); 
    }
    else{
      $msg = '<br>Notandi eða lykliorð er rangt!';
    }
  }

 $conn->close(); 

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Dúfar</a></li>
        <li class="tab"><a href="#login">Ugla</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Dagbók táknmálstúlks</h1>
          
          <form action="" method="POST">
          <!--
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Notandi<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
          -->
          
          <div class="field-wrap">
            <label>
              Notandi<span class="req">*</span>
            </label>
            <input type="type" required autocomplete="off" name="username"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Lykliorð<span class="req">*</span>
            </label>
            <input type="type" required autocomplete="off" name="password"/>
          </div>

          <button type="submit" class="button button-block" name="submit-in">Skrá inn</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Umsjónarmaður túlkaþjónustu</h1>
          
          <form action="" method="POST">
          
            <div class="field-wrap">
            <label>
              Notandi<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="username">
          </div>
          
          <div class="field-wrap">
            <label>
              Lykliorð<span class="req">*</span>
            </label>
            <input type="text" required autocomplete="off" name="password">
          </div>
          
          <!-- <p class="forgot"><a href="#">Forgot Password?</a></p>
           --> 
          <button type="submit" class="button button-block" name="submit-in-fanney">Skrá inn</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
<?php
//include('footer.php');
?>
</body>
</html>
