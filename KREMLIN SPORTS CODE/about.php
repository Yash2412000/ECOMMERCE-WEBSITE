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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - KremlinSports</title>
    <link rel="stylesheet" href="style.css ">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
  
</head>
<body style="background: radial-gradient(#fff, #ffd6d6);">
    <div class="container">
    <?php include "header.html" ;?>
        </div>

<!-- about-page -->
 <div class="row padding">
     <div class="col-2">
                <img id="imgJson" src="" alt="">
            </div>
            <div class="col-2">
    <p id="demo"></p>
     
               

            </div>
            

        </div>
        
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.891550261542!2d72.85360841492708!3d19.243557651684792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b13affffffff%3A0xfd071f1d3a7844ef!2sSt.%20Francis%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1602771375852!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>


<!-- footer -->
<?php include "footer.html"; ?>
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
 </script> 

    <script>
         var myObj, x;
        myObj = {imgpath:"/images/image1.png", name: "This website is the official website for the Kremlin Sports, home base of KremlinSports, present and future. We have grown our content considerably in recent years. For all our customers, we expanded our Product section and added the Single Product Details. For all our customers we have added our Product sections. For students and kids we added our Kids Section. For Men and Women we have the Lastest as well as Featured Products section too. We also have our login and registration page. You can follow us on our Instagram as well as facebook Page for viewing our products. We have our contact page for any questions or complaint about the products and customers can also mail us or contact on the given phone number." };
        x = myObj["name"];
        document.getElementById("demo").innerHTML = x;
        document.getElementById("imgJson").src = myObj["imgpath"];
        </script>

 <!-- js for toggle Form -->
 <script>
     var LoginForm = document.getElementById("LoginForm")
     var RegForm = document.getElementById("RegForm")
     var Indicator = document.getElementById("Indicator")

    function register(){
        RegForm.style.transform ="translateX(0px)";
        LoginForm.style.transform ="translateX(0px)";
        Indicator.style.transform ="translateX(100px)";

    }
    function login(){
        RegForm.style.transform ="translateX(300px)";
        LoginForm.style.transform ="translateX(300px)";
        Indicator.style.transform ="translateX(0px)";

    }


 </script>
</body>
</html>