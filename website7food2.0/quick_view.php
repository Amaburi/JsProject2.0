<?php
  include 'important/connect.php';

  session_start();

  if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
  }else{
    $user_id = '';
  }
  include 'important/add_cart.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>
    <section class="quick-view">
        <h1 class="title">Quick View</h1>
        <?php
              $pid = $_GET['pid']; 
              $select_products = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
              $select_products->execute([$pid]);
              if($select_products->rowCount() > 0){
                while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){

                
            ?>
            <form action="" method="post" class="box">
               <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
               <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
               <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
               <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
               <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="">
               <a href="category.php?category=<?= $fetch_products['category']; ?>" class="cat"><?= $fetch_products['category']; ?></a>
               <div class="name"><?= $fetch_products['name']; ?></div>
               <div class="flex">
                  <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
                  <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                </div>
                <button type="submit" name="add_to_cart" class="cart-btn">Add To Cart</button>
            </form>
            <?php
                } 
              }else{
                echo '<p class="empty">no products added!</p>';
              }
            ?>
        <div class="more-btn">
            <a href="menu.php" class="btn">View all</a>
        </div>
            
    </section>
    </section>
<!-- footer -->
   <?php 
     include 'important/footer.php';
   ?>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="food.js"></script>
    <script>

        var swiper = new Swiper(".home-slider", {
           loop:true,
           grabCursor:true,
                    spaceBetween: 20,
           pagination: {
              el: ".swiper-pagination",
           },
        });
        
    </script>
</body>
</html>