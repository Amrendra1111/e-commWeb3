



// *********** STORE JS HERE *************



let http = new XMLHttpRequest();
http.open('get', 'products.json', true);
http.send();


http.onload = function(){
 if(this.readyState == 4 && this.status ==200){
  let products = JSON.parse(this.responseText);
  let output ="";
for(let item of products.clothes){
 output +=`
 
<form action = "manage_cart.php" method="post">
 <div class ="product" id ="clothes">

 <img src="${item.image}" alt="{item.image}" />

<p class ="title">${item.title}</p>
<p class ="description">${item.description}</p>
<p class ="price">

 <span>${item.price}</span>
 <span>&#163;</span>
</p>
<button type ="submit" name ="Add_To_Cart" class ="cart">Add to cart </button>

<input type ="hidden" name = "Description" value =${item.description}>

<input type ="hidden" name = "Item_Name" value =${item.title}>
<input type ="hidden" name = "Price" value =${item.price}>

<p class ="donate">Donate us <i class ="bx bx-cart-alt"></i></p>
 </div> 
 </form>`

}
 for(let item of products.furnitures){
  output +=`
  <form action = "manage_cart.php" method="post">
 <div class ="product" id = "furniture">

 <img src="${item.image}" alt="{item.image}" />

<p class ="title">${item.title}</p>
<p class ="description">${item.description}</p>
<p class ="price">

 <span>${item.price}</span>
 <span>&#163;</span>
</p>
<button type ="submit" name ="Add_To_Cart" class ="cart">Add to cart </button>
<input type ="hidden" name = "Description" value =${item.description}>
<input type ="hidden" name = "Item_Name" value =${item.title}>
<input type ="hidden" name = "Price" value =${item.price}>
<p class ="donate">Donate us <i class ="bx bx-cart-alt"></i></p>
 </div> 
 </form>`
 
}



for(let item of products.beautyProducts){
  output +=`
  <form action = "manage_cart.php" method="post">
 <div class ="product" id ="beauty-products">

 <img src="${item.image}" alt="{item.image}" />

<p class ="title">${item.title}</p>
<p class ="description">${item.description}</p>
<p class ="price">
<span>&#163;</span>
 <span>${item.price}</span>

</p>
<button type ="submit" name ="Add_To_Cart" class ="cart">Add to cart </button>
<p class ="donate">Donate us <i class ="bx bx-cart-alt"></i></p>
 </div> 
 </form>`
  
}
for(let item of products.kitchen){
  output +=`
  <form action = "manage_cart.php" method="post">
 <div class ="product" id ="beauty-products">

 <img src="${item.image}" alt="{item.image}" />

<p class ="title">${item.title}</p>
<p class ="description">${item.description}</p>
<p class ="price">
<span>&#163;</span>
 <span>${item.price}</span>
 
</p>
<button type ="submit" name ="Add_To_Cart" class ="cart">Add to cart </button>
<p class ="donate">Donate us <i class ="bx bx-cart-alt"></i></p>
 </div> 
 </form>`
  
}
for(let item of products.electronics){
  output +=`
  <form action = "manage_cart.php" method="post">
 <div class ="product" id ="beauty-products">

 <img src="${item.image}" alt="{item.image}" />

<p class ="title">${item.title}</p>
<p class ="description">${item.description}</p>
<p class ="price">
<span>&#163;</span>
 <span>${item.price}</span>
 
</p>
<button type ="submit" name ="Add_To_Cart" class ="cart">Add to cart </button>
<p class ="donate">Donate us <i class ="bx bx-cart-alt"></i></p>
 </div> 
 </form>`
  
}


  


document.querySelector(".products").innerHTML = output;


 
 }
}
;


// let http2 = new XMLHttpRequest();
// http2.open('get', 'cards.json', true);
// http2.send();


// http2.onload = function(){
//  if(this.readyState == 4 && this.status ==200){
//   let cards = JSON.parse(this.responseText);
//   let output ="";
// for(let item of cards){
//  output +=`
 

//  <div class ="card" id ="clothes">

//  <img src="${item.image}" class="card-img" alt="{item.image}" />

// <p class ="title">${item.title}</p>
// <p class ="description">${item.description}</p>

//  </div> 
// `

// }

// document.querySelector(".wrapper").innerHTML = output;
//  }
// };


















const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', ()=>{
   
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    
    hamburger.classList.toggle("toggle");
});







let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4500); 

};








