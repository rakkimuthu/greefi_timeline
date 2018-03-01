<?php 
session_start();

function write(){  
if (empty($_SESSION["username"])) {
   header("location:index.php");
}   
}

function overwrite(){
if (isset($_SESSION["username"])) {
   header("location: success.php");
}
}
?>