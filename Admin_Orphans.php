<?php

@include 'config.php';
if(isset($_POST['AddOrphan'])){


    
    $id = mysqli_real_escape_string($conn, $_POST['orphan_id']);
    $name = mysqli_real_escape_string($conn, $_POST['orphan_name']);
    $age = mysqli_real_escape_string($conn, $_POST['orphan_age']);
    $register = mysqli_real_escape_string($conn, $_POST['orphan_register_date']);
    $room = mysqli_real_escape_string($conn, $_POST['orphan_room']);


   
 
    $select = " SELECT * FROM oprhans WHERE id = '$id'";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
       $error[] = 'Orphan already exist!';
 
    }else{
        $error[] = 'Orphan created!';

        $insert = "INSERT INTO oprhans(name, age, came_at, room_id) VALUES('$name','$age','$register','$room')";
        mysqli_query($conn, $insert);
    }
 
 };
if(isset($_POST['RemoveOrphan'])){

   $id = mysqli_real_escape_string($conn, $_POST['orphan_id']);


 
   $select = " SELECT * FROM oprhans WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'Oprhan Found!----Deleted...';


      
      $delete = " DELETE FROM oprhans WHERE id = '$id'";
      mysqli_query($conn, $delete);

   }

};



if(isset($_POST['UpdateUser'])){

   
    $id = mysqli_real_escape_string($conn, $_POST['orphan_id']);
    $name = mysqli_real_escape_string($conn, $_POST['orphan_name']);
    $age = mysqli_real_escape_string($conn, $_POST['orphan_age']);
    $register = mysqli_real_escape_string($conn, $_POST['orphan_register_date']);
    $room = mysqli_real_escape_string($conn, $_POST['orphan_room']);

 
   $select = " SELECT * FROM user_form WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'Oprhan Found!----Updated...';

 
      
      $Update = " UPDATE  oprhans SET id = '$id' , name = '$name' ,age = '$age',came_at='$register',room_id='room'WHERE id = '$id'";
      mysqli_query($conn, $Update);

   }else{
    $error[] = 'Orphan Not Found!----Updated...';

   }

};



if(isset($_POST['FindOrphan'])){
    $id = mysqli_real_escape_string($conn, $_POST['orphan_id']);
    $name = mysqli_real_escape_string($conn, $_POST['orphan_name']);
    $age = mysqli_real_escape_string($conn, $_POST['orphan_age']);
    $register = mysqli_real_escape_string($conn, $_POST['orphan_register_date']);
    $room = mysqli_real_escape_string($conn, $_POST['orphan_room']);
  
    $select = " SELECT * FROM oprhans WHERE id = '$id'  ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
       $error[] = 'Orphan Found!';
 
  
       
       // $Update = " UPDATE  workers SET id = '$id' , worker_name = '$name' ,worker_type = '$type' WHERE id = '$id' ";
      // mysqli_query($conn, $Update);
      // header('location:dashboard_page.php');
 
    }else{
       
       $error[] = 'Orphan Not Found!';
 
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
      <input type="text" name="orphan_id" required placeholder="enter Orphan ID">
      <input type="text" name="orphan_name" required placeholder="enter Orphan Name">
      <input type="date" name="orphan_age" required placeholder="enter Orphan age">
      <input type="date" name="orphan_register_date" required placeholder="enter Orphan reg. Date">
      <input type="text" name="orphan_room" required placeholder="enter Orphan Room ID">

      
      
      
 
      <input type="submit" name="AddOrphan" value="Add Orphan" class="form-btn">
      <input type="submit" name="RemoveOrphan" value="Remove Orphan" class="form-btn">
      <input type="submit" name="UpdateOrphan" value="Update Orphan" class="form-btn">
      <input type="submit" name="FindOrphan" value="Find Orphan" class="form-btn">
      



      </select>

      
   </form>

</div>

</body>
</html>