<?php   
session_start();
if (empty($_SESSION["username"])) {
   header("location: ../view/index.php");
}    
  
include_once "../model/db.php";
 
	  $id = $_GET['id'];
	  $sql="SELECT * FROM timeline_data WHERE sno='$id'";
		$res= mysqli_query($conn,$sql);
		$row= mysqli_fetch_array($res);
?>
<html>
<head>
<title></title>
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
</style>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body > 
  <nav class="navbar navbar-inverse" style ="background: darkblue";>
      
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" class="text-center" href="../view/success.php">Welcome</a>
      </div>
     
      <div class="nav navbar-nav navbar-right">
      </div>
    </div>
  </nav>
<form method="post" action="update_controler.php?id=<?php echo $id ?>" >  
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
<div style ="background: darkblue;" class="footer">© 2018 Copyright: Greefitech.com</div>
</body>
</html>
