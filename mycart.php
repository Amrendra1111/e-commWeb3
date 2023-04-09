<?php 
include("header.php"); 






// session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
  <link rel ="stylesheet" href = "style.css">
  <title>Document</title>
</head>
<body>
  


 <!-- CONTENTS STARTS -->
 <div class = mycart-container>
  <div class ="row">
  <div class ="mycart-header">
   <h1>MY CART</h1>
  </div>
<div>

   <table class="table">
   <thead class ="text-center">
    <tr>
      <th scope="col" >Items</th>
      <th scope="col" >Description</th>
      <th scope="col" >Item Name</th>
      <th scope="col" >Item Price</th>
      <th scope="col" >Quantity</th>
      <th scope="col" >Total</th>
      <th scope="col"></th>
    </tr>
    
  </thead>
 <tbody class ="text-center">
 <?php

 if(isset($_SESSION['cart']))
 {
 
 foreach($_SESSION['cart']as $key => $value)
 {
  $sr=$key+1;


  echo"
  <form action='' method='post'>
  <tr>
  <td name='Items'>$sr</td>
  <td name= Description'>$value[Description]</td>
  <td name='ItemName'>$value[Item_Name]</td>
  <td name='ItemPrice'>$value[Price]&#163;<input type='hidden' class='iprice' value='$value[Price]'></td>
 
  <td>
  <form action='manage_cart.php' method='POST'>
  <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type ='number' value='$value[Quantity]' min='1' max='10'>
  <input type ='hidden' name='Item_Name' value ='$value[Item_Name]'>
  </form>
  </td>
  <td class='itotal' name='Total'></td>  
  <td>
  
  <form action='manage_cart.php' method='POST'>
  <button name ='Remove_Item' class='mycart-btn'>REMOVE</button>
  <input type ='hidden' name='Item_Name' value ='$value[Item_Name]'>
  </form>
  </td>
  </tr>
  ";
  }
  }
  ?>
 

  </tbody>

 </table>
 <br>
 <div >
<h2>Grand Total:</h2><br>
   <h4 id ="gtotal"></h4>
<br>

<!-- ye new added h 12:30 -->

<!-- ************* -->


<form action="" method ="post">
 <button type ="submit" name ="submit" value ="submit" class= "mycart-buynowBtn">Buy Now</button>
</form>
</form>
  </div>

 </div>



 </div>

 </div>



 


  <!-- CONTENTS ENDS -->
  <script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subTotal(){
      gt=0;
      for(i=0;i<iprice.length;i++)
      {
       itotal[i].innerText=(iprice[i].value)*(iquantity[i].value) ;
       gt=gt+(iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText=  "£" + gt;
    }
    subTotal();
  </script>
  <script src ="index.js"></script>
  
</body>
</html>
