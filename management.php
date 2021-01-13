<?php 

session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: login_admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="resources/css/stylemain.css">
  <link rel="stylesheet" href="resources/css/defaults.css">
  <link rel="stylesheet" href="vendor/css/normalize.css">
  <link rel="stylesheet" href="vendor/css/grid.css">
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Style/defaults.css">
    <link rel="stylesheet" href="Style/bootstrab fix.css">
  <title>Management</title>
</head>
<body>
  <div class="containers">
    <div class="div-12">
      <img src="logo.jpg" alt="" class="img1">
      <a href="index.html" class="link1"> THE-GLORY
      </a>
    </div>
    <div class="div-13"><span class="p1">"Everything you can imagine is real”</span></div>
  </div>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <!-- Brand -->
    <img src="logo.jpg" alt="Logo" class="logog">
    <a class="navbar-brand blogo" href="index1m.php">THE-GLORY</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index2.html">History of art</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index3.html">The famous paintings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index4.php">Species and  equipment</a>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Our showroom 
          </a>
          <div class="dropdown-menu">
          <a class="dropdown-item" href="index10.html">gallery</a>
            <a class="dropdown-item" href="cart_add.php">cornar art</a>
            <a class="dropdown-item" href="index11.php">add picture</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index5.html">Our video</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            More
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index7.html">Jordan and art</a>
            <a class="dropdown-item" href="index8.html">baladk initiative in Jordan</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index6.html">Connect us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="management.php">Manage</a>
        </li>
      </ul>
    </div>
    <?php echo "<h4 style='color:blue; font-size:22px;'> - " . $_SESSION['adminname'] . "</h4>"; ?>
    <a href="logout.php"> <h4 style=' font-size:22px;'> &nbsp; &nbsp; Logout </h4> </a>
  </nav>
  <main>
  
  <div id="container">

<div class="head-txt">
    <h2>Management Glory art</h2>
</div>


<div class="container">
    <div class="row">
        
        <div class="col-md-4 Services-tab item" style="margin-top: 30px;">
            <a href="feedback.php">
            <div class="folded-corner service_tab_1 borRad15">
                <div class="text"> <i class="fas fa-medal fa-5x fa-icon-image"></i>
                    <p class="item-title">
                    <h3> feedback</h3>
                    </p><!-- /.item-title -->
                </div>
            </div>
        </a>
        </div>
        <div class="col-md-4 Services-tab item"  style="margin-top: 30px;">
            <a href="add_pic.php">
            <div class="folded-corner service_tab_1 borRad15">
                <div class="text"> <i class="fas fa-futbol fa-5x fa-icon-image"></i>
                    <p class="item-title">
                    <h3> add picture -admin</h3>
                    </p><!-- /.item-title -->
                </div>
            </div>
        </a>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-4 Services-tab item" style="margin-top: 30px;">
            <a href="https://docs.google.com/spreadsheets/d/1Rv5oz6hztX5Kun9ew2Ng_ih-eAdPniHIzo2S7s-CzrA/edit?usp=sharing" target="_blank" rel="noopener noreferrer">
            <div class="folded-corner service_tab_1 borRad15">
                <div class="text"> <i class="fas fa-medal fa-5x fa-icon-image"></i>
                    <p class="item-title">
                    <h3>Result questionnaire</h3>
                    </p><!-- /.item-title -->
                </div>
            </div>
        </a>
        </div>
        <div class="col-md-4 Services-tab item"  style="margin-top: 30px;">
            <a href="index11.php">
            <div class="folded-corner service_tab_1 borRad15">
                <div class="text"> <i class="fas fa-futbol fa-5x fa-icon-image"></i>
                    <p class="item-title">
                    <h3> add picture -user</h3>
                    
                    </p><!-- /.item-title -->
                </div>
            </div>
        </a>
        </div>
    </div>


     </div>
</div>




      </main>
  <footer>
    <div class="container">
      <span>Copyright &copy;the-glorys 2020</span><br>
      <span>powered by : qusai alkariti</span> 
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>

</html>