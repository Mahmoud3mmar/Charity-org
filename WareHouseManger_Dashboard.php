<?php

@include 'config.php';

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/Tables.css">

</head>
<body>
   
<div class="DashBoardcontainer">

   <div class="content">

      <h3>hi, <span>WareHoue Manager</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <br></br>
      
      
	  <a href="WareHouseManager_StockReport_Page.php" class="btn"> Provide StockReport </a>


     <a href="logout.php" class="btn">logout</a>



   </div>






   

   
</div>




</body>
</html>