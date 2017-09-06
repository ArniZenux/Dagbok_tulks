<?php
include('connection.php');
include('save_nyttverkefni.php');

$msg = '';

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
           <br>
          <hr>
            <h3>Nýtt verkefni</h3>
             <br>
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
<?php
include('footer.php');
?>