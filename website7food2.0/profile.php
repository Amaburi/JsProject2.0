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
    <title>Profile</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
   <?php include 'important/user_header.php' ?>

   <section class="user-profile">
    <div class="box">
      <img src="images/user-icon.png" alt="">
      <p><i class="fas fa-user"></i><span><?= $fetch_profile['name']; ?></span></p>
      <p><i class="fas fa-envelope"></i><span><?= $fetch_profile['email']; ?></span></p>
      <p><i class="fas fa-phone"></i><span><?= $fetch_profile['number']; ?></span></p>
      <a href="update_profile.php" class="btn">Update Profile</a>
      <p><i class="fas fa-map-marker-alt"></i><span><?php if($fetch_profile['address'] ==''){echo 'Please Enter Your Address!';}else{echo $fetch_profile['address'];}; ?></span></p>
      <a href="update_address.php" class="btn">Update Address</a>
    </div>
   </section>
<!-- footer -->
   <?php include 'important/footer.php' ?>

    <script src="food.js"></script>
</body>
</html>