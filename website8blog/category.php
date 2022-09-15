<?php

include 'important/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_GET['category'])){
    $category = $_GET['category'];
}else{
    $category = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Category</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/blog.css">

</head>
<body>

<?php include 'important/user_header.php'; ?>

<?php
   
?>
<section class="posts-grid">
  <h1 class="heading">Category</h1>

 <div class="box-container">
   <?php 
     $select_posts = $conn->prepare("SELECT * FROM `posts` WHERE category =? AND status = ? LIMIT 6");
     $select_posts->execute([$category,'active']);
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
     echo '<p class="empty">no Results!</p>';
   }
   ?>
 </div>
</section>

<?php
?>
   
<?php include 'important/footer.php'; ?>

<script src="js/blog.js"></script>

</body>
</html>