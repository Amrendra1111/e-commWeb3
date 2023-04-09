


<?php
include("header.php");
@include 'config.php';


if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel ="stylesheet" href ="user_page.css">
 <title>user page</title>
</head>
<body>
 


   
<div class="container">

   <div class="content">
      <img src="./images/profile.svg" width= 130px fill=#333; alt="">
      <!-- <h3>hi, <span>user</span></h3> -->
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Back to Home Page?</p>
      <!-- <a href="login_form.php" class="btn">login</a> -->
      <!-- <a href="register_form.php" class="btn">register</a> -->
      <a class="btn1" href="main.php" class="btn1">Continue</a>
   </div>

</div>
<script src="index.js"></script>
</body>
</html>