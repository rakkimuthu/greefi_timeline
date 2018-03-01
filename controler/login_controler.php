<?php
session_start(); 
include_once "../model/db.php";
$username=($_POST['username']);
$password=($_POST['password']);
$sql ="SELECT * FROM login_details WHERE username='$username' AND  password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);

if(mysqli_num_rows($result)==1) {
	$_SESSION["username"] = $username;
  header("location:../view/success.php");
}else {
  header("location:../view/register.php");
}

?>