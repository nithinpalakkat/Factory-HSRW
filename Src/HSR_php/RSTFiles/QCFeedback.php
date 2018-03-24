<?php
include_once 'config.php';
$query="SELECT * FROM qc";
$results = $db->query($query);
$query1="SELECT OrderId FROM orders";
$results1 = $db->query($query1);
?><!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>HSRW i4.0</title>
<link href="css/contacts.css" rel="stylesheet" type="text/css">
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
          
      <div class="cartimg"><a href="Delivery.html"><img src="Images/cart.png"/></a></div>
          
        <!--Contact part-->
        
         <div class="contactcontent">
             <?php if($results->num_rows >0) { 
	  while($row = $results->fetch_assoc()) {
		  ?><h1 key="WELCOME <?php echo $row['username']; ?>" class="tr">WELCOME <?php echo $row['username']; ?></h1>
         <?php } } ?>
			 
       <h1 key=" Pick a OrderID:-" class="tr">Pick a OrderID:-</h1>
	   <table style="width:300px;">
	   <tr style="color:red;">
	   <th style="width:50%;">ORDERID</th>
	   
	   </tr>
		   <?php if($results1->num_rows >0) { 
	  while($row1 = $results1->fetch_assoc()) {
		  ?><tr >
			   <td style="width:50%;text-align:center;">
			   <h3 style="color:white;"><?php echo $row1['OrderId']; ?> </h3>
			   </td>
			   
		   </tr><?php } } ?>
	   </table>
         </div>
        
        <hr class="vertical"/>
        
             <!-- Feedback part -->
            <div>
             <form method="POST" action="insertqcfeedback.php" class="feed" id="userfeedback">
                <label for="ordernumber" key="FBO" class="tr">Order Number</label>
                <input type="text" id="ordernumber" name="ordernumber" placeholder="Your Order Number">
                <label for="feedback" key="FB" class="tr">FeedBack</label>
                <textarea class="feedbacktextarea" rows="6" cols="38" name="feedback" form="userfeedback" placeholder="Your feedback"></textarea>
                <input type="submit" key="FBSUB" class="tr" name="btn-upload" value="Send">
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