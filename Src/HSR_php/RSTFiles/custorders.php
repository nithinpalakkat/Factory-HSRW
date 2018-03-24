<?php
include_once 'config.php';
$query="SELECT * FROM orders";
$results = $db->query($query);
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
                 <li><a key="Registered" class="tr" href="regcust.php">Registered Customers</a></li>
          <li><a key="Orders" class="tr"  href="custorders.php">Orders</a></li>
           <li><a key="Logout" class="tr" href="logout.php">Logout</a></li>
            </ul>
        </div>
          
      <div class="cartimg"><a href="Delivery.php"><img src="Images/cart.png"/></a></div>
          
        <div class="aboutus">
         <table style="width:1200px; margin-left:-130px;">
			<tr style="width:1200px; height:100px;color:white">
				<th style="width:150px;">Order ID</th>
				<th style="width:150px;">Status</th>
				<th style="width:150px;">Feedback</th>
				<th style="width:150px;">QC Feedback</th>
				<th style="width:150px;">PRICE</th>
				<th style="width:150px;">EMAIL</th>
			</tr><br>
			<?php if($results->num_rows >0) { 
	  while($row = $results->fetch_assoc()) {
		  ?>
			<tr>
				<td style="width:150px; text-align:center;color:white;"><?php echo $row['OrderId']; ?></td>
				<td style="width:150px;text-align:center;color:white;"><?php echo $row['Status']; ?></td>
				<td style="width:150px;text-align:center;color:white;"><?php echo $row['Feedback']; ?></td>
				<td style="width:150px;text-align:center;color:white;"><?php echo $row['QCFeedback']; ?></td>
				<td style="width:150px;text-align:center;color:white;"><?php echo $row['Total']; ?></td>
				<td style="width:150px;text-align:center;color:white;"><?php echo $row['email']; ?></td>
				</tr><?php } } ?>
			</table>
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