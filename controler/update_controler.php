
<?php
include_once "../model/db.php";
$name = $_POST['name'];
$date = $_POST['date'];
$client= $_POST['client'];
$description= $_POST['description'];

$id=$_GET['id'];
 $sql = "update timeline_data SET name = '$name',date = '$date',client = '$client',description = '$description' WHERE sno='$id'";


$entry = mysqli_query($conn,$sql);

if ($entry) {
echo "Data Added Successfully.</p>";
     header("location:../view/success.php");
}
else
{

echo "Data not Successfully.</p>";
}

?>
