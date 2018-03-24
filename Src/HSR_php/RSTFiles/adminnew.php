<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?><!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>HSRW i4.0</title>
<link href="css/home.css" rel="stylesheet" type="text/css">
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
                <li><a key="Registered" class="tr" href="regcust.php">Registered Customers </a></li>
                <li><a key="Orders" class="tr" href="custorders.php">Orders</a></li>
                <li><a key="Logout" class="tr"  href="logout.php">Logout </a></li>
                
            </ul>
        </div>
        
      <div class="cartimg"><a href="Delivery.php"><img src="Images/cart.png"/></a></div>
          
     <!-- content part -->
     <div class="aboutus">
         
     </div>
         <div class="bottom-row">
            <ul class="languageSelector">
                <li><a id="en" class="lang"> English </a></li>
                <li><a id="de" class="lang"> German </a></li>
            </ul>
          
        </div>
        
        <!-- copright text -->
        <footer>
            <p class="copyright">HSRW i4.0 developed 2017</p>
        </footer>
        
        </div>
        
    </header>   
<?php
print_r($_SESSION);
?>   
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
</body>
    
</html>
