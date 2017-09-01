<?php
include('connection.php');
include('sava_newtulkur.php');

$msg = '<br>';
/*
 if(isset($_POST['submit-in'])){
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
    
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="viewData()">
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
          <a class="navbar-brand" href="admin.php">Tilbaka</a>
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
            <h1>Umsjónarsvæði túlkaþjónustu</h1>
            <br>
            <ul class="tab-group">
               <li><a href="tulkur.php">Nýr túlkur</a></li>
               <li><a href="verkefni.php">Nýtt verkefni</a></li>
               <li><a href="vidskiptavinur.php">Nýr viðskiptavinur</a></li>            
               <li><a href="#">Tölfræði</a></li>
            </ul>

            <hr>
            <h3>Táknmálstúlkur</h3>
            <table id="tabledit" class="table table-striped">
              <thead>
                <tr>
                  <th>Kennitala</th>
                  <th>Nafn</th>
                  <th>Netfang</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table> 
            
            <hr>
            <br>
            <h3>Skrá nýr túlk</h3>
             <!--
              <form method="POST" action="" class="form-signin">
                  <h2 class="form-signin-heading">Skrá táknmálstúlk</h2>
                  <label for="inputEmail" class="sr-only">Nafn</label>  
                  <input type="text" id="inputEmail" class="form-control" placeholder="Nafn" name="username">
                  
                  <label for="inputPassword" class="sr-only">Kennitala</label> 
                  <input type="text" id="inputPassword" class="form-control" placeholder="Kennitala" name="kennitala">
                  
                  <label for="inputPassword" class="sr-only">Sími (GSM)</label>
                  <input type="text" id="inputPassword" class="form-control" placeholder="Lykliorð" name="password">
                  <label for="inputPassword" class="sr-only">Netfang @</label>
                  <input type="text" id="inputPassword" class="form-control" placeholder="Netfang @" name="netfang">
                  <br>
                  <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit-in" value="Skrá">
                </form>
                -->
                  <div class="top-row">
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
                  </div>
                     <div class="field-wrap">
                      <label>
                        Tölvupóstur<span class="req">*</span>
                      </label>
                      <input type="email" required autocomplete="off"/>
                    </div>
                  <button type="submit" class="button button-block" name="submit-new">Skrá</button>
            <?php
              echo $msg;
            ?>
            
     </div>
    </div>

  <!-- Javascript - Jquery core --> 
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/jquery-tabledit/jquery.tabledit.min.js"></script>
  <script>
    function viewData(){
      $.ajax({
          url:'sava_newtulkur.php?p=view',
          method:'GET'
      }).done(function(data){
        $('tbody').html(data)
        tableData()
      })
    }

    function tableData(){
      $('#tabledit').Tabledit({
        url: 'save_nyrtulkur.php',
        columns: {
                   identifier: [0, 'id'],
                   editable: [[1, 'nickname'], [2, 'firstname'], [3, 'lastname']]
        }
       });
    }
  </script>
</body>
</html>