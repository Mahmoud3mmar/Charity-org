<?php

@include 'config.php';
@include 'LoginClass.php';

session_start();

if(isset($_POST['Login'])){

   $login= new Login (mysqli_real_escape_string($conn,$_POST['email']),md5($_POST['password']),$_POST['user_type']);
   $login->LoggingIn(mysqli_real_escape_string($conn,$_POST['email']),md5($_POST['password']),$_POST['user_type']);
   
   

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="Login" value="login now" class="form-btn">
      <!-- <p>don't have an account? <a href="register_form.php">register now</a></p> -->
   </form>

</div>

</body>
</html>