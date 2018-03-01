<?php
include_once "../model/db.php";
$sql = "SELECT * FROM timeline_data ORDER BY date DESC";
$entry = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Chart</title>
 <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<p class="loginright"><a href="register.php">login</a></p>
<header>
    
    <h1>Greefitech timeline</h1>
</header>
<br><br>
<ul   class="timeline">
<?php
    $a=0;
while($data = mysqli_fetch_array($entry)) { 
     
     if((($a++)%2)==0){?>
        <li>
          <div class="direction-r">
            <div class="flag-wrapper">
              <span class="hexa"></span>
              <span class="flag"><?php echo ucwords($data['name'])?></span>
              <span class="time-wrapper"><span class="time"><?php echo $newDate = date("d-m-Y", strtotime($data['date']));?></span></span>
            </div>
            <div class="desc"><h4><?php echo ucwords($data['client'])?></h4><?php echo $data['description']?></div>
          </div>
        </li>

 <?php  }else{?>
      <li>
        <div class="direction-l">
          <div class="flag-wrapper">
            <span class="hexa"></span>
            <span class="flag"><?php echo ucwords($data['name'])?></span>
            <span class="time-wrapper"><span class="time" ><?php echo $newDate = date("d-m-Y", strtotime($data['date']));?></span>
          </div>
          <div class="desc"><h4><?php echo ucwords($data['client'])?></h4><?php echo $data['description']?></div>
          </div>
      </li>
  <?php }
 }
?>
 </ul>
</body>
</html>
