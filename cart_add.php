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
  <link rel="stylesheet" href="resources/css/style1.css">
  <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,700&display=swap" rel="stylesheet">




  <style>
    .alb img {
        width: 100% !important;
        height: 100px !important;
        object-fit: contain
    }

    h3 {
        text-align: center;
        white-space: nowrap
    }

    h6 {
        text-align: center
    }
    </style>
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

<div class="container">
    <h1>PRODUCTS</h1>
	
    <!-- Cart basket -->
    <div class="cart-view">
        <a href="viewCart.php" title="View Cart"><i class="icart"></i> (<?php echo ($cart->total_items() > 0)?$cart->total_items().' Items':'Empty'; ?>)</a>
    </div>
    
    <!-- Product list -->
    <div class="row col-lg-12">
      
<?php

$sql = "SELECT * FROM products ORDER BY id DESC";
$result = mysqli_query($mysqli, $sql); 
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {  ?>
<div class="col-md-3 text-center mt-5 alb form-group">
<img src="uploads/<?=$row['image_url']?>">
    <h3><?php echo $row['name']?></h3>
    <h6>Price: <?php echo $row['price']?></h6>
    <p class="card-text"><?php echo $row["description"]; ?></p>
    <div class="form-group">
    <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary">Add to Cart</a>
    </div>
    </div>
</div>

        <?php } }else{ ?>
        <p>Product(s) not found.....</p>
        <?php } ?>
    </div>
</div>
</body>
</html>