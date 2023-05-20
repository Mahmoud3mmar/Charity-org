<?php



// Includes the configuration file and the ReceptionistClass file

@include 'config.php';
@include 'ReceptionistClass.php';

// Checks if the 'BookRoom' button was clicked

if(isset($_POST['SendAppointments'])){

 
   // Creates a new Admin object with the user input values and calls the 'AddUser' method

   $Receptionist = new Receptionist('','','' ,'' ,'' );
   $Receptionist->SendAppointments(mysqli_real_escape_string($conn,$_POST['id']), mysqli_real_escape_string($conn,$_POST['Category']),mysqli_real_escape_string($conn,$_POST['date']),mysqli_real_escape_string($conn,$_POST['message']));
   
}






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
      <input type="text" name="id" required placeholder="enter ID">
      <select name="Category">
         <option value="VIP">VIP</option>
         <option value="meeting">meeting</option>
         <option value="GovermentVist">Goverment Vist</option>
         


      </select>
      <input type="date" name="date" required placeholder="enter date">
      <input type="text" name="message" required placeholder="enter your message">

      
      
      
 
      <input type="submit" name="SendAppointments" value="Send Appointments" class="form-btn">
     
    


      </select>

      
   </form>

</div>

</body>
</html>