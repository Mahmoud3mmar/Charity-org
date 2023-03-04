<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['worker_name']);
   $type = mysqli_real_escape_string($conn, $_POST['worker_type']);
//    $pass = md5($_POST['password']);
//    $cpass = md5($_POST['cpassword']);
//    $user_type = $_POST['user_type'];

   $select = " SELECT * FROM workers WHERE worker_name = '$name' && worker_type = '$type' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }else{
         $insert = "INSERT INTO workers(worker_name, worker_type) VALUES('$name','$type')";
       
         
         mysqli_query($conn, $insert);
         header('location:dashboard_page.php');
        
   }

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
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="worker_name" required placeholder="enter name">
      <input type="text" name="worker_type" required placeholder="enter worker type">
      
      <!-- <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select> -->
      <input type="submit" name="submit" value="Add Worker" class="form-btn">
      
   </form>

</div>

</body>
</html>