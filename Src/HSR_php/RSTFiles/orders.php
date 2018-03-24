<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
if(!isset($_SESSION["username"])){
 header("location:index.php");
}
?>
<?php
include_once 'anotherconfig.php';
$getinfo = "select ID,TotalPrice From products Where ID=(SELECT max(ID) FROM products)";
$result = mysqli_query($db,$getinfo);
$row = mysqli_fetch_row($result);
$OrderID = $row[0];
$TotalPrice = $row[1];
mysqli_query($db,"INSERT INTO orders (OrderId,TotalPrice) VALUES ('$OrderID','$TotalPrice')");
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
         <h1>My Orders</h1>
        <hr>

        <?php
		include_once 'config.php';
		  $user = $_SESSION["username"];
		  $query="SELECT * from orders where email='".$user."'";
		  $result = $db->query($query);
          if($result) {
			  $counter = 1; 
            while($obj = $result->fetch_object()) {
              //echo '<div class="large-6">';
			  echo '<p><strong>Serial Number :' . $counter .'</strong></p>';
              echo '<p><strong>Order iD:'.$obj->OrderId.'</strong></p>';
			  echo '<p><strong>Status:'.$obj->Status.'</strong></p>';
			  echo '<p><strong>Feedback:'.$obj->Feedback.'</strong></p>';
              echo '<p><strong>QCFeedback:'.$obj->QCFeedback.'</strong></p>';
              echo '<p><hr></p>';
				$counter++;
            }
          }
        ?>
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