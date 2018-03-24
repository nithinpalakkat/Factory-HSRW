<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="bolt";
$connect = mysqli_connect($hostname,$username,$password,$databasename);
$query = "SELECT * FROM users";
$result1 = mysqli_query($connect,$query);
$result2 = mysqli_query($connect,$query);
$datarow = " ";
 while($row2 = mysqli_fetch_array($result2))
 {
	 $datarow = $datarow."<tr><td>$row2[0]</td><td>$row2[1]</td><td>$row2[2]</td><td>$row2[3]</td><td>$row2[4]</td><td>$row2[5]</td><td>$row2[6]</td></tr>";
 }
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
     <div class="aboutus" style="width:100%; margin-left:0px;" >
         <table style="width:100%;height:100px;">
			<tr style="color:white;">
				<th style="width:100px;">ID</th>
				<th style="width:100px;">FIRST NAME</th>
				<th style="width:100px;">LAST NAME</th>
				<th style="width:100px;">ADDRESS</th>
				<th style="width:100px;">CITY</th>
				<th style="width:100px;">PIN</th>
				<th style="width:150px;">EMAIL</th>
			</tr><br/>
			<?php
				while($row1 = mysqli_fetch_array($result1)):;?>
			<tr>
				<td style="width:100px;text-align:center;color:white;"><?php echo $row1['id']; ?></td>
				<td style="width:100px;text-align:center;color:white;"><?php echo $row1['fname']; ?></td>
				<td style="width:100px;text-align:center;color:white;"><?php echo $row1['lname']; ?></td>
				<td style="width:100px;text-align:center;color:white;"><?php echo $row1['address']; ?></td>
				<td style="width:100px;text-align:center;color:white;"><?php echo $row1['city']; ?></td>
				<td style="width:100px;text-align:center;color:white;"><?php echo $row1['pin']; ?></td>
				<td style="width:150px;text-align:center;color:white;"><?php echo $row1['email']; ?></td>
			</tr><?php endwhile; ?>
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