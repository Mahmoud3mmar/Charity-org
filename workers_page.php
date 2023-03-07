<?php

@include 'config.php';

if(isset($_POST['AddWorker'])){

   $name = mysqli_real_escape_string($conn, $_POST['worker_name']);
   $type = mysqli_real_escape_string($conn, $_POST['worker_type']);


   $select = " SELECT * FROM workers WHERE worker_name = '$name' && worker_type = '$type' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   }else{
      $error[] = 'user Added!';


      $insert = "INSERT INTO workers(worker_name, worker_type) VALUES('$name','$type')";
       
         
      mysqli_query($conn, $insert);
     // header('location:dashboard_page.php');
        
   }

};



if(isset($_POST['RemoveWorker'])){

   $id = mysqli_real_escape_string($conn, $_POST['id']);

   $name = mysqli_real_escape_string($conn, $_POST['worker_name']);

 
   $select = " SELECT * FROM workers WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user Found!----Deleted...';


      
      $delete = " DELETE FROM workers WHERE id = '$id'";
      mysqli_query($conn, $delete);
     // header('location:dashboard_page.php');

   }

};



if(isset($_POST['UpdateWorker'])){

   $id = mysqli_real_escape_string($conn, $_POST['id']);

   $name = mysqli_real_escape_string($conn, $_POST['worker_name']);

   $type = mysqli_real_escape_string($conn, $_POST['worker_type']);
 
   $select = " SELECT * FROM workers WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user Found!----Updated...';

 
      
      $Update = " UPDATE  workers SET id = '$id' , worker_name = '$name' ,worker_type = '$type' WHERE id = '$id' ";
      mysqli_query($conn, $Update);
     // header('location:dashboard_page.php');

   }

};



if(isset($_POST['FindWorker'])){

   $id = mysqli_real_escape_string($conn, $_POST['id']);

   $name = mysqli_real_escape_string($conn, $_POST['worker_name']);

   $type = mysqli_real_escape_string($conn, $_POST['worker_type']);
 
   $select = " SELECT * FROM workers WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user Found!';

 
      
      // $Update = " UPDATE  workers SET id = '$id' , worker_name = '$name' ,worker_type = '$type' WHERE id = '$id' ";
     // mysqli_query($conn, $Update);
     // header('location:dashboard_page.php');

   }else{
      
      $error[] = 'user Not Found!';

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
      <input type="text" name="id" required placeholder="enter worker ID">
      <input type="text" name="worker_name" required placeholder="enter worker name">
      <input type="text" name="worker_type" required placeholder="enter worker type">
      
      
      
      <!-- <select name="user_type">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select> -->
      <input type="submit" name="AddWorker" value="Add Worker" class="form-btn">
      <input type="submit" name="RemoveWorker" value="Remove Worker" class="form-btn">
      <input type="submit" name="UpdateWorker" value="Update Worker" class="form-btn">
      <input type="submit" name="FindWorker" value="Find Worker" class="form-btn">


      
   </form>

</div>

</body>
</html>