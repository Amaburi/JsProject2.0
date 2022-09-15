<?php
  @include 'important/connect.php';
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

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/blog.css">


</head>
<body>
    <?php include 'important/user_header.php' ?>

<section class="home-grid">

   <div class="box-container">

      <div class="box">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
               $count_user_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
               $count_user_comments->execute([$user_id]);
               $total_user_comments = $count_user_comments->rowCount();
               $count_user_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
               $count_user_likes->execute([$user_id]);
               $total_user_likes = $count_user_likes->rowCount();
         ?>
         <p> welcome <span><?= $fetch_profile['name']; ?></span></p>
         <p>total comments : <span><?= $total_user_comments; ?></span></p>
         <p>posts liked : <span><?= $total_user_likes; ?></span></p>
         <a href="update.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="user_likes.php" class="option-btn">likes</a>
            <a href="user_comments.php" class="option-btn">comments</a>
         </div>
         <?php
            }else{
         ?>
            <p class="name">login or register!</p>
            <div class="flex-btn">
               <a href="login.php" class="option-btn">login</a>
               <a href="register.php" class="option-btn">register</a>
            </div> 
         <?php
          }
         ?>
      </div>

      <div class="box">
         <p>categories</p>
         <div class="flex-box">
            <a href="category.php?category=nature" class="links">nature</a>
            <a href="category.php?category=education" class="links">education</a>
            <a href="category.php?category=business" class="links">business</a>
            <a href="category.php?category=travel" class="links">travel</a>
            <a href="category.php?category=news" class="links">news</a>
            <a href="category.php?category=gaming" class="links">gaming</a>
            <a href="category.php?category=sports" class="links">sports</a>
            <a href="category.php?category=design" class="links">design</a>
            <a href="category.php?category=fashion" class="links">fashion</a>
            <a href="category.php?category=persional" class="links">persional</a>
            <a href="all_category.php" class="btn">view all</a>
         </div>
      </div>

      <div class="box">
         <p>authors</p>
         <div class="flex-box">
         <?php
            $select_authors = $conn->prepare("SELECT DISTINCT name FROM `admin` LIMIT 10");
            $select_authors->execute();
            if($select_authors->rowCount() > 0){
               while($fetch_authors = $select_authors->fetch(PDO::FETCH_ASSOC)){ 
         ?>
            <a href="author_posts.php?author=<?= $fetch_authors['name']; ?>" class="links"><?= $fetch_authors['name']; ?></a>
            <?php
            }
         }else{
            echo '<p class="empty">Author not found!</p>';
         }
         ?>  
         <a href="authors.php" class="btn">view all</a>
         </div>
      </div>

   </div>

</section>

<section class="posts-grid">
  <h1 class="heading">Latest Posts</h1>

 <div class="box-container">
   <?php 
     $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE status = ? LIMIT 6");
     $select_posts->execute(['active']);
     if($select_posts->rowCount() > 0){
       while($fetch_posts = $select_posts->fetch(PDO::FETCH_ASSOC)){

        $post_id = $fetch_posts['id'];

        $count_post_comments = $conn->prepare("SELECT * FROM `comments` WHERE post_id = ?");
        $count_post_comments->execute([$post_id]);
        $total_post_comments = $count_post_comments->rowCount();

        $count_post_likes = $conn->prepare("SELECT * FROM `likes` WHERE post_id = ?");
        $count_post_likes->execute([$post_id]);
        $total_post_likes = $count_post_likes->rowCount();
     
   ?>
   <form action="" method="POST" class="box">
     <input type="hidden" name="post_id" value="<?= $post_id; ?>">
     <input type="hidden" name="admin_id" value="<?= $fetch_posts['admin_id']; ?>">
     <div class="admin">
        <i class="fas fa-user"></i>
        <div class="admin-info">
           <a href="author_posts.php?author=<?= $fetch_posts['name']; ?>"><?= $fetch_posts['name']; ?></a>
           <p><?= $fetch_posts['date']; ?></p>
        </div>
     </div>
     <?php 
       if($fetch_posts['image'] != ''){

     ?>
     <img src="uploaded_img/<?= $fetch_posts['image']; ?>" class="image" alt="">
     <?php 
       }
     ?>
     <a href="view_post.php?post_id=<?= $post_id; ?>" class="inline-btn">Read More</a>
     <a href="category.php?category=<?= $fetch_posts['category']; ?>" class="category"><i class="fas fa-tag"><span><?= $fetch_posts['category']; ?></span></i></a>

     <div class="icons">
       <a href="view_post.php?post_id=<?= $post_id; ?>"><i class="fas fa-comment"></i><span><?= $total_post_comments; ?></span></a>
       <button type="submit" name="like_post"><i class="fas fa-heart"></i><span><?= $total_post_likes ?></span></button>
     </div>
     <div class="title"><?= $fetch_posts['title']; ?></div>
     <div class="content"><?= $fetch_posts['content']; ?></div>
   </form>
   <?php 
     }
   }else{
     echo '<p class="empty">no posts added yet!</p>';
   }
   ?>
 </div>
 <div class="style=margin-top: 2rem; text-align: center;">
   <a href="posts.php" class="inline-btn">View All</a>
 </div>
</section>

<script src="js/blog.js"></script>
</body>
</html>