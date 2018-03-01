  <?php 
session_start();
if (empty($_SESSION["username"])) {
   header("location: ../view/index.php");
}    
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
<form method="post" action="../controler/insert_controler.php" >  
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
<div style ="background: darkblue;" class="footer">© 2018 Copyright: Greefitech.com</div>
</body>
</html>
