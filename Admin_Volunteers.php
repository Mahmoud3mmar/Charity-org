<?php
// Including the configuration file and AdminClass file

@include 'config.php';
@include 'AdminClass.php';


// Handling AddVolunteer form submission

if(isset($_POST['AddVolunteer'])){
   

   // Creating an instance of Admin class and passing the form values as parameters to the constructor



   
   $admin= new Admin (mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['volunteer_name']), mysqli_real_escape_string($conn, $_POST['volunteer_age']),mysqli_real_escape_string($conn, $_POST['volunteer_phone']),$_POST['volunteer_type']);

      // Calling the AddVolunteer method and passing the form values as parameters

   $admin->AddVolunteer(mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['volunteer_name']), mysqli_real_escape_string($conn, $_POST['volunteer_age']),mysqli_real_escape_string($conn, $_POST['volunteer_phone']),$_POST['volunteer_type']);
};


// Handling RemoveVolunteer form submission

if(isset($_POST['RemoveVolunteer'])){
       // Creating an instance of Admin class and passing the form values as parameters to the constructor

    $admin= new Admin (mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['volunteer_name']), mysqli_real_escape_string($conn, $_POST['volunteer_age']),mysqli_real_escape_string($conn, $_POST['volunteer_phone']),$_POST['volunteer_type']);
       // Calling the RemoveVolunteer method and passing the form values as parameters

    $admin->RemoveVolunteer(mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['volunteer_name']), mysqli_real_escape_string($conn, $_POST['volunteer_age']),mysqli_real_escape_string($conn, $_POST['volunteer_phone']),$_POST['volunteer_type']);
 };



// Handling UpdateVolunteer form submission


if(isset($_POST['UpdateVolunteer'])){
       // Creating an instance of Admin class and passing the form values as parameters to the constructor

    $admin= new Admin (mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['volunteer_name']), mysqli_real_escape_string($conn, $_POST['volunteer_age']),mysqli_real_escape_string($conn, $_POST['volunteer_phone']),$_POST['volunteer_type']);
       // Calling the UpdateVolunteer method and passing the form values as parameters

    $admin->UpdateVolunteer(mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['volunteer_name']), mysqli_real_escape_string($conn, $_POST['volunteer_age']),mysqli_real_escape_string($conn, $_POST['volunteer_phone']),$_POST['volunteer_type']);

};



if(isset($_POST['FindVolunteer'])){
   // Creating an instance of Admin class and passing the form values as parameters to the constructor

$admin= new Admin (mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['volunteer_name']), mysqli_real_escape_string($conn, $_POST['volunteer_age']),mysqli_real_escape_string($conn, $_POST['volunteer_phone']),$_POST['volunteer_type']);
   // Calling the UpdateVolunteer method and passing the form values as parameters

$admin->FindVolunteer(mysqli_real_escape_string($conn, $_POST['id']), mysqli_real_escape_string($conn, $_POST['volunteer_name']), mysqli_real_escape_string($conn, $_POST['volunteer_age']),mysqli_real_escape_string($conn, $_POST['volunteer_phone']),$_POST['volunteer_type']);

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
      <input type="text" name="id" required placeholder="enter Volunteer ID">
      <input type="text" name="volunteer_name" required placeholder="enter Volunteer Name">

      <input type="date" name="volunteer_age" required placeholder="enter Volunteer date of birth">
      <input type="text" name="volunteer_phone" required placeholder="enter Volounteer phone">
      <select name="volunteer_type">
         
         <option value="sorter">sorter</option>
         <option value="drugs searcher">drugs searcher</option>
         <option value="entertainer">entertainer</option>
         <option value="cleaner">cleaner</option>
         <option value="teacher">teacher</option>

      
      
      
 
      <input type="submit" name="AddVolunteer" value="Add Volunteer" class="form-btn">
      <input type="submit" name="RemoveVolunteer" value="Remove Volunteer" class="form-btn">
      <input type="submit" name="UpdateVolunteer" value="Update Volunteer" class="form-btn">
      <input type="submit" name="FindVolunteer" value="Find Volunteer" class="form-btn">
     




      </select>

      
   </form>

</div>

</body>
</html>