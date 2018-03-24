<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
if(!isset($_SESSION["username"])){
 header("location:index.php");
}
		error_reporting(E_ALL);
		if(isset($_POST['upload']))
			{
				$top1=$_POST['top1'];
				
				$bottom1=$_POST['bottom1'];
				
				$quantitytop=$_POST['quantityT'];
				$quantitybottom=$_POST['quantityB'];
				header("Location:Delivery.php?top1=$top1&bottom1=$bottom1&quantitytop=$quantitytop&quantitybottom=$quantitybottom");				
			}
?>
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
<link href="css/products.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/translation.js"></script>

<script type = "text/javascript">
    document.addEventListener("DOMContentLoaded", loadSavedCookieLanguageTranslation);
        function pic1(){
            document.getElementById("img").src = "Images/Bottom_Red.PNG";
			document.getElementById("top1").value = "Images/Bottom_Red.PNG";
			
            }
        function pic2(){
            document.getElementById("img").src ="Images/Bottom_White.PNG";
			document.getElementById("top1").value ="Images/Bottom_White.PNG";
			
            }
        function pic3(){
            document.getElementById("img").src ="Images/Bottom_Black.PNG";
			document.getElementById("top1").value ="Images/Bottom_Black.PNG";
			
            }
        function pic4(){
            document.getElementById("img1").src = "Images/Bottom_Red_1.PNG";
			document.getElementById("top1").value= "Images/Bottom_Red_1.PNG";
			
            }
        function pic5(){
            document.getElementById("img1").src ="Images/Bottom_White_1.PNG";
			document.getElementById("top1").value= "Images/Bottom_Red_1.PNG";
			
            }
        function pic6(){
            document.getElementById("img1").src ="Images/Bottom_Black_1.PNG";
			document.getElementById("top1").value = "Images/Bottom_Red_1.PNG";
			
            } 
    
        function demoShowS(){
             p1.style.visibility="hidden";
             p2.style.visibility="hidden";
             p3.style.visibility="hidden";
             p4.style.visibility="Visible";
             p5.style.visibility="Visible";
             p6.style.visibility="Visible";
             img.style.visibility="hidden";
             img1.style.visibility="visible";
            }
        function demoShow(){
             p1.style.visibility="Visible";
             p2.style.visibility="Visible";
             p3.style.visibility="Visible";
             p4.style.visibility="hidden";
             p5.style.visibility="hidden";
             p6.style.visibility="hidden";
             img1.style.visibility="hidden";
             img.style.visibility="visible";
            }
        
    
        function pic7(){
            document.getElementById("img2").src = "Images/Top_Red.PNG";
			document.getElementById("bottom1").value= "Images/Top_Red.PNG";
			
            }
        function pic8(){
            document.getElementById("img2").src ="Images/Top_White.PNG";
			document.getElementById("bottom1").value ="Images/Top_White.PNG";
			
            }
        function pic9(){
            document.getElementById("img2").src ="Images/Top_Black.PNG";
			document.getElementById("bottom1").value ="Images/Top_Black.PNG";
			
            } 
        function pic10(){
            document.getElementById("img3").src = "Images/Top_Red_1.PNG";
			document.getElementById("bottom1").value= "Images/Top_Red_1.PNG";
		
            }
        function pic11(){
            document.getElementById("img3").src ="Images/Top_White_1.PNG";
			 document.getElementById("bottom1").value="Images/Top_White_1.PNG";
			
            }
        function pic12(){
            document.getElementById("img3").src ="Images/Top_Black_1.PNG";
			 document.getElementById("bottom1").value ="Images/Top_White_1.PNG";
			
            } 
    
        function dShowS(){
             p7.style.visibility="hidden";
             p8.style.visibility="hidden";
             p9.style.visibility="hidden";
             p10.style.visibility="Visible";
             p11.style.visibility="Visible";
             p12.style.visibility="Visible";
             img2.style.visibility="hidden";
             img3.style.visibility="visible";
            }
        function dShow(){
             p7.style.visibility="Visible";
             p8.style.visibility="Visible";
             p9.style.visibility="Visible";
             p10.style.visibility="hidden";
             p11.style.visibility="hidden";
             p12.style.visibility="hidden";
             img3.style.visibility="hidden";
             img2.style.visibility="visible";
            }
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
          
		  
		  <form action="" method="POST">
				<div class="productheading">
				   <h1 key="PH1" class="tr">Select Your Bottom Part:</h1>
				   <h2 key="PH2" class="tr">Select Your Top Part:</h2>
				</div>    
				<hr class="vertical"/>
			   <div class="firstimg">       
				   <img src = "Images/Bottom_Red.PNG" id = "img" name="imagetop1"/>
			   </div>
			   <div class="secondimg">
				   <img src = "Images/Bottom_Red_1.PNG" id = "img1" style="visibility: hidden;" name="imagetop2"/>
			   </div>
			   <div class="firstround">     
				   <input type="button" onclick="demoShow()" value="Round" />
				   <input type="button" onclick="demoShowS()" value="Square" />
			   </div>
			   <div class="buttonbox">
			<input id="p1" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: Red;" value="" onclick="pic1()" /> 
			<input id="p2" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: White;" value="" onclick="pic2()"/>
			<input id="p3" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: Black;" value="" onclick="pic3()"/>
			
			<input id="p4" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: Red; visibility: hidden;" value="" onclick="pic4()" /> 
			<input id="p5" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: White; visibility: hidden;" value="" onclick="pic5()"/>
			<input id="p6" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: Black; visibility: hidden;" value="" onclick="pic6()"/>
				</div>
				<!--top images-->
				 <div class="firstimg1">       
				   <img src = "Images/Top_Red.PNG" id = "img2" name="imagebottom1"/>
			   </div>
			   <div class="secondimg1">
				   <img src = "Images/Top_Red_1.PNG" id = "img3" name="imagebottom2" style="visibility: hidden;"/>
			   </div>
            
			   <div class="firstround1">     
				   <input id="Btn" type="button" onclick="dShow()" value="Round" />
				   <input id="Btn1" type="button" onclick="dShowS()" value="Square" />
			   </div>
				<div class="buttonbox1">
			<input id="p7" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: Red;" value="" onclick="pic7()" /> 
			<input id="p8" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: White;" value="" onclick="pic8()"/>
			<input id="p9" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: Black;" value="" onclick="pic9()"/>
			
			<input id="p10" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: Red; visibility: hidden;" value="" onclick="pic10()" /> 
			<input id="p11" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: White; visibility: hidden;" value="" onclick="pic11()"/>
			<input id="p12" type="button" style="width: 30px; height: 30px; margin-right: 50px; background: Black; visibility: hidden;" value="" onclick="pic12()"/>
				</div>
			<div class="namedesign"><h1 key="ND1" class="tr">Select Design:</h1><h2 key="ND2" class="tr">Select Design:</h2></div>    
			<div class="namecolour"><h1 key="NC1" class="tr">Select Colour:</h1><h2 key="NC2" class="tr">Select Colour:</h2></div>
			<div>
			<label class="quantityB"><p key="QT1" class="tr">Quantity:</p></label>
			<input class="Btmqnty" min="1" type="number" id="quantityB" name="quantityB" value="1" />
			</div>
			<div>
			<label class="quantityT"><p key="QT1" class="tr">Quantity:</p></label>
			<input class="Topqnty" min="1" type="number" id="quantityT" name="quantityT" value="1" />
			<input class="Topqnty"  type="hidden" id="top1" name="top1" value="" />
			<input class="Topqnty" type="hidden" id="top2" name="top2" value="" />
			<input class="Topqnty" type="hidden" id="bottom1" name="bottom1" value="" />
			<input class="Topqnty"  type="hidden" id="bottom2" name="bottom2" value="" />
			</div>
			<div class="kart">
                <button name="upload" class="kartbtn" style="margin-left:-190px;"><p key="BTN" class="tr">Proceed to Cart</p></button>
             </div>
			 
        </form>
		
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