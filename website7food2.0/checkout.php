<?php
  include 'important/connect.php';

  session_start();

  if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
  }else{
    $user_id = '';
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>
    <div class="heading">
        <h3>Checkout</h3>
        <p><a href="home.php">Home</a><span> / Checkout</span></p>
    </div>
<!-- Checkout -->
<section class="checkout">

    <h1 class="title">order summary</h1>
 
    <form action="" method="post">
       <div class="cart-items">
          <h3>cart items</h3>
          <p><span class="name">delicious pizza 01</span><span class="price">$3</span></p>
          <p><span class="name">main dish 02</span><span class="price">$3</span></p>
          <p><span class="name">delicious dessert 01</span><span class="price">$3</span></p>
          <p class="grand-total"><span class="name">grand total :</span> <span class="price">$9</span></p>
          <a href="cart.php" class="btn">view cart</a>
       </div>
       <div class="user-info">
          <h3>your info</h3>
          <p><i class="fas fa-user"></i> <span>Yureka</span></p>
          <p><i class="fas fa-phone"></i> <span>0819876100</span></p>
          <p><i class="fas fa-envelope"></i> <span>yurekaa@gmail.com</span></p>
          <a href="update_profile.php" class="btn">update info</a>
          <h3>delivery address</h3>
          <p class="address"><i class="fas fa-map-marker-alt"></i> <span>green apartment number 101,bekasi</span></p>
          <a href="update_address.php" class="btn">update address</a>
          <select name="method" class="box" required>
             <option value="" disabled selected>select payment method</option>
             <option value="cash on delivery">CASH</option>
             <option value="credit card">CREDIT CARD</option>
             <option value="paytm">OVO</option>
             <option value="paypal">DANA</option>
             <option value="paypal">GOPAY</option>
             <option value="paypal">SHOPEEPAY</option>
          </select>
       </div>
       <input type="submit" value="place order" name="order" class="btn order-btn">
    </form>
 
 </section>
 
<!-- footer -->
   <?php include 'important/footer.php' ?>

    <script src="food.js"></script>
</body>
</html>