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
    <title>Order</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>
    <div class="heading">
        <h3>Orders</h3>
        <p><a href="home.html">Home</a><span> / Orders</span></p>
    </div>
<!-- orders -->
    <section class="orders">
        <h1 class="title">Your Order</h1>
        <div class="box-container">
            <div class="box">
                <p>Order At : <span>14-08-2029</span></p>
                <p>Name : <span>Yureka</span></p>
                <p>Number : <span>0819891008</span></p>
                <p>Email : <span>yurekaa@gmail.com</span></p>
                <p>Address : <span>green apartment number 101,bekasi</span></p>
                <p>Your Order : <span>- main dish 1 (4) - Pizza 1 (1) - dessert 1 (2)</span></p>
                <p>Payment Method : <span>Cash</span></p>
                <p>Payment Status : <span style="color:var(--red);">Pending</span></p>
            </div>

            <div class="box">
                <p>Order At : <span>14-08-2029</span></p>
                <p>Name : <span>Yureka</span></p>
                <p>Number : <span>0819891008</span></p>
                <p>Email : <span>yurekaa@gmail.com</span></p>
                <p>Address : <span>green apartment number 101,bekasi</span></p>
                <p>Your Order : <span>- main dish 1 (4) - Pizza 1 (1) - dessert 1 (2)</span></p>
                <p>Payment Method : <span>Cash</span></p>
                <p>Payment Status : <span style="color:var(--red);">Pending</span></p>
            </div>
        </div>
    </section>
<!-- footer -->
   <?php include 'important/footer.php' ?>

    <script src="food.js"></script>
</body>
</html>