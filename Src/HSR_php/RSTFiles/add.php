<?php

include 'config.php';

$fname = $_GET["Status"];


if($mysqli->query("UPDATE `orders` SET `Status` = '$fname' WHERE `Order ID` = '2';")){
	echo 'Data inserted';
	echo '<br/>';
}


?>