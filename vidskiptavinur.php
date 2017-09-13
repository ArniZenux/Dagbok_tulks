<?php
include('connection.php');
include('save_nyrvidskiptavinur.php');

$msg = '';

if(isset($_POST['submit-new'])){
    $Kennitala  = $_POST['Kennitala'];
    $Fulltnafn  = $_POST['Fulltnafn'];
    $Simi       = $_POST['Simi'];
    
    $sql = "INSERT INTO tblVidskiptavinur(Kt, Nafn, Simi) VALUES('$Kennitala','$Fulltnafn','$Simi');";
  
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
          <br>
         <hr>
          <h3>Nýr viðskiptavinur</h3>
           <br>
            <div class="top-row">
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
                         Nafn<span class="req">*</span>
                        </label>
                        <input type="text" required autocomplete="off" name="Fulltnafn">
                       </div>
                  </div>
                     <div class="field-wrap">
                      <label>
                        Símanúmer<span class="req">*</span>
                      </label>
                      <input type="text" required autocomplete="off" name="Simi">
                    </div>
                  <button type="submit" class="button button-block" name="submit-new">Skrá</button>
              <?php
                echo $msg;
              ?>
          </form>
    </div>
  </div>
  <script src="js/index.js"></script>
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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
                   editable: [[1, 'Kennitala'], [2, 'Fullt nafn'], [3, 'Símanúmer']]
        }
       });
    }
   </script>
<?php
include('footer.php');
?>