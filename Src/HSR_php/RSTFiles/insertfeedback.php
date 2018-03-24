<?php

include 'config.php';

$name = $_POST["name"];
$feedback = $_POST["feedback"];
if($mysqli->query("UPDATE orders SET Feedback='$feedback' ORDER BY ID DESC LIMIT 1")){
	echo '<h1>feedback submitted</h1>';
	echo '<br/>';
}
if($mysqli->query("INSERT INTO customerfeedback (CustName, CustFeedback) VALUES('$name', '$feedback')")){
	echo '<h1>feedback submitted</h1>';
	echo '<br/>';
}

header ("location:index.php");
?>
