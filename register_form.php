<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         // header('location:login_form.php');
         header('location:successful_submission.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="css/style.css"> -->
   <link rel="stylesheet" href="login_form.css">

</head>
<body>
<script type="text/javascript">


function myFun(){
   var a = document.myForm.email.value;
   let gmail = '@gmail.';
let yahoo = '@yahoo.';
   // if(a.indexOf('@')<=0){
   //    document.getElementById("Message").innerHTML ="invalid email";
   //    return false;
   // }
   
      // if(a.charAt(a.length-3)!='.'){
      //    document.getElementById("Message").innerHTML ="invalid email";
      //    return false;
      // }
      if(a.indexOf(gmail) == -1 && a.indexOf(yahoo) == -1 ){
         document.getElementById("Message").innerHTML ="invalid email";
         return false;
      }
   
   }


</script>
   
<div class="form-container">

   <form action="" method="post" name ="myForm"  onsubmit="return myFun()">
   <a href="main.php" class ="closeBtn">x</a>
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <span id ="Message"></span>
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
      
   </form>

</div>

</body>
</html>