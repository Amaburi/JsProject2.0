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
    <title>Cart</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>
    <div class="heading">
        <h3>Cart</h3>
        <p><a href="home.php">Home</a><span> / Cart</span></p>
    </div>

    <section class="products">
        <h1 class="title">Your Cart</h1>
        <div class="cart-total">
            <p>Cart Total : <span>$0</span></p>
            <a href="checkout.php" class="btn">CheckOut</a>
        </div>
        <div class="box-container">
            <form action="" method="post" class="box">
                <button type="submit" class="fas fa-eye" name="quick_view"></button>
                <button type="submit" class="fas fa-times" name="delete" onclick="return confirm('delete this item?');"></button>
                <img src="uploaded_img/burger-1.png" alt="">
                <div class="name">Cheesy Burger 01</div>
                <div class="flex">
                    <div class="price"><span>$</span>4</div>
                    <input type="number" name="qty" id="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                    <button type="submit" class="fas fa-edit"></button>
                </div>
                <div class="sub-total">Sub total: <span>$0</span></div>
            </form>
        </div>
        <div class="more-btn">
            <form action="" method="post">
                <button type="submit" class="delete-btn" name="delete_all" onclick="return confirm('delete all items?');">Delete All</button>

            </form>
        </div>
    </section>
<!-- footer -->
   <?php include 'important/footer.php' ?>

    <script src="food.js"></script>
</body>
</html>