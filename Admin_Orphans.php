<?php
// Include the configuration file and the AdminClass.php file

@include 'config.php';
@include 'AdminClass.php';


// If the "AddOrphan" button is clicked, create a new instance of the Admin class and call its AddOrphan method

if(isset($_POST['AddOrphan'])){


   // Create an instance of the Admin class and pass the values from the form to the constructor

   $admin= new Admin (mysqli_real_escape_string($conn, $_POST['orphan_id']), mysqli_real_escape_string($conn, $_POST['orphan_name']),mysqli_real_escape_string($conn, $_POST['orphan_age']), $register = mysqli_real_escape_string($conn, $_POST['orphan_register_date']), mysqli_real_escape_string($conn, $_POST['orphan_room']));
   $admin->AddOrphan(mysqli_real_escape_string($conn, $_POST['orphan_id']), mysqli_real_escape_string($conn, $_POST['orphan_name']),mysqli_real_escape_string($conn, $_POST['orphan_age']), $register = mysqli_real_escape_string($conn, $_POST['orphan_register_date']), mysqli_real_escape_string($conn, $_POST['orphan_room']));
   
   
 
 
 
 };


// If the "RemoveOrphan" button is clicked, create a new instance of the Admin class and call its RemoveOrphan method

if(isset($_POST['RemoveOrphan'])){

      // Create an instance of the Admin class and pass the values from the form to the constructor

   $admin= new Admin (mysqli_real_escape_string($conn, $_POST['orphan_id']), mysqli_real_escape_string($conn, $_POST['orphan_name']),mysqli_real_escape_string($conn, $_POST['orphan_age']), $register = mysqli_real_escape_string($conn, $_POST['orphan_register_date']), mysqli_real_escape_string($conn, $_POST['orphan_room']));
   $admin->RemoveOrphan(mysqli_real_escape_string($conn, $_POST['orphan_id']), mysqli_real_escape_string($conn, $_POST['orphan_name']),mysqli_real_escape_string($conn, $_POST['orphan_age']), $register = mysqli_real_escape_string($conn, $_POST['orphan_register_date']), mysqli_real_escape_string($conn, $_POST['orphan_room']));
   

};


// If the "UpdateOrphan" button is clicked, create a new instance of the Admin class and call its UpdateOrphan method

if(isset($_POST['UpdateOrphan'])){

   
    
   // Create an instance of the Admin class and pass the values from the form to the constructor

   $admin= new Admin (mysqli_real_escape_string($conn, $_POST['orphan_id']), mysqli_real_escape_string($conn, $_POST['orphan_name']),mysqli_real_escape_string($conn, $_POST['orphan_age']), $register = mysqli_real_escape_string($conn, $_POST['orphan_register_date']), mysqli_real_escape_string($conn, $_POST['orphan_room']));
   $admin->UpdateOrphan(mysqli_real_escape_string($conn, $_POST['orphan_id']), mysqli_real_escape_string($conn, $_POST['orphan_name']),mysqli_real_escape_string($conn, $_POST['orphan_age']), $register = mysqli_real_escape_string($conn, $_POST['orphan_register_date']), mysqli_real_escape_string($conn, $_POST['orphan_room']));
   

};


// If the "FindOrphan" button is clicked, retrieve the input values and perform a search in the "orphans" table

if(isset($_POST['FindOrphan'])){
   
   
    $admin= new Admin (mysqli_real_escape_string($conn, $_POST['orphan_id']), mysqli_real_escape_string($conn, $_POST['orphan_name']), mysqli_real_escape_string($conn,$_POST['orphan_age']),mysqli_real_escape_string($conn, $_POST['orphan_register_date']),mysqli_real_escape_string($conn, $_POST['orphan_room']));
   $admin->FindOrphan(mysqli_real_escape_string($conn, $_POST['orphan_id']), mysqli_real_escape_string($conn, $_POST['orphan_name']), mysqli_real_escape_string($conn,$_POST['orphan_age']),mysqli_real_escape_string($conn, $_POST['orphan_register_date']),mysqli_real_escape_string($conn, $_POST['orphan_room']));

 
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