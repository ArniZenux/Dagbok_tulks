<?php
session_start();
include('connection.php');
//include('loader.php');
//$name = $_SESSION['Nafn'];

$Kennitala = $_SESSION['Kt'];

include('header.php');
?>
<body>
<?php
include('navbar_home.php');
?>

<br><br>

<div class="container">

<div class="form_home"> 
      <h1>Dagbók táknmálstúlks</h1>
          <hr> 
              <?php
                $sql = "SELECT Nafn FROM tblTulkur where tblTulkur.Kt='$Kennitala' ;";
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
                      <th>Vettangur</th>
                    </tr>
                  </thead>
                <tbody>
                <?php
                    $sql = "SELECT tblVerkefni.Nr, tblVerkefni.Heiti, tblVerkefni.Dagur, tblVerkefni.Stadur, tblVerkefni.Tima_byrja, tblVerkefni.Tima_endir, tblVerkefni.Vettvangur FROM tblTulkur, tblVinna, tblVerkefni WHERE tblTulkur.Kt=tblVinna.Kt and tblVinna.Nr=tblVerkefni.Nr and tblTulkur.Kt='$Kennitala' ;";
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
<?php
include('footer.php');
?>