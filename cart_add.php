<?php 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// Include the database config file 
require_once 'dbConfig.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>PHP Shopping Cart</title>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="resources/css/stylemain.css">
  <link rel="stylesheet" href="vendor/css/normalize.css">
  <link rel="stylesheet" href="vendor/css/grid.css">
<link rel="stylesheet" href="resources/css/cart.css">
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">

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
      </ul>
    </div>
  </nav>
  <main>

    <h1>PRODUCTS</h1>
    <div class="cart-view">
        <a href="viewCart.php" title="View Cart"><i class="icart"></i> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':'Empty'; ?>)</a>
      </div>
      <div class="flex-container">  
<?php
$sql = "SELECT * FROM products ORDER BY id DESC";
$result = mysqli_query($mysqli, $sql); 
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {  ?>

<img class="img-thumbnail alb" src="uploads/<?=$row['image_url']?>">
    <h3><?php echo $row['name']?></h3>
    <h6>Price: <?php echo $row['price']?></h6>
    <p class="card-text"><?php echo $row["description"]; ?></p>
    <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary">Add to Cart</a>
 
        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
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