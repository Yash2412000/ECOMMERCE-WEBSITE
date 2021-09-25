<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:account.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KremlinSports</title>
    <link rel="stylesheet" href="style.css ">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
    <div class="container">
    <?php include "header.html"  ;?>
    
        <div class="row">
            <div class="col-2">
                <h2>Welcome <?php echo  $_SESSION['username'];?></h2>
              <h1>Give Your Life<br> A New Style!</h1>
                <p>It's not whether you get knocked down<br> it's whether you get up.
                </p>
                <a href="products.php" class="btn">Explore Now &#8594;</a>
            </div>
            <div class="col-2">
                <img src="images/image1.png" alt="">
            </div>
        </div>
    </div>
</div>

<!-- featured categories -->
<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
            <a target="_blank" href="products.php">
                <img height="350" width="200" src="images/nike tshirt5.png   " alt="">
               <h1 class="center">Men</h1>
            </a>
            </div>
            <div class="col-3">
            <a target="_blank" href="products.php">
                <img height="350" width="200" src="images/category-3.jpg" alt="">
               <h1 class="center">Women</h1>
            </a>
            </div>
            <div class="col-3">
            <a target="_blank" href="products.php">
                <img height="350" width="200" src="images/nike kids tshirt2.jpg" alt="">
                 <h1 class="center">Kids</h1>
            </a>
            </div>
        </div>
    </div>
    </div>
<!-- featured products -->
<h2 class="title">Featured Products</h2>
<div class="small-containr">
    <div class="row" id="product"></div>
       

    </div>

   

<!-- offer -->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/exclusive.png" class="offer-img">
            </div>
            <div class="col-2">
                <p>Exclusive Available on Kremlin</p>
                <h1>Smart band product</h1>
                <small>Smart bands are closer to the concept of a bracelet than a watch, but there are some smart bands with displays that can tell you the time and various other useful tidbits of information.


                </small><br>
                <a href="products.php"class="btn">Explore Now &#8594;</a>
            </div>

        </div>
    </div>
</div>

    <!-- slideshow -->

<div style="padding:0px !important;"  class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
                  <img height="500" width="100%" src="https://cdn.shopify.com/s/files/1/0071/6698/4310/files/Distance-ColorwayHeader.jpg?v=1600368840)">

  <div class="text">One</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
                  <img height="500" width="100%" src="images/sale8.jpg">

  <div class="text">Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
                <img height="500" width="100%" src="images/sale9.jpg">
  <div class="text">Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<!-- testimonial -->
 <div class="testimonial">
     <div class="small-container">
         <div class="row">
             <div class="col-3">
                <i class="fa fa-quote-left"></i>
                 <p>
                    For sports fans, sports are the epitome of hard work and dedication. To get to the pinnacle of their sport, even the most naturally gifted athletes have to give it their all.
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
             </div>
             <img src="images/ronaldo.jpg">
             <h3>Cristiano Ronaldo</h3>
         </div>
         <div class="col-3">
            <i class="fa fa-quote-left"></i>
             <p>
                For sports fans, sports are the epitome of hard work and dedication. To get to the pinnacle of their sport, even the most naturally gifted athletes have to give it their all.
            </p>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
         </div>
         <img src="images/user-2.png">
         <h3>Mike Smith</h3>
     </div>
     <div class="col-3">
        <i class="fa fa-quote-left"></i>
         <p>
            For sports fans, sports are the epitome of hard work and dedication. To get to the pinnacle of their sport, even the most naturally gifted athletes have to give it their all.
        </p>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
     </div>
     <img src="images/dhoni.jpg">
     <h3>Mahendra Singh Dhoni</h3>
 </div>
     </div>
 </div>

 <!-- brands -->
    <div class="brands">
        <div class="small-container">
          <div class="row">
              <div class="col-5">
                  <img src="images/nike-logo.png">
              </div>
              <div class="col-5">
                <img src="images/adidas-logo.png">
          </div>  
          <div class="col-5">
            <img src="images/kisspng-reebok-logo.jpg">
        </div>
        <div class="col-5">
            <img src="images/under-armour-logo.png">
    </div>  
    <div class="col-5">
        <img src="images/puma-logo.png">
    </div>
    </div>
    </div>
    </div>
<?php include "footer.html"; ?>
       <script type="text/javascript">

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          myFunction(this);
        }
      };
      xmlhttp.open("GET", "https://kremlin105.000webhostapp.com/xml", true);
      xmlhttp.send();

      function myFunction(xml) {
          
        var x, i, xmlDoc;
        var productshowcase = "";
        var parser = new DOMParser();
        var xmlDoc = parser.parseFromString(
          xmlhttp.responseText,
          "application/xml"
        );
        x = xmlDoc.getElementsByTagName("CD");
        for (i = 0; i < 4; i++) {
            
          productshowcase +='<div class="col-4"><a target="_blank" href="products.php"><form action="cart.php?id=' +x[i].getElementsByTagName("ID")[0].childNodes[0].nodeValue +'" method="POST"><img width="250" height="250" src="' +x[i].getElementsByTagName("IMAGE1")[0].childNodes[0].nodeValue +'" /><h4>' +x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue +'</h4><div class="rating"><i class="fa fa-star"></i><i claAdss="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></div><p> ' +x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue +"</p><input type='hidden' name='Item_Name' value="+x[i].getElementsByTagName("NAME")[0].childNodes[0].nodeValue.replaceAll(" ","-") +"><input type='hidden' name='Price' value="+x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue+"></form></a></div>";
        }
                                
        document.getElementById("product").innerHTML = productshowcase;

      }
    </script>

    <!-- js for toggle menu -->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        MenuItems.style.maxHeight = "0px"; 

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";

         }
            else
            {
                MenuItems.style.maxHeight = "0px";

            }
        }
        var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}

 </script>
</body>
</html>