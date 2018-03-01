<html> 
<head>
<title>Welcome</title>
<link rel="stylesheet" type="text/css" href="../css/colour.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body > 
	<nav class="navbar navbar-inverse" style ="background: darkblue;">
	     <p class="navbar-brand " > <a href="success.php">WELCOME</p></a>
      
	  <div class="container-fluid">
	    <div class="navbar-header">
	    </div>
	   
	    <div class="nav navbar-nav navbar-right">
	    	 <li class="navbar-brand"><?php echo $_SESSION["username"] ?></li>
	      <li><a href="../controller/logout_controller.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	    </div>
	  </div>
	</nav>