<?php
include('connection.php');
include('header.php');
?>
<body>
<?php
include('navbar.php');
?>
    <div class="container">
       <div class="form_home">
          <h1>Umsjónarsvæði túlkaþjónustu</h1>
          <hr>
          <h3>Verkefnalisti</h3>
          <table class="table">
                 <thead>
                   <tr>
                      <th>Nr</th>
                      <th>Verkefni</th>
                      <th>Dagur</th>
                      <th>Staður</th>
                      <th>Byrja</th>
                      <th>Endir</th>
                      <th>Vettangur</th>
                    </tr>
                  </thead>
                <tbody>
                <?php
                    $sql = "SELECT tblVerkefni.Nr, tblVerkefni.Heiti, tblVerkefni.Dagur, tblVerkefni.Stadur, tblVerkefni.Tima_byrja, tblVerkefni.Tima_endir, tblVerkefni.Vettvangur FROM tblVerkefni ORDER BY tblVerkefni.Nr DESC;";
                    $result = mysqli_query($conn,$sql);

                      if(!$result){
                        echo 'ekki samband';
                      }

                      while( $row = mysqli_fetch_array($result) ){
                        echo '<tr class="active">';
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
           	<!--<table class="table">
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
                       <td>1</td>
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
              -->
       </div>
    </div>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="node_modules/jquery-tabledit/jquery.tabledit.min.js"></script>
<?php
  include('footer.php');
?>
