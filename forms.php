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
  

  <title>Contact us(forms)</title>
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
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Types of drawing
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="index10.html">Species and their equipment</a>
            <a class="dropdown-item" href="#">Acrylic (الأكريليك)</a>
            <a class="dropdown-item" href="#">Charcoal (الفحم)</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index4.html">Our showroom</a>
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
    <h6 class="wel">

    </h6>
  </nav>
 
  <main>
    <div class="wrapper">
      <h2>Contact us</h2>
      <div id="error_message"></div>
      <form action="forms.php" method="post"  id="myform" onsubmit="return validate();">
        <div class="input_field">
          <input type="text" placeholder="name" name="name" id="name" >
        </div>
        <div class="custom-control custom-radio">
          <input type="radio" class="custom-control-input" id="customControlValidation2" name="subject radio-stacked" required>
          <label class="custom-control-label" for="customControlValidation2">Complaints</label>
        </div>
        <div class="custom-control custom-radio mb-3">
          <input type="radio" class="custom-control-input" id="customControlValidation3" name="subject radio-stacked" required>
          <label class="custom-control-label" for="customControlValidation3">Suggestions</label>
          <div class="invalid-feedback">More example invalid feedback text</div>
        </div>
        <div class="input_field">
          <input type="text" placeholder="Phone" id="phones" name="phone_number">
        </div>
        <div class="input_field">
          <input type="text" placeholder="Email" id="email" name="email">
        </div>
        <div class="input_field">
          <textarea placeholder="Message" id="message" name="feedback_text"></textarea>
        </div>
        <div class="btn">
          <input type="submit" value="submit" name="send">
          <input type="reset">
        </div>
        </form>
        <?php

// الاتصال بالسيرفر او قاعدة
$host               = "localhost";
$user               = "root";
$password      = "qmKARITI$1997";
$dbName       = "glory";

$conn = mysqli_connect($host, $user, $password,$dbName);




if(isset($conn)){
    echo "yes";
    }
    else{
        echo "ynono";  
    
    }
// ارسال المعلومات المُدخله بواسطة المريض الى قاعدة البيانات

    $glory_Name = $_POST['name'];
    $Phone_number    = $_POST['phone_number'];
    $Email           = $_POST['email'];
    $Subject         = $_POST['subject'];
    $Feedback_text   = $_POST['feedback_text'];
    $Send            = $_POST['send'];


    if($Send){
        $query = "INSERT INTO feedback(name,phone_number,email,subject,feedback_text) VALUE('$glory_Name ' ,'$Phone_number ','$Email ','$Subject ','$Feedback_text ')";
        $result = mysqli_query($conn,$query);
        echo "<p style='color:green'>" . "تم الحجز" . "</p>";
    }
    else{
        echo "<p style='color:red'>" . "عفواً حدث خطأ ما .. حاول مجدد " . "</p>";
    }


?>


     

  </main>
  <footer>
    <div class="container">
    <a class="nav-link" href="admin.php">
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