<?php
session_start();
if (empty($_SESSION["username"])) {
	 header("location: index.php");
}    
?>
<html> 
<head>
<title>Welcome</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
	.footer {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #efefef;
  text-align: center;
}
.section{
  text-align: center; 
  justify-content: center;

}
</style>
</head>
<body > 
	<nav class="navbar navbar-inverse" style ="background: darkblue;">
	     <p class="navbar-brand " > <a href="success.php">WELCOME</p></a>
      
	  <div class="container-fluid">
	    <div class="navbar-header">
	    </div>
	   
	    <div class="nav navbar-nav navbar-right">
	    	 <li class="navbar-brand"><?php echo $_SESSION["username"] ?></li>
	      <li><a href="../controler/logout_controler.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	    </div>
	  </div>
	</nav>
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
                      <a href='../controler/delete_controler.php?id=".$data['sno']."'>  <button type='button' class='btn btn-danger'>Delete</button></a>
              </td>
            </tr>";
    }
?>
	</tbody>
</table>
</div>	 
<div style ="background: darkblue;" class="footer">© 2018 Copyright: Greefitech.com</div>
</body>
</html>