<?php
include('connection.php');
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
      <h3>Viðskiptavinur</h3>
      <table id="tabledit" class="table table-striped">
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
      
      <hr>
      <br>
      
      <h3>Nýr viðskiptavinur</h3>
         
          <div class="top-row">
                        <div class="field-wrap">
                        <label>
                          Kennitala<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="username">
                      </div>
                       <div class="field-wrap">
                        <label>
                         Nafn<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="password">
                       </div>
                  </div>
                     <div class="field-wrap">
                      <label>
                        Símanúmer<span class="req">*</span>
                      </label>
                      <input type="email" required autocomplete="off"/>
                    </div>
                  <button type="submit" class="button button-block" name="submit-new">Skrá</button>
          <?php
            echo $msg;
          ?>
    </div>
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