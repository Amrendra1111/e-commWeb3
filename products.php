<?php include("header.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel ="stylesheet" href = "products.css">

 
 

 <title>products</title>
</head>
<body>
<div class =" innerNavbar">
 <div class= "innerNavbar-links">
<ul>
<li><a href="#books">books</a></li>
 <li><a href="#clothes">Clothes</a></li>
 <!-- <li><a href="#footware">footware</a></li> -->
 <li><a href="#electronics">electroincs</a></li>
 <li><a href="#kitchenWare">kitchenware</a></li>
 <li><a href="#beauty-products">hygiene products</a></li>
 <!-- <li><a href="#furniture">furniture</a></li> -->

</ul>
</div>

</div>


<div class ="products" id ="products"></div>
<?php include("footer.php");?>
<!-- <script src="index.js"></script> -->
<script>
 const search = () => {
  const searchbox = document.getElementById("search-item").value.toUpperCase();
  const storeitems = document.getElementById("products")
  const product = document.querySelectorAll(".product")
  const pname = storeitems.getElementsByTagName("p")

for(var i=0; i<pname.length;i++){
  let match =product[i].getElementsByTagName('p')[0];

if(match){
 let textvalue= match.textContent || match.innerHTML
 

if(textvalue.toUpperCase().indexOf(searchbox) > -1){
  product[i].style.display ="";
}else{
  product[i].style.display ="none";
}
}

}



}
</script>
</body>
</html>