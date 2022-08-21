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
    <title>Contact</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>
    <div class="heading">
        <h3>Contact</h3>
        <p><a href="home.php">Home</a><span> / Contact</span></p>
    </div>
<!-- Contact -->
    <section class="contact">
        <div class="row">
            <div class="image">
                <img src="images/contact-img.svg" alt="">
            </div>

            <form action="" method="post">
                <h3>Get In Touch</h3>
                <input type="text" name="name" class="box" maxlength="50" placeholder="enter your name" required>
                <input type="number" name="number" class="box" min="0" maxlength="12" placeholder="enter your number" required onkeypress="if(this.value.length == 10) return false;">
                <input type="email" name="email" class="box" maxlength="50" placeholder="enter your email" required>
                <textarea name="msg" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
                <input type="submit" value="Send Message" name="send" class="btn">
            </form>
        </div>
    </section>
<!-- footer -->
  <?php include 'important/footer.php' ?>

    <script src="food.js"></script>
</body>
</html>