<?php
session_start();
$connection=mysqli_connect("localhost","root","");
if(!$connection)
{
	die("Database connection failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection,'bolt');
if(!$select_db)
{
	die("Database selection failed" . mysqli_error($connection));
}
if(isset($_POST['username']) and isset($_POST['password']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query= "select * from qc where Username='$username' and Password='$password'";
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		$_SESSION['username']=$username;
		echo "<script> window.location.assign('QCFeedback.php'); </script>";
	}
	else
	{
		echo "<script> Invalid login credentials </script>";
	}
}
?>