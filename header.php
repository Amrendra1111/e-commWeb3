<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="nav.css"/>
    <link rel="stylesheet" href="style.css"/>
    <title>Opus Corporation</title>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="./images/logo.png" alt="Logo Image">
            <div class ="searchbar">
            <input type="text" id ="search-item" name="" placeholder =" Search.." onkeyup="search()">
 <img src="./images/search-icon.svg" alt="" style="width:20px" onclick ="somefun()">
</div>
        </div>

        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <?php
 $count=0;
 if(isset($_SESSION['cart'])){
  $count=count($_SESSION['cart']);
 }
 ?>
        <ul class="nav-links">

            <li class="drop-down"><a href="main.php">Home</a>
        
            <div class="dropdown-content">
    <a href="#home">About Us</a>
    <a href="#about">Contact Us</a>
    <a href="#contact">Join</a>

  </div>
        
        
        </li>
            <li class="hidden-items"><a href="#about-us">about us</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="mycart.php">mycart[<?php echo $count;?>]</a></li>
            <li class="hidden-items" ><a href="#contact-us">Contact Us</a></li>
            <?php
            if (!isset($_SESSION['user_name'])):?>
            
            <li><a href="login_form.php" id="login">login</a></li>
           
        <?php else :?>
            
           <li><a href="logout_form.php" id="login">logout</a></li>
           <?php endif; ?>
         
            <li class="hidden-items"><button class="join-button" href="#">Join</button></li>
        </ul>
    </nav>
<script>
    var btn = document.getElementById()
</script>
    <!-- <script src="index.js"></script> -->
</body>
</html>
