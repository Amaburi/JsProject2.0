<?php
  @include 'important/connect.php';
  session_start();
  if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
  }else{
    $user_id = '';
  }
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);

    $select_users =  $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
    $select_users->execute([$email, $pass]);
    $row = $select_users->fetch(PDO::FETCH_ASSOC);

    if($select_users->rowCount() > 0){
        $_SESSION['user_id'] = $row['id'];
        header('location:home.php');
    }else{
        $message[] = 'incorrect email or password';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/blog.css">


</head>
<body>
    <?php include 'important/user_header.php' ?>

    <section class="form-container">
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required
            maxlength="50" class="box">
            <input type="password" name="pass" placeholder="Enter your password" required
            maxlength="20" class="box">   
            <input type="submit" value="Login now..." name="submit" class="btn">
        </form>
    </section>

<script src="js/blog.js"></script>
</body>
</html>