<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="vendor/css/normalize.css">
  <link rel="stylesheet" href="vendor/css/grid.css">
  <link rel="stylesheet" href="resources/css/style9.css">
  <link rel="stylesheet" href="resources/css/stylemain.css">
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">

  <title>Suggestions and complaints(forms)</title>
  <script src="resources/js/script2.js"></script>
</head>

<body>
  <div class="containers">
    <div class="div-12">
      <img src="logo.jpg" alt="" class="img1">
      <a href="index1.html" class="link1"> THE-GLORY
      </a>
    </div>
    <div class="div-13"><span class="p1">"Everything you can imagine is real”</span></div>
  </div>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
    <!-- Brand -->
    <img src="logo.jpg" alt="Logo" class="logog">
    <a class="navbar-brand blogo" href="index1.html">THE-GLORY</a>
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
          <a class="nav-link" href="index10.html">Species and  equipment</a>
        </li>
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Our showroom 
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index4.html">gallery</a>
            <a class="dropdown-item" href="#">add pic</a>
            <a class="dropdown-item" href="#">cornar art</a>
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
          <a class="nav-link" href="index6.html">Contact us</a>
        </li>

      </ul>
    </div>

  </nav>
  <main>
    <div class="wrapper">
      <h2>Contact us</h2>
      <div id="error_message"></div>
      <form id="myform" onsubmit="return validate();" action="Suggestions and complaints.php" method="POST">
        <div class="input_field">
          <input type="text" placeholder="Name" id="name" name="name">
        </div>
        <div class="input_field">
          <div class="custom_select" >
            <select  class="input_field"  id="subject" name="subject">
              <option value="0" >Select ...</option>
              <option value="Suggestions">Suggestions</option>
              <option value="Complaints">Complaints</option>
            </select>
          </div>
          </div> 
        <div class="input_field">
          <input type="text" placeholder="Phone" id="phone" name="phone_number">
        </div>
        <div class="input_field">
          <input type="text" placeholder="Email" id="email" name="email">
        </div>
        <div class="input_field">
          <textarea placeholder="Message" id="message" name="feedback_text"></textarea>
        </div>
        <div class="btn">
          <input type="submit" name="send">
          <input type="reset">
        </div>
        <?php
include 'db.inc.php';


 if(isset($_POST['send'])){
    $query = "INSERT INTO feedback(name,phone_number,email,subject,feedback_text) VALUE('$_POST[name] ' ,'$_POST[phone_number]','$_POST[email]','$_POST[subject] ','$_POST[feedback_text]')";
    $result = mysqli_query($mysqli,$query);
    echo "<p style='color:green; font-size:26px;'>" . "-تم الأرسال بنجاح , شكراً لك-" . "</p>";
    
 
}
else{
    echo "<p style='color:red'>" . "عفواً .. يرجى تعبأة النموذج  " . "</p>";
};
?>
      </form>



  </main>
  <footer>
    <div class="container">
      <a href="admin.php">
      <span>Copyright &copy;the-glorys 2020</span><br>
      <span>powered by : qusai alkariti</span></a>
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