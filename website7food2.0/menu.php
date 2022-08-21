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
    <title>Menu</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>
    <div class="heading">
        <h3>Menu</h3>
        <p><a href="home.php">Home</a><span> / Menu</span></p>
    </div>
<!-- Menu -->
    <section class="menu">
        <section class="products">
            <h1 class="title">Menus</h1>
            <div class="box-container">
                <form action="" method="post" class="box">
                    <button type="submit" class="fas fa-eye" name="quick_view"></button>
                    <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                    <img src="uploaded_img/burger-1.png" alt="">
                    <a href="#" class="cat">Fast Food</a>
                    <div class="name">Cheesy Burger 01</div>
                    <div class="flex">
                        <div class="price"><span>$</span>4</div>
                        <input type="number" name="qty" id="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                    </div>
                </form>
    
                <form action="" method="post" class="box">
                    <button type="submit" class="fas fa-eye" name="quick_view"></button>
                    <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                    <img src="uploaded_img/dish-1.png" alt="">
                    <a href="#" class="cat">Main Dishes</a>
                    <div class="name">Spaghetti bolognese</div>
                    <div class="flex">
                        <div class="price"><span>$</span>6</div>
                        <input type="number" name="qty" id="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                    </div>
                </form>
    
                <form action="" method="post" class="box">
                    <button type="submit" class="fas fa-eye" name="quick_view"></button>
                    <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                    <img src="uploaded_img/dessert-1.png" alt="">
                    <a href="#" class="cat">Dessert</a>
                    <div class="name">Strawberry Foam</div>
                    <div class="flex">
                        <div class="price"><span>$</span>2</div>
                        <input type="number" name="qty" id="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false">
                    </div>
                </form>
    
                <form action="" method="post" class="box">
                    <button type="submit" class="fas fa-eye" name="quick_view"></button>
                    <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                    <img src="uploaded_img/burger-2.png" alt="">
                    <a href="#" class="cat">Fast Food</a>
                    <div class="name">Cheesy Burger 02</div>
                    <div class="flex">
                        <div class="price"><span>$</span>4</div>
                        <input type="number" name="qty" id="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                    </div>
                </form>
                <form action="" method="post" class="box">
                    <button type="submit" class="fas fa-eye" name="quick_view"></button>
                    <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                    <img src="uploaded_img/dish-4.png" alt="">
                    <a href="#" class="cat">Main Dishes</a>
                    <div class="name">Steak</div>
                    <div class="flex">
                        <div class="price"><span>$</span>5</div>
                        <input type="number" name="qty" id="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                    </div>
                </form>
    
                <form action="" method="post" class="box">
                    <button type="submit" class="fas fa-eye" name="quick_view"></button>
                    <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                    <img src="uploaded_img/pizza-1.png" alt="">
                    <a href="#" class="cat">Main Dishes</a>
                    <div class="name">Pizza 01</div>
                    <div class="flex">
                        <div class="price"><span>$</span>8</div>
                        <input type="number" name="qty" id="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                    </div>
                </form>
    
                <form action="" method="post" class="box">
                    <button type="submit" class="fas fa-eye" name="quick_view"></button>
                    <button type="submit" class="fas fa-shopping-cart" name="add_to_cart"></button>
                    <img src="uploaded_img/pizza-2.png" alt="">
                    <a href="#" class="cat">Main Dishes</a>
                    <div class="name">Pizza 02</div>
                    <div class="flex">
                        <div class="price"><span>$</span>10</div>
                        <input type="number" name="qty" id="qty" min="1" max="99" value="1" onkeypress="if(this.value.length == 2) return false;">
                    </div>
                </form>
            </div>
            <div class="more-btn">
                <a href="menu.php" class="btn">View all</a>
            </div>
        </section>
    </section>
<!-- footer -->
  <?php include 'important/footer.php' ?>

    <script src="food.js"></script>
</body>
</html>