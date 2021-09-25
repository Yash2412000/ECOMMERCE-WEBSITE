<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - KremlinSports</title>
    <link rel="stylesheet" href="style.css ">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
</head>

<body>
<div class="navbar">
  <div class="logo">
    <img src="images/logo.png" width="125px" />
  </div>
  <nav>
    <ul id="MenuItems">
    </ul>
  </nav>
</div>


    
<!-- account-page -->
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
              <img src="images/image1.png" width="100%">  
            </div>
            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                    </div>
                    <form action="login.php" method="post" name="LoginForm" onsubmit="return validateLoginForm()" id="LoginForm">
                    <!--onsubmit="return validateLoginForm()" name="LoginForm" id="LoginForm"-->
                        <input class="form-control padding" name="UserName" type="text" placeholder="Username">
                        <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control padding" name="Password" type="password" placeholder="Password">
                        <button type="submit" class="btn">Login</button>
                        <a href="">Forgot password</a>
                    </form>
                    <!--onsubmit="return validateRegForm() name="RegForm" id="RegForm" -->
                    <form action="registration.php" method="post" name="RegForm" onsubmit="return validateRegForm()" id="RegForm"  >
                        <input class="form-control padding" name="UserName" type="text" placeholder="Username">
                        <input class="form-control padding" name="Email" type="email" placeholder="Email">
                        <input pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control padding" name="Password" type="password" placeholder="Password">
                        <button type="submit" class="btn">Register</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- footer -->

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
        Indicator.style.transform ="translateX(-5px)";

    }
    
function validateRegForm() {
  var username = document.forms["RegForm"]["UserName"].value;
  var password = document.forms["RegForm"]["Password"].value;
  var email = document.forms["RegForm"]["Email"].value;
  if (username == "") {
    alert("Please Fill in the username");
    return false;
  }
    if (email == "") {
    alert("Please Fill in Email Id");
    return false;
  }
    if (password == "") {
    alert("Please Fill in the Password");
    return false;
  }
}

function validateLoginForm() {
  var username = document.forms["LoginForm"]["UserName"].value;
  var password = document.forms["LoginForm"]["Password"].value;
 if (username =="") {
   alert("Please Fill in the Username");
    return false;
  }
   if (password == "") {
    alert("Please Fill in Password");
    return false;
  }
}

 </script>
</body>
</html>