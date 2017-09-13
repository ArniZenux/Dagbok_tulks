<?php
//session_start();
include('connection.php');
include('sava_newtulkur.php');

$msg = '';

if(isset($_POST['submit-new'])){
   $Kennitala  = $_POST['Kennitala'];
   $Fulltnafn  = $_POST['Fulltnafn'];
   $Simi       = $_POST['Simi'];
   $Netfang    = $_POST['Netfang'];
   
   $sql = "INSERT INTO tblTulkur(Kt, Nafn, Simi, Netfang) VALUES('$Kennitala','$Fulltnafn','$Simi','$Netfang');";
 
   $result = mysqli_query($conn,$sql);
   if ($result){
      $msg = '<br>Vista!';
   }
   else{
     $msg = '<br>Mistók!';
   }
 }
 $conn->close(); 

include('header.php');
?>
<body onload="viewData()">
<?php
include('navbar.php');
?>
  <div class="container">
     <div class="form_home">
       <h1>Umsjónarsvæði túlkaþjónustu</h1>
        <hr>
          <h3>Táknmálstúlkur</h3>
            <table id="tabledit" class="table table-striped">
              <thead>
                <tr>
                  <th>Kennitala</th>
                  <th>Nafn</th>
                  <th>Símanúmer</th>
                  <th>Netfang</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table> 
           <br>
        <!--<hr>
         <h3>Skrá nýr túlk</h3>
           <br>
              <form method="POST" action="">
                 <div class="top-row">
                      <div class="field-wrap">
                        <label>
                          Kennitala<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="Kennitala">
                      </div>
                      <div class="field-wrap">
                        <label>
                         Fullt nafn<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="Fulltnafn">
                      </div>
                  </div>
                  <div class="top-row">
                     <div class="field-wrap">
                        <label>
                          Simi<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="Simi">
                     </div>
                     <div class="field-wrap">
                        <label>
                         Netfang<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="Netfang">
                     </div>
                  </div>
                  <button type="submit" class="button button-block" name="submit-new">Skrá</button>
                  <?php
                     echo $msg;
                  ?>
            </form>
          -->
       </div>
    </div>

  <!-- Javascript - Jquery core --> 
   <script src="js/index.js"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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
        url: 'sava_newtulkur.php',
        columns: {
                   identifier: [0, 'id'],
                   editable: [[1, 'nickname'], [2, 'firstname'], [3, 'lastname']]
        }
       });
    }
  </script>
<?php
  include('footer.php');
?>