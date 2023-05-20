<?php



// Includes the configuration file and the AdminClass file

@include 'config.php';
@include 'AdminClass.php';

// Checks if the 'AddUser' button was clicked

if(isset($_POST['AddUser'])){

 
   // Creates a new Admin object with the user input values and calls the 'AddUser' method

   $admin= new Admin (mysqli_real_escape_string($conn,$_POST['user_name']), mysqli_real_escape_string($conn,$_POST['user_email']),md5($_POST['user_password']),$_POST['user_type']);
   $admin->AddUser(mysqli_real_escape_string($conn,$_POST['user_name']), mysqli_real_escape_string($conn,$_POST['user_email']),md5($_POST['user_password']),$_POST['user_type']);
   
}

// Checks if the 'RemoveUser' button was clicked

if(isset($_POST['RemoveUser'])){

      // Creates a new Admin object with the user input values and calls the 'RemoveUser' method

   $admin= new Admin ( mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['user_name']), mysqli_real_escape_string($conn,$_POST['user_email']),md5($_POST['user_password']),$_POST['user_type']);
   $admin->RemoveUser(mysqli_real_escape_string($conn, $_POST['id']),mysqli_real_escape_string($conn,$_POST['user_name']), mysqli_real_escape_string($conn,$_POST['user_email']),md5($_POST['user_password']),$_POST['user_type']);
   

  

 
   

};


// Checks if the 'UpdateUser' button was clicked

if(isset($_POST['UpdateUser'])){

     // Creates a new Admin object with the user input values and calls the 'UpdateUser' method

   $admin= new Admin (mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['user_name']), mysqli_real_escape_string($conn,$_POST['user_email']),md5($_POST['user_password']),$_POST['user_type']);
   $admin->UpdateUser(mysqli_real_escape_string($conn, $_POST['id']),mysqli_real_escape_string($conn,$_POST['user_name']), mysqli_real_escape_string($conn,$_POST['user_email']),md5($_POST['user_password']),$_POST['user_type']);

 
};


// Checks if the 'FindUser' button was clicked

if(isset($_POST['FindUser'])){

   $admin= new Admin (mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['user_name']), mysqli_real_escape_string($conn,$_POST['user_email']),md5($_POST['user_password']),$_POST['user_type']);
   $admin->FindUser(mysqli_real_escape_string($conn, $_POST['id']),mysqli_real_escape_string($conn,$_POST['user_name']), mysqli_real_escape_string($conn,$_POST['user_email']),md5($_POST['user_password']),$_POST['user_type']);

 
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
      <input type="text" name="id" required placeholder="enter User ID">
      <input type="text" name="user_name" required placeholder="enter User Name">
      <input type="text" name="user_email" required placeholder="enter User Email">
      <input type="text" name="user_password" required placeholder="enter User Password">

      
      
      
 
      <input type="submit" name="AddUser" value="Add User" class="form-btn">
      <input type="submit" name="RemoveUser" value="Remove User" class="form-btn">
      <input type="submit" name="UpdateUser" value="Update User" class="form-btn">
      <input type="submit" name="FindUser" value="Find User" class="form-btn">
      <select name="user_type">
         <option value="Admin">Admin</option>
         <option value="receptionist">receptionist</option>
         <option value="Accountant">Accountant</option>
         <option value="Pharmacist">Pharmacist</option>
         <option value="WareHouse Manager">WareHouse Manager</option>



      </select>

      
   </form>

</div>

</body>
</html>