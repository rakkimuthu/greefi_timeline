<?php 

include_once '../controller/function_controller.php';
  write(); 
include_once 'header.php';   
?>  

<form method="post" action="../controller/insert_controller.php" >  
    <div class="col-sm-offset-3 col-sm-9">
      <label> Project Name:</label><br>

      <input class="col-sm-3" type="text" name="name">

      <br><br>
      <label>Date:</label><br>
      <input type="date" class="col-sm-3" name="date" width="40" height="40" required>
     
      <br><br>
      <label>Client Name:</label><br><input type="text" class="col-sm-3" name="client" >
     
      <br><br>
      <label>Description:</label><br><textarea name="description" rows="5" cols="40"></textarea>
      <br><br>
      
      <br><br>
     <button>submit</button>
    </div>  
</form>
<?php include_once 'footer.php';