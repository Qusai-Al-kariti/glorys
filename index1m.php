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
  <link rel="stylesheet" href="resources/css/style1.css">
  <link rel="stylesheet" href="vendor/css/normalize.css">
  <link rel="stylesheet" href="vendor/css/grid.css">
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="Style/bootstrab fix.css">
  <title>home</title>
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

    <div class="said1">
      <div class="timeing" >
      <span id="temo"></span>
    </div>
    <div class="segs">
      <img src="resources/img/seg.png" alt="seg" class="seg">
      <h5>Suggestions and complaints....</h5>
      <a href="Suggestions and complaints.php" data-toggle="tooltip">
        <button class="btn btn-primary btn-lg h4crsl"><i class="fas fa-paw"></i> click here</button></a>
      </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="resources/img/Mona-Lisa1.jpg" class="d-block w-100" alt="...">
          <div class="d-md-block  txtcrsl">
            <h4>موناليزا (وأشهر اللوحات)</h4>
            <a href="index3.html">
              <button class="btn btn-primary btn-lg h4crsl"><i class="fas fa-paw"></i> أعرف المزيد</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="resources/img/dartalfunon12.jpg" class="d-block w-100" alt="...">
          <div class="d-md-block  txtcrsl">
            <h4>(دار الفنون(الاردن -جبل اللويبدة</h4>
            <a href="index7.html">
              <button class="btn btn-primary btn-lg h4crsl"><i class="fas fa-paw"></i> أعرف المزيد</button></a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="resources/img/acrylic12.jpg" class="d-block w-100" alt="...">
          <div class="d-md-block txtcrsl">
            <h4> الرسم بالأكريلك (خصائص ومزايا)</h4>
            <a href="index4.php">
              <button class="btn btn-primary btn-lg h4crsl"><i class="fas fa-paw"></i> أعرف المزيد</button></a>
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="who-are-we1">
      <h1>من نحن ؟</h1>
      <p>يعد الفن عامة نتاجاً أبداعياً , لا يجسد حقيقة الثقافة بدلالتها المسطحة و بُعدها الأتي العابر ؛ أنما يعبر عن
        أمال الأنسان وطموحاته وتطلعاته ، وأكثر من ذلك أنه يعبر عن فلسفة وجوده في الحياة وعليه فأنه يتخطى كونه مجرد ضرورة
        حياتية للأنسان مثل الماء والهواء ليحقق معنى أعظم وأشمل .
        من هنا قررنا نحن مجموعة من محببي الرسم صناعة هذا الموقع للمهتمين بهذا الفن الأبداعي لنضع به بعض المعلومات منها
        تاريخ الرسم والمعارض الفنية ولوحات تاريخية ومواضيع تعليمية للرسم كما وثقنا ذلك ببعض الرسومات والفيديوهات .
       <p>"فأهلاً بكم معنا متمنين لكم الأستفادة "</p> 
      </p>
    </div>

    <div class="last_div">
      <h1 class="videow">فيديوهات تعليمية*</h1>
      <iframe src="https://www.youtube.com/embed/2yzgMhPENpE" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
        <h1 class="videow">
        <a href="index5.html">
          <button class="btn btn-primary btn-lg h4crsl"><i class="fas fa-paw"></i> أضغط هنا </button></a> لمشاهدة المزيد*</h1>
      
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
  <script src="resources/js/script1.js"></script>

</body>

</html>