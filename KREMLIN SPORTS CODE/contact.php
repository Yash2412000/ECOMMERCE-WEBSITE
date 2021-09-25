<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:account.php');
}
$to = "relsonpinto24@gmail.com";
$subject = "KremlinContact";
$email= $_POST['emailContact'];
$message= $_POST['messageContact'];
$name= $_POST['nameContact'];
$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>

<b>NAME </b>:".$name."
<br>
<br>
<b>EMAIL </b>:".$email."
<br>
<br>
<b> MESSAGE </b>:".$message."
<br>
</p>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <kremlin@email.com>' . "\r\n";

mail($to,$subject,$message,$headers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - KremlinSports</title>
    <link rel="stylesheet" href="style.css ">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">

<style>
    body{
        background: radial-gradient(#fff, #ffd6d6);
    }
.formdiv{
    padding: 0px 100px 100px 100px;
}
.form{
    width:100%;height:440px;background:#fff;border-radius:8px;box-shadow:0 0 1px -10px #000;
    padding:20px 30px;max-width:calc(100vw - 40px);box-sizing:border-box;
    font-family:'Montserrat',sans-serif;position:relative
}
input{
    width:100%;padding:10px;box-sizing:border-box;background:none;
    outline:none;resize:none;border:0;font-family:'Montserrat',sans-serif;transition:all .3s;
    border-bottom:2px solid #bebed2
}

p:before{
    content:attr(type);display:block;
    margin:28px 0 0;font-size:14px;
    color:#5a5a5a
}
button
{
    display: inline-block;
    background-color: #ff523b;
    color: #fff;
    padding: 8px 30px;
    margin:30px 0;
    border-radius: 30px;
    border: none;
    transition: background 0.5s;
}
button:hover{    background-color: #563434;
}

</style>
</head>
<body>
    <div class="container">
    <?php include "header.html"; ?>
        </div>

<!-- contact-page -->
<div class="formdiv">
<form class="form" action="" method="post">
    <h2>CONTACT US</h2>
    <p type="Name:"><input name="nameContact" placeholder="Write your name here.."></input></p>
    <p type="Email:"><input name="emailContact" placeholder="Let us know how to contact you back.."></input></p>
    <p type="Message:"><input name="messageContact" placeholder="What would you like to tell us.."></input></p>
    <button type="submit">Send Message</button>
    <div style="float: right; padding: 20px;">
      <span class="fa fa-phone"></span>9819949943
      <span class="fa fa-envelope-o"></span> KremlinSports@gmail.com
    </div>
  </form>
 
</div>
 
  

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
