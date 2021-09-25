<?php

  session_start();
  if(!isset($_SESSION['username'])){
  header('location:account.php');
  }
  
// Database Connectivity
$con = mysqli_connect('localhost', 'id15134064_relsonpinto24','l(7>Yz^]&hPwXIA@');
$db = mysqli_select_db($con,'id15134064_kremlin');
  if (isset($_POST["AddtoCart"]))//Isset is used to check whether a variable is set or not.Excecuted when add to cart button is clicked
    {
        if (isset($_SESSION["cart"]))//Cart Session created (session array is created with name Cart)
        {   
            $item_array_id = array_column($_SESSION["cart"],"id");//array column returns value of id from session cart to item_array_id 
                if (!in_array($_GET["id"],$item_array_id))// in_array is used to check whether product is present in item_array_id. products new item to cart. 
                    { 
                      $count = count($_SESSION["cart"]); //Count returns number of elements in array 
                      $item_array = array(     
                      // array products in cart
                      'id' => $_GET["id"],
                      'name' => $_POST["name"],
                      'price' => $_POST["price"],
                      'image1' => $_POST["image1"],
                      );
                      $_SESSION["cart"][$count] = $item_array;
                      echo '<script>window.location="cart.php"</script>';
                    }
           
        }
        else// product in cart
        { 
           $item_array = array(
                    'id' => $_GET["id"],
                    'name' => $_POST["name"],
                    'price' => $_POST["price"],
                    'image1' => $_POST["image1"],
                     );
            $_SESSION["cart"][0] = $item_array;
        }
    }
  if (isset($_GET["action"])){ // products removed from  cart
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    echo '<script>alert("Product has been Removed...!")</script>';
                    echo '<script>window.location="products.php"</script>';
                }
            }
        }
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
    <?php include "header.html"; ?>
        </div>
<!-- card item details -->
<div class="small-container cart-page">
    <table>
        <tr>
            <th width="25%">Product Name</th>

                <th width="25%">Price Details</th>
                <th width="22%">Total Price</th>
                <th width="22%">Remove Item</th>
           
            </tr>
             <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) 
                    {
                        ?>
                        <tr>
                            <td><?php echo $value["name"]; ?></td>
                            <td>Rs. <?php echo $value["price"]; ?></td>
                        <td> Rs. <?php echo number_format($value["price"], 2); ?></td>
                            <td><a href="cart.php?action=delete&id=<?php echo $value["id"]; ?>"><span>Remove Item</span></a></td>


                        </tr>
                        <?php
                        $total = $total + ($value["price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="1" align="right">Total</td>
                            <th align="right" width="15%">Rs. <?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    } 
                ?>

        </table>
        <br>
        <center>
              <a href="products.php" class="buttons">Add Products</a></th>
              </center>
    </div>
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
</body>
</html>


