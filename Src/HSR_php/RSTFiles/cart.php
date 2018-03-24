<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>HSRW i4.0</title>
<link href="css/about.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/translation.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", loadSavedCookieLanguageTranslation);
</script>   
</head>

<body>
    <header class="backgroundimage">
        
     <!-- header part -->
    <div class="row">
        
        <!-- header logo -->
        <div class="logo">
        <img src="Images/logo.png">
        </div>
        
        <div class="main-nav">
            <!-- navigation menu -->
            <ul>
                
                <li><a key="about" class="tr" href="about.php"> About Us </a></li>
                <li><a key="products" class="tr" href="products.php"> Products </a></li>
                <li><a key="contacts" class="tr" href="contact.php"> Contacts </a></li>
                <li><a key="signin" class="tr" href="signin.php"> Sign In </a></li>
				<?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a key="Account" class="tr" href="account.php">My Account</a></li>';
            echo '<li><a key="logout" class="tr" href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a key="login" class="tr" href="login.php">Log In</a></li>';
            echo '<li><a key="register" class="tr" href="register.php">Register</a></li>';
          }
          ?>
            </ul>
        </div>
          
      <div class="cartimg"><a href="Delivery.php"><img src="Images/cart.png"/></a></div>
          
        <div class="aboutus">
         <?php
		 include 'config.php';

          echo '<p><h3>Your Shopping Cart</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Code</th>';
            echo '<th>Name</th>';
            echo '<th>Quantity</th>';
            echo '<th>Cost</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity; //work out the line cost
                $total = $total + $cost; //add to the total cost

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.'</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Total</td>';
          echo '<td>'.$total.'</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a href="update-cart.php?action=empty" class="button alert">Empty Cart</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Continue Shopping</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;">COD</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Login</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo "You have no items in your shopping cart.";
        }





          echo '</div>';
        
          ?>

        
        
         <!-- language menu -->
         <div class="bottom-row">
            <ul class="languageSelector">
                <li><a id="en" class="lang"> English </a></li>
                <li><a id="de" class="lang"> German </a></li>
            </ul>
             
             <!-- bottom logo -->
             <div class="bottom-logo">
                <img src="Images/logo.png">
            </div>
             
        </div>
        
        <!-- copright text -->
        <footer>
            <p class="copyright">HSRW i4.0 developed 2017</p>
        </footer>
        
        </div>
                
    </header>
    </body>

</html>