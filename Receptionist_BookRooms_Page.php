<?php



// Includes the configuration file and the ReceptionistClass file

@include 'config.php';
@include 'ReceptionistClass.php';

// Checks if the 'BookRoom' button was clicked

if(isset($_POST['BookRoom'])){

 
   // Creates a new Admin object with the user input values and calls the 'AddUser' method

   $Receptionist = new Receptionist('','','' ,'' ,'' );
   $Receptionist->BookRoom(mysqli_real_escape_string($conn,$_POST['id']), mysqli_real_escape_string($conn,$_POST['bed_no']),mysqli_real_escape_string($conn,$_POST['orhpan_id']));
   
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
      <input type="text" name="id" required placeholder="enter Room ID">
      <input type="text" name="bed_no" required placeholder="enter Bed Number">
      <input type="text" name="orhpan_id" required placeholder="enter Orphan ID">

      
      
      
 
      <input type="submit" name="BookRoom" value="BookRoom" class="form-btn">
     
    


      </select>

      
   </form>

</div>

</body>
</html>