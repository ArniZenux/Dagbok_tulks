<?php
//include('connection.php');
include('save_nyttverkefni.php');

/*if(isset($_POST['submit-new'])){
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
*/
include('header.php'); 
?>
<body onload="viewData()">

<?php
include('navbar.php');
?>  
<br><br>
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
              <tbody></tbody>
           </table> 
     </div>
   </div>
 
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
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
        eventType: 'dblclick',
        editButton: true,
        deleteButton: true,
        columns: {
              identifier: [0, 'Nr'],
              editable: [[1, 'Heiti'], [2, 'Stadur'], [3, 'Dagur'],[4, 'Tima_byrja'],[5, 'Tima_endir'],[6,'Vettvangur']]
        },     
        onSuccess: function(data, textStatus, jqXHR) {
            viewData()
        },
        onFail: function(jqXHR, textStatus, errorThrown) {
            console.log('onFail(jqXHR, textStatus, errorThrown)');
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        },
        onAjax: function(action, serialize) {
            console.log('onAjax(action, serialize)');
            console.log(action);
            console.log(serialize); 
        } 
       });
    }
  </script>
<?php
include('footer.php');
?>