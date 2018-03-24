<?php
include_once 'config.php';
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
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
                <li><a key="About" class="tr" href="about.php">About</a></li>
			  <li><a key="Products" class="tr" href="products.php">Products</a></li>
			  <li><a key="Cart" class="tr" href="cart.php">View Cart</a></li>
			  <li><a key="Orders" class="tr" href="orders.php">My Orders</a></li>
			  <li class="active"><a key="Contact" class="tr" href="contact.php">Contact</a></li>
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
		<form method="POST" action="insertfeedback.php">
          <h1> KINDLY GIVE US YOUR FEEDBACK </h1><br/><br/>
		  <table>
		  <tr>
		  <td>
		  <h2 style="color:white;"> Your Name:-</h2></td><td> <input style="height:30px;width:250px;" name="name" type="text" id="name" placeholder="Your Name"/></td></tr><br/>
		  <tr><td>
		  <h2 style="color:white;"> Your Feedback:-</h2></td><td> <textarea placeholder="Your content here..." id="feedback" name="feedback" style="height:60px;width:250px;">  </textarea></td></tr><br/>
		  </table>
		  </br><button id="submit" type="submit" name="btn-upload"> SUBMIT </button>
		  </form>
		 
        </div>
        
						
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