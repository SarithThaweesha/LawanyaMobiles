<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge" >
    <meta name="viewport" content="width=device-width,initial-scale=1.0" >

    <title>LAWANYA mobiles</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="style.css" >
</head>

<body>
<?php


if(isset($_POST['submit'])){
	include 'Connectionadmin.php';
	$username=$_POST["txtusername"];
	$password=$_POST["txtpassword"];
	$sql="SELECT * FROM adminlogin WHERE Username='$username' and Password ='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if(mysqli_num_rows($result)==1){
		header ("location:adminAcc.php");
		}else{echo"Your Name or Password is invalid";}}
	
else { header ("location:login.html");}
?>
</body>
</html>
