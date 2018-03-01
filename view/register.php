<html>
<head>
<title>Welcome!</title>
<head>
<link rel="stylesheet" type="text/css" href="../css/list.css">
</head>
<body>  
<form name="form1" method="post" action="../controler/login_controler.php">

<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container">
    <p><input type="username" name="username" placeholder="username" ></p>
    <p><input type="password" name="password" placeholder="Password"></p>
    <p><input type="submit" value="Log in"></p>
  </form>
  <p class="aligh"><a  style="color:white" href="signup.php">register</a></p>
</div>
</form>
</body>
</html>
<?php
session_start();
if (isset($_SESSION["username"])) {
   header("location: success.php");
}
?>