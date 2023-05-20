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

      <h3>hi, <span>Receptionist</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <br></br>
      
      <a href="" class="btn"> Check For Emails</a>
      <!-- <a href="logout.php" class="btn">logout</a> -->


	  <a href="Receptionist_SendMails_Page.php" class="btn"> Send Emails<a>
      <!-- <a href="logout.php" class="btn">logout</a> -->


	  <a href="Receptionist_SendAppointments_Page.php" class="btn"> Send Appointments Notifications</a>



	  <a href="Receptionist_BookRooms_Page.php" class="btn"> Book Rooms </a>


     <a href="logout.php" class="btn">logout</a>



   </div>






   
   <!-- aims to show the table when button clicked  -->
   <script>
   var button = document.getElementById("show-table");
   var table = document.getElementById("my-table");
   
   button.addEventListener("click", function() {
      if (table.style.display === "none") {
         table.style.display = "table";
      } else {
         table.style.display = "none";
      }
   });
   </script>
   
</div>




</body>
</html>