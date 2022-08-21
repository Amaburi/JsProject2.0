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
    <title>Search</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>
    <!-- Search -->
    <div class="heading">
        <h3>Search</h3>
        <p><a href="home.html">Home</a><span> / Search</span></p>
    </div>
    <section class="search-form">
        <form action="" method="post">
            <input type="text" name="search_box" placeholder="Search Here....." class="box">
            <button type="submit" name="search_btn" class="fas fa-search"></button>
        </form>
    </section>
    <section class="products" style="min-height: 100vh; padding-top:0;"></section>
<!-- footer -->
  <?php include 'important/footer.php' ?>

    <script src="food.js"></script>
</body>
</html>