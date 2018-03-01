<?php
include_once '../controller/function_controller.php';
  write(); 
include_once "../model/db.php";
if(!empty($_SESSION["username"])){
	if (!empty($_POST['name'] && $_POST['date']&&$_POST['client']&&$_POST['description'])) {
    $name=$_POST['name'];                 
    $date=$_POST['date'];
    $client=$_POST['client'];
    $description=$_POST['description'];     
    $sql ="INSERT INTO `timeline_data` (`name`,`date`,`client`,`description`) VALUES ('$name','$date','$client','$description')";
    if( mysqli_query($conn,$sql)){
        header("location:../view/success.php?status=success");
    }
}

}else{
 header("location:../view/success.php?status=error");
}
?>