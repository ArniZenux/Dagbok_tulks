<?php
include('connection.php');
include('save_nyttverkefni.php');

$msg = '<br>';

if(isset($_POST['submit-new'])){
    $Heiti    = $_POST['Heiti'];
    $Stadur     = $_POST['Stadur'];
    $Dagur      = $_POST['Dagur'];
    $Byrja      = $_POST['Byrja'];
    $Endir      = $_POST['Endir'];
    $Vettvangur = $_POST['Vettvangur'];
    
    $sql = "INSERT INTO tblVerkefni(Heiti, Stadur, Dagur, Timi_byrja, Timi_endir, Vettvangur) VALUES('$Heiti','$Stadur','$Dagur','$Byrja','$Endir','$Vettvangur');";
  
    $result = mysqli_query($conn,$sql);
    if ($result){
       $msg = '<br>Vista!';
    }
    else{
      $msg = '<br>Mistók!';
    }
 }
 $conn->close(); 
 
?>

<!DOCTYPE html>
<html lang="is">
<head>
	<meta charset="utf-8">
    <title>Verkefni</title>
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
            <h3>Verkefni</h3>
            <table id="tabledit" class="table table-striped">
            <thead>
                <tr>
                  <th>Númer</th>
                  <th>Heiti</th>
                  <th>Staður</th>
                  <th>Dagur</th>
                  <th>Byrja</th>
                  <th>Endir</th>
                  <th>Vettvangur</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
           </table> 
      <hr>
      <h3>Nýtt verkefni</h3>
          <form method="POST" action="">
                   <div class="top-row">
                      <div class="field-wrap">
                        <label>
                          Heiti<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="Heiti">
                      </div>
                      <div class="field-wrap">
                        <label>
                         Staður<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="Stadur">
                      </div>
                   </div>
             
                  <div class="top-row"> 
                   <div class="field-wrap">
                      <label>
                        Dagur<span class="req">*</span>
                      </label>
                      <input type="text" required autocomplete="off" name="Dagur">
                    </div>
                   <div class="field-wrap">
                      <label>
                        Byrja<span class="req">*</span>
                      </label>
                      <input type="text" required autocomplete="off" name="Byrja">
                    </div>
                   </div>
                   <div class="top-row"> 
                       <div class="field-wrap">
                          <label>
                        Endir<span class="req">*</span>
                          </label>
                          <input type="text" required autocomplete="off" name="Endir">
                        </div>
                       <div class="field-wrap">
                          <label>
                           Vettvangur<span class="req">*</span>
                          </label>
                         <input type="text" required autocomplete="off" name="Vettvangur">
                       </div>
                   </div> 
                    <!--<div class="top-row"> 
                       <div class="field-wrap">
                          <label>
                        Viðskiptavinur<span class="req">*</span>
                          </label>
                          <input type="email" required autocomplete="off"/>
                        </div>
                       <div class="field-wrap">
                          <label>
                           Greiðsla<span class="req">*</span>
                          </label>
                         <input type="email" required autocomplete="off"/>
                       </div>
                   </div> -->
                  <button type="submit" class="button button-block" name="submit-new">Skrá</button>
                
            <?php
              echo $msg;
            ?>
        </form>
           
     </div>
   </div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>
  <!--<script src="node_modules/jquery/dist/jquery.min.js"></script>-->
  <script src="node_modules/jquery-tabledit/jquery.tabledit.min.js"></script>
  <script>
    function viewData(){
      $.ajax({
          url:'save_nyttverkefni.php?p=view',
          method:'GET'
      }).done(function(data){
        $('tbody').html(data)
        tableData()
      })
    }

    function tableData(){
      $('#tabledit').Tabledit({
        url: 'save_nyttverkefni.php',
        columns: {
                   identifier: [0, 'Numer'],
                   editable: [[1, 'Heiti'], [2, 'Staður'], [3, 'Dagur'],[4, 'Byrja'],[5, 'Endir']]
        }
       });
    }
   </script>
</body>
</html>