<?php

session_start();

$con = mysqli_connect('localhost', 'id15134064_relsonpinto24','l(7>Yz^]&hPwXIA@');

if($con){
mysqli_select_db($con, 'id15134064_kremlin');

$name = $_POST['UserName'];
$emai = $_POST['Email'];
$pass = $_POST['Password'];

$s =  " select * from M_User where username = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num > 0 ){
        echo '<script>alert("Login Successful")</script>';
            $_SESSION['username']=$name ;
        echo '<script>window.location.href = "index.php";</script>';

}
else{
header('location:account.php');
}
}else{
    echo"No Connection";
}



?>