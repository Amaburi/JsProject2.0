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
    <title>About</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>
    <div class="heading">
        <h3>About us</h3>
        <p><a href="home.php">Home</a><span> / About</span></p>
    </div>
<!-- About -->
    <section class="about">
        <div class="row">
            <div class="image">
                <img src="images/about-img.svg" alt="">
            </div>

            <div class="content">
                <h3>Why Choose us?</h3>
                <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                <a href="menu.php" class="btn">Our Menu</a>
            </div>
        </div>
    </section>
<!-- Steps -->
    <section class="steps">
        <h1 class="title">Simple Steps</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/step-1.png" alt="">
                <h3>Choose Order</h3>
                <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
            </div>
            <div class="box">
                <img src="images/step-2.png" alt="">
                <h3>Fast Delivery</h3>
                <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
            </div>
            <div class="box">
                <img src="images/step-3.png" alt="">
                <h3>Enjoy Food</h3>
                <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
            </div>
        </div>
    </section>
<!-- Reviews -->
    <section class="reviews">
        <h1 class="title">Customer's Reviews</h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">


                <div class="swiper-slide slide">
                    <img src="images/Max Verstappen Red Bull Wallpaper.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Verstappen</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/olsen_org.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Olsen</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/Saerom.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Saerom</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/jeongyeon.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Jeongyeon</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/perez.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Checo</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/MJ.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>MJ</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/hamilton.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Hamilton</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/butler.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Butler</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/cr7.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Ronaldo</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/maguire.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Maguire</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/jihyo.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Jihyo</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/chaeryeong.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Chaeryeong</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/nayeon.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Nayeon</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/ryujin.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Ryujin</h3>
                </div>
                <div class="swiper-slide slide">
                    <img src="images/yeji.jpg" alt="">
                    <p>We're no strangers to love You know the rules and so do I A full commitment's what I'm thinking of You wouldn't get this from any other guy I just wanna tell you how I'm feeling Gotta make you understand.</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <h3>Yeji</h3>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
<!-- footer -->
  <?php include 'important/footer.php' ?>
   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="food.js"></script>
    <script>

        var swiper = new Swiper(".reviews-slider", {
           loop:true,
           grabCursor:true,
                    spaceBetween: 20,
           pagination: {
              el: ".swiper-pagination",
           },
           breakpoints: {
              550: {
                slidesPerView: 1,
              },
              768: {
                slidesPerView: 2,
              },
              1024: {
                slidesPerView: 3,
              },
           },
        });
        
    </script>
</body>
</html>