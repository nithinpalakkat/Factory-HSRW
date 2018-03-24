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
    <div class="row" style="height:100%;">
        
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
         <h1 key="aboutus" class="tr">About Us</h1>
        <p key="aboutusp1" class="tr">This website is a part of a thesis work namely "Industry 4.0: A Mobile and Modular Lean Factory in Focus with MES and Value Chain". Industry 4.0, The fourth industrial revolution is a collective evolution from the past manufacturing industry trends. The industry requires more flexible and cost effective manufacturing system, which can adapt to any requirements. Industry 4.0 uses Cyber-Physical-Systems (CPS) and Internet of Things (IoT) to automatize and communicate between manufacturing systems, logistics, etc.</p>
        <p key="aboutusp2" class="tr">Master thesis is to demonstrate and educate students to understand different aspects of an Industry 4.0 model lean factory. A movable and compact factory can be taken into class or any place for demonstration. Smart factory Consists of an IoT platform, which communicates systems inside the factory. Thesis demonstrates a small value chain of a product called Ring Holder and manufacturing execution system(MES) in an Industry 4.0 lean factory concept.</p>
         
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