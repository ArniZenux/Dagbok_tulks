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
       </div>
    </div>
<?php
  include('footer.php');
?>
