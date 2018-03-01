<?php
include_once '../controller/function_controller.php';
  write(); 
include_once 'header.php';    
?>

	    <div >
	    	<table class="table table-bordered">
        <thead>
         <tr >
            <th class="text-center">PROJECTS</th>
            <th class="text-center"><a href="add.php"><button type="button" class="btn btn-success">Add</button></a></th>

         </tr>
        </thead> 

        </table> 	
        </div>


  <?php
  echo "<pre>";
  include_once '../model/db.php';
  $sql = "SELECT * FROM timeline_data";
  $entry = mysqli_query($conn,$sql);
  ?>


<table  class="table table-bordered">
	<thead>
		<tr>
			<th>NAME</th>
			<th>DATE</th>
			<th>CLIENT</th>
			<th>DESCRIPTION</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>

<?php
    while($data = mysqli_fetch_array($entry)) {
      echo "<tr>
              <td>".$data['name']."</td>
              <td>".$data['date']."</td>  
            	<td>".$data['client']."</td>
            	<td>".$data['description']."</td>
            	<td><a href='edit.php?id=".$data['sno']."'>  <button type='button' class='btn btn-warning'>Edit</button></a>
                      <a href='../controller/delete_controller.php?id=".$data['sno']."'>  <button type='button' class='btn btn-danger'>Delete</button></a>
              </td>
            </tr>";
    }
?>
	</tbody>
</table>
</div>	 
<?php include_once 'footer.php'; ?>