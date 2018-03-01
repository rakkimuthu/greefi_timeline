<?php
include_once "../model/db.php";
$id =$_GET['id'];
$sql = "DELETE FROM timeline_data WHERE sno	=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
    header("location:../view/success.php?status=success");
} else {
    echo "Error deleting record: " ;
    header("location:../view/success.php?status=error");    
}
?>