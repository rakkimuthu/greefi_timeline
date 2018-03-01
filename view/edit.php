<?php   
include_once '../controller/function_controller.php';
  write();
include_once "../model/db.php";
 
	  $id = $_GET['id'];
	  $sql="SELECT * FROM timeline_data WHERE sno='$id'";
		$res= mysqli_query($conn,$sql);
		$row= mysqli_fetch_array($res);
    include_once 'header.php';
?>

<form method="post" action="../controller/update_controller.php?id=<?php echo $id ?>" >  
    <div class="col-sm-offset-3 col-sm-9">
      Project Name: <input type="text" name="name" value="<?php echo $row['name']?>">

      <br><br>
      Date: <input type="date" name="date"  value="<?php echo $row['date']?>">
     
      <br><br>
      Client Name: <input type="text" name="client" value="<?php echo $row['client']?>">
     
      <br><br>
      Description: <textarea name="description" rows="5" cols="40" ><?php echo $row['description'];?></textarea>
      <br><br>
      
      <br><br>
     <button>submit</button>
    </div>  
</form>
<?php include_once 'footer.php';?>
