<?php
session_start();

@include 'config.php';
@include 'AdminClass.php';

if(isset($_POST['Show-Table'])){

   

	

	$admin= new Admin ('','','','');
	$admin->ShowAppointments('','','','');

};




?>





<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>...</h3>
      <?php
    
      ?>
     

	 <!-- <input type="text" name="id" required placeholder="enter ID">
      <select name="Category">
         <option value="VIP">VIP</option>
         <option value="meeting">meeting</option>
         <option value="GovermentVist">Goverment Vist</option>
         


      </select>
      <input type="date" name="date" required placeholder="enter date">
      <input type="text" name="message" required placeholder="enter your message">

       -->


      <input type="submit" name="Show-Table" value="Show Appointments" class="form-btn">
      
   </form>

</div>

</body>
</html>