<?php

@include 'config.php';
if(isset($_POST['AddUser'])){

    $name = mysqli_real_escape_string($conn, $_POST['user_name']);
    $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    $pass = md5($_POST['user_password']);
    $user_type = $_POST['user_type'];
 
    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
 
    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
       $error[] = 'user already exist!';
 
    }else{
        $error[] = 'user created!';

        $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
        mysqli_query($conn, $insert);
    }
 
 };
if(isset($_POST['RemoveUser'])){

   $id = mysqli_real_escape_string($conn, $_POST['id']);

   $name = mysqli_real_escape_string($conn, $_POST['user_name']);

 
   $select = " SELECT * FROM user_form WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user Found!----Deleted...';


      
      $delete = " DELETE FROM user_form WHERE id = '$id'";
      mysqli_query($conn, $delete);

   }

};



if(isset($_POST['UpdateUser'])){

   $id = mysqli_real_escape_string($conn, $_POST['id']);

   $name = mysqli_real_escape_string($conn, $_POST['user_name']);

   $type = mysqli_real_escape_string($conn, $_POST['user_type']);
 
   $select = " SELECT * FROM user_form WHERE id = '$id'  ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user Found!----Updated...';

 
      
      $Update = " UPDATE  user_form SET id = '$id' , name = '$name' ,user_type = '$type' WHERE id = '$id'";
      mysqli_query($conn, $Update);
     // header('location:dashboard_page.php');

   }else{
    $error[] = 'user Not Found!----Updated...';

   }

};



if(isset($_POST['FindUser'])){

    $id = mysqli_real_escape_string($conn, $_POST['id']);
 
    $name = mysqli_real_escape_string($conn, $_POST['user_name']);
 
    $type = mysqli_real_escape_string($conn, $_POST['user_type']);
  
    $select = " SELECT * FROM user_form WHERE id = '$id'  ";
 
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
      <input type="text" name="id" required placeholder="enter User ID">
      <input type="text" name="user_name" required placeholder="enter User Name">
      <input type="text" name="user_email" required placeholder="enter User Email">
      <input type="text" name="user_password" required placeholder="enter User Password">

      
      
      
 
      <input type="submit" name="AddUser" value="Add User" class="form-btn">
      <input type="submit" name="RemoveUser" value="Remove User" class="form-btn">
      <input type="submit" name="UpdateUser" value="Update User" class="form-btn">
      <input type="submit" name="FindUser" value="Find User" class="form-btn">
      <select name="user_type">
         <option value="user">receptionist</option>
         <option value="admin">Accountant</option>
         <option value="admin">Pharmacist</option>
         <option value="admin">WareHouse Manager</option>



      </select>

      
   </form>

</div>

</body>
</html>