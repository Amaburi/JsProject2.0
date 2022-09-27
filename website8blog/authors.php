<?php

include 'important/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Author</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/blog.css">

</head>
<body>

<?php include 'important/user_header.php'; ?>

<section class="authors">
    <h1 class="heading">Authors</h1> 
    <div class="box-container">
     <?php 
       $select_authors = $conn->prepare("SELECT * FROM `admin`");
       $select_authors->execute();
       if($select_authors->rowCount() > 0){
        while($fetch_author = $select_authors->fetch(PDO::FETCH_ASSOC)){
            
            $author_id = $fetch_author['id'];

            $count_admin_posts = $conn->prepare("SELECT * FROM `posts` WHERE admin_id = ? AND status = ?");
            $count_admin_posts->execute([$author_id,'active']);
            $total_admin_posts = $count_admin_posts->rowCount();

            $count_admin_likes = $conn->prepare("SELECT * FROM `likes` WHERE admin_id = ?");
            $count_admin_likes->execute([$author_id]);
            $total_admin_likes = $count_admin_likes->rowCount();
            
            $count_admin_comments = $conn->prepare("SELECT * FROM `comments` WHERE admin_id = ?");
            $count_admin_comments->execute([$author_id]);
            $total_admin_comments = $count_admin_comments->rowCount();
        
     ?>
     <div class="box">
      <p>Author : <span><?= $fetch_author['name']; ?></span></p>
      <p>Total posts : <span><?= $total_admin_posts; ?></span></p>
      <p>Total likes : <span><?= $total_admin_likes; ?></span></p>
      <p>Total comments : <span><?= $total_admin_comments; ?></span></p>
      <a href="author_posts.php?author=<?= $fetch_author['name']; ?>" class="btn">View Posts</a>
     </div>
     <?php 
     }
    }else{
     echo '<p class="empty">No author found!</p>';
    }
     ?>
    </div>
</section>
   
<?php include 'important/footer.php'; ?>

<script src="js/blog.js"></script>

</body>
</html>