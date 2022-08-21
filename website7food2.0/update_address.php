<?php
  include 'important/connect.php';

  session_start();

  if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
  }else{
    $user_id = '';
  }
  if(isset($_POST['submit'])){

    $address = $_POST['flat'] .', '.$_POST['building'].', '.$_POST['area'].', '.$_POST['town'] .', '. $_POST['city'] .', '. $_POST['state'] .', '. $_POST['country'] .' - '. $_POST['pin_code'];
    $address = filter_var($address, FILTER_SANITIZE_STRING);
 
    $update_address = $conn->prepare("UPDATE `users` set address = ? WHERE id = ?");
    $update_address->execute([$address, $user_id]);
 
    $message[] = 'address saved!';
 
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Address</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="stylesheet" href="food.css">
</head>
<body>
    <!-- Header -->
    <?php include 'important/user_header.php' ?>

    <section class="form-container">
      <form action="" method="POST">
        <hn>Set Your Adress</hn>
        <input type="text" name="flat" maxlength="50" required placeholder="Flat no." class="box">
        <input type="text" name="building" maxlength="50" required placeholder="Building no." class="box">
        <input type="text" name="area" maxlength="50" required placeholder="Area Name" class="box">
        <input type="text" name="town" maxlength="50" required placeholder="Town Name" class="box">
        <input type="text" name="city" maxlength="50" required placeholder="City Name" class="box">
        <input type="text" name="state" maxlength="50" required placeholder="State Name" class="box">
        <input type="text" name="country" maxlength="50" required placeholder="Country Name" class="box">
        <input type="number" name="pin_code" required  class="box" maxlength="6" placeholder="Enter Your Code Pos">
        <input type="submit" value="Save Adress" name="submit" class="btn">
      </form>
    </section>
<!-- footer -->
    <?php include 'important/footer.php' ?>

    <script src="food.js"></script>
</body>
</html>