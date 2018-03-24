<?php

include 'config.php';
$ordernumber = $_POST["ordernumber"];
$feedback = $_POST["feedback"];


if($mysqli->query("UPDATE orders SET QCFeedback='$feedback' WHERE OrderId='$ordernumber'")){
	echo '<h1>feedback submitted</h1>';
	echo '<br/>';
}
header ("location:QCFeedback.php");
?>
