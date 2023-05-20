<?php



// Includes the configuration file and the ReceptionistClass file

@include 'config.php';
@include 'ReceptionistClass.php';

// Checks if the 'BookRoom' button was clicked

if(isset($_POST['SendMail'])){

 
   // Creates a new Admin object with the user input values and calls the 'AddUser' method

   $Receptionist = new Receptionist('','','' ,'' ,'' );
   $Receptionist->SendMails(mysqli_real_escape_string($conn,$_POST['id']), mysqli_real_escape_string($conn,$_POST['sender']),mysqli_real_escape_string($conn,$_POST['receiver']),mysqli_real_escape_string($conn,$_POST['message']));
   
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
      <input type="text" name="sender" required placeholder="enter your mail">
      <input type="text" name="receiver" required placeholder="enter receiver mail">
      <input type="text" name="message" required placeholder="enter your message">

      
      
      
 
      <input type="submit" name="SendMail" value="Send Mail" class="form-btn">
     
    


      </select>

      
   </form>

</div>

</body>
</html>