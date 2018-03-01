<html>
<head>
<title>Register</title>
</head>
<body>
<form action="signup.php" method="POST">
  <table id="title">
    <tr>
      <td>First Name:</td>
        <td><input type="text" name="fname" /></td>
      </tr>
    <tr>
      <td>Last Name:</td>
        <td><input type="text" name="lname" /></td>
      </tr>
    <tr>  
      <td>Address:</td>
        <td><input type="text" name="address" /></td>
      </tr>
    <tr>
      <td>Username:</td>
        <td><input type="text" name="username" /></td>
      </tr>
    <tr>
      <td>Password:</td>
        <td><input type="password" name="password" /></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Sign Up" /></td>
      </tr>

  </table>
</div>
</form>
<a href="register.php">login</a>
<?php



if (isset($_POST['submit']))
    {      
    include_once "../model/db.php";

                    $fname=$_POST['fname'];
                    $lname=$_POST['lname'];                 
                    $address=$_POST['address'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    $sql ="INSERT INTO login_details(fname,lname,address,username,password) 
         VALUES ('$fname','$lname','$address','$username','$password')";
         mysqli_query($conn,$sql); 
            }
?>
