<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
if(!isset($_SESSION["username"])){
 header("location:index.php");
}
	
	include_once 'anotherconfig.php';
	if(isset($_POST['upload']))
		{
			$name = $_POST['name'];
			$topqty =$_POST['topqty'];
			$bottomqty =$_POST['bottomqty'];
			$total =$_POST['total'];
			$delivery =$_POST['delivery'];
			$topimg =$_POST['topimg'];
			$bottomimg =$_POST['bottomimg'];
			$user = $_SESSION["username"];
			if(mysqli_query($db,"INSERT INTO products(CustomerName,TopQuantity,BottomQuantity,TotalPrice,DeliveryPoint,TopImage,BottomImage) VALUES('$name','$topqty','$bottomqty','$total','$delivery','$topimg','$bottomimg')"))
			{
			?>
			<script>alert('Successfully Submitted !!! ');</script>
			<?php
			}
			else
			{
			?>
			<script>alert('error while submitting your details...');</script>
			<?php
			}
			if (!$db)
				{ 
					die("Connection to database failed with error#: " . mysqli_connect_error()); 
				} 
				$sql = "SELECT ID,TotalPrice FROM products WHERE ID=(Select max(ID) from products);";
				$result = mysqli_query($db, $sql);
				$row = mysqli_fetch_assoc($result);
				$OrderID=$row['ID'];
				$TotalPrice=$row['TotalPrice'];
				
				$sql1 = "INSERT INTO orders (OrderId,Total,email) VALUES ('$OrderID','$TotalPrice','$user')";
				if(mysqli_query($db, $sql1)){
					header( "refresh:1;url=success.php" );
					?>
			<script>alert('Successfully Submitted !!! ');</script>
			
			<?php
				} 
				else{
						?>
			<script>alert('error while submitting your details...');</script>
			<?php
				}		
		}
?>

<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<head>
<title>HSRW i4.0</title>
<link href="css/Delivery.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/translation.js"></script>
<script type="text/javascript" src="js/kart.js"></script>
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
          
        <!-- content part -->
		
	<form action="" method="POST">
		<div class="deliverydetails">
			<h1 key="DD" class="tr">Delivery Address</h1>
			<label for="order" key="DDN" class="tr" style="color:white;margin-left:200px;">Name</label>
			<input class="YFName" type="text" id="name" name="name" placeholder="Your Full Name">
			<br/><br/><br/>
			<label for="order" key="DDN" class="tr" style="color:white;margin-left:200px;">SELECT A DELIVERY POINT</label>
		</div>
          <!-- checkout button part -->
            <div class="deliverypoints">
                <li class="deliverypointsBtna"><input class="tr"  type="radio" name="delivery" value="A"> DELIVERY POINT: A</li>
                <li class="deliverypointsBtnb"><input class="tr"  type="radio" name="delivery" value="B"> DELIVERY POINT: B</li>
                <li class="deliverypointsBtnc"><input class="tr"  type="radio" name="delivery" value="C"> DELIVERY POINT: C</li>
                <li class="deliverypointsBtnd"><input class="tr"  type="radio" name="delivery" value="D"> DELIVERY POINT: D</li>
            </div> 
			<hr class="vertical"/> 
			<div class="cartname">
			<h1 class="tr" key="YC">Your Cart</h1>
		    <div class="shopping-cart">
             <div class="item">
                  <div class="buttons">
                  <span class="delete-btn"><img src="Images/delete.png"/></span>
            </div>
			<div class="image">
                 <img src="<?php echo $_GET['top1']; ?>" alt="" />
				 <input type="hidden" name="topimg" ReadOnly="true" value="<?php echo $_GET['top1']; ?>"/>
			
             </div>
             <div class="description">
                 <span>Ring Holder</span>
                 <span>Bottom</span>    
             </div>
             <div class="quantity">    
               <input type="text" name="topqty" ReadOnly="true" value="<?php echo $_GET['quantitytop']; ?>"/>     
             </div>
             <div class="total-price">
			 <input type="text" name="name1" ReadOnly="true" style="width:50px;height:20px; background-color:transparent;color:white;border:none;" value="€<?php 
											$a = $_GET['quantitytop'];
											$total= $a*10;
											echo $total;
										?>"/>
			</div>
             </div>
			 
                <div class="item1">
                  <div class="buttons1">
                  <span class="delete-btn1"><img src="Images/delete.png"/></span>
                </div>
 
             <div class="image1">
                 <img src="<?php echo $_GET['bottom1']; ?>" alt="" />
				 <input type="hidden" name="bottomimg" ReadOnly="true" value="<?php echo $_GET['bottom1']; ?>"/>
             </div>
 
             <div class="description1">
                 <span>Ring Holder</span>
                 <span>Top</span>
                 
             </div>
 
             <div class="quantity1">
              
               <input type="text" name="bottomqty" ReadOnly="true" value="<?php echo $_GET['quantitybottom']; ?>"/>
               
             </div>
 
             <div class="total-price1">
			 <input type="text" name="bottomqty1" ReadOnly="true" style="width:50px;height:20px; background-color:transparent;color:white;border:none;" value="€<?php 
											$a = $_GET['quantitybottom'];
											$total= $a*6;
											echo $total;?>" />
										
			 </div><br/>
			 <div class="quantity1" style="margin-left:-10px; color:white;">
			 TOTAL:-<input type="text" name="total" ReadOnly="true" style="width:50px;height:20px;" value="€<?php $a = $_GET['quantitybottom'];
											$total= $a*6;
											$b = $_GET['quantitytop'];
											$total1= $b*10;
											$final=$total+$total1;
											echo $final; ?>"/>
											</div>
             </div>
            </div>
         
           <div class="ConfirmYourOrder">
             <button name="upload" class="kartbtn" style="margin-left:-190px;background-color:transparent;"><p key="BTN" class="tr" style="margin-top:0px;">CONFIRM ORDER</p></button>
           </div>
           </div> 
		</form>
						
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