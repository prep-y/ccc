<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
  <div class="container">
    <a href="index.php" class="navbar-brand">Gift Box Direct Admin</a>
    <ul class="navbar-nav mr-auto">
      <li><a href="brands.php">Brands</a></li>
      <br>
      <li><a href="categories.php">Categories</a></li>
      <br>
      <li><a href="products.php">Products</a></li>
      <br>
      <?php if(has_permission('admin')):?>
        <li><a href="users.php">Users</a></li>
      <?php endif;?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello <?=$user_data['first']; ?>!
          <span class="caret">
        </a>
        <ul class="dropdown-menu" role="menu">
          <li><a href="change_password.php">Change Password</a></li>
          <li><a href="logout.php">Log Out</a></li>
        </ul>
      </li>
      <!--Menu items-->
      <!-- <li class="dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $parent['category']; ?> 
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><?php echo $child['category'];?></a>
          
        </div>  
      </li> -->
   
  </div>
</nav>