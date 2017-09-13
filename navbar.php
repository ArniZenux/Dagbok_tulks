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
          <a class="navbar-brand" href="admin.php">Heima</a>
          </div>
        <!-- <div id="navbar" class="collapse navbar-collapse">  --> 
          <ul class="nav navbar-nav navbar-right">
            <!--<li class="active"><a href="#">Heima</a></li>-->
            <!--<li><a href="verkefni.php">Verkefni</a></li>-->
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Verkefni <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="admin.php">Skoða listi</a></li>
                <li><a href="admin.php">Skoða túlkaverkefni</a></li>
                <li><a href="nytt_verkefni.php">Skrá nýtt verkefni</a></li>
                <li><a href="verkefni.php">Breyta / Eyða</a></li>
              </ul>
            </li>
            <!--<li><a href="tulkur.php">Táknmálstúlkur</a></li>-->
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Táknmálstúlkur <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="tulkur.php">Skoða listi</a></li>
                <li><a href="#">Skrá nýr táknmálstúlk</a></li>
                <li><a href="#">Breyta / Eyða</a></li>
              </ul>
            </li>
            <!--<li><a href="vidskiptavinur.php">Viðskiptavinur</a></li>-->
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Viðskiptavinur <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="vidskiptavinur.php">Skoða listi</a></li>
                <li><a href="#">Skrá nýr viðskiptavin</a></li>
                <li><a href="#">Breyta / Eyða</a></li>
              </ul>
            </li>
            <li><a href="#">Greiðsla</a></li>
            <li><a href="#">Tölfræði</a></li>

            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>   Útskrá</a></li>
          </ul>
      </div>
</nav>