<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<header class="header">
    <section class="flex">
        <a href="home.php" class="logo">L</a>
        <form action="search.php" class="search-form" method="post">
            <input type="text" name="search_box" placeholder="Search Post..." maxlength="100">
            <button type="submit" name="search_btn" class="fas fa-search"></button>
        </form>

        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
            <div id="user-btn" class="fas fa-user"></div>
        </div>

        <nav class="navbar">
            <a href="home.php"><i class="fas fa-angle-right"></i><span>Home</span></a>
            <a href="posts.php"><i class="fas fa-angle-right"></i><span>Posts</span></a>
            <a href="all_category.php"><i class="fas fa-angle-right"></i><span>Categories</span></a>
            <a href="authors.php"><i class="fas fa-angle-right"></i><span>Authors</span></a>
            <a href="login.php"><i class="fas fa-angle-right"></i><span>Login</span></a>
            <a href="register.php"><i class="fas fa-angle-right"></i><span>Register</span></a>
        </nav>

        <div class="profile">
            <?php 
              $select_profile = $conn->prepare("SELECT * FROM `users`  WHERE id =?");
              $select_profile->execute([$user_id]);
              if($select_profile->rowCount() > 0){
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
              
            ?>
              <p><?= $fetch_profile['name']; ?></p>
              <a href="update.php">Update Profile</a>
              <div class="flex-btn">
                <a href="login.php" class="option-btn">Login</a>
                <a href="register.php" class="option-btn">Register</a>
              </div>
              <a href="important/user_logout.php" class="delete-btn" onclick="return confirm('Logout from the website?')">Logout</a>
            <?php 
              }else{

              
            ?>
            <p>Please Login First....</p>
            <div class="flex-btn">
                <a href="login.php" class="option-btn">Login</a>
                <a href="register.php" class="option-btn">Register</a>
            </div>
            <?php 
              }
            ?>
        </div>
    </section>
</header>