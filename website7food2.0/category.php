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
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>
    <h1 class="title">Category</h1>
<!-- Products -->
    <section class="products">
        <div class="box-container">
            <?php
              $category = $_GET['category'];
              $select_products = $conn->prepare("SELECT * FROM `products` WHERE category = ?");
              $select_products->execute([$category]);
              if($select_products->rowCount() > 0){
                while($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)){

                
            ?>
            <form action="" method="post" class="box">
               <input type="hidden" name="pid" value="<?= $fetch_products['id']; ?>">
               <input type="hidden" name="name" value="<?= $fetch_products['name']; ?>">
               <input type="hidden" name="price" value="<?= $fetch_products['price']; ?>">
               <input type="hidden" name="image" value="<?= $fetch_products['image']; ?>">
               <a href="quick_view.php?pid=<?= $fetch_products['id']; ?>" class="fas fa-eye"></a>
               <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
               <img src="uploaded_img/<?= $fetch_products['image']; ?>" alt="" class="image">
               <div class="name"><?= $fetch_products['name']; ?></div>
               <div class="flex">
                  <div class="price"><span>$</span><?= $fetch_products['price']; ?></div>
                  <input type="number" name="qty" class="qty" min="1" max="99" value="1" maxlength="2">
                </div>
            </form>
            <?php
                } 
              }else{
                echo '<p class="empty">no products added yet!</p>';
              }
            ?>
        <div class="more-btn">
            <a href="menu.php" class="btn">View all</a>
        </div>
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