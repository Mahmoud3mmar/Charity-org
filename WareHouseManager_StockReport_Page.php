<?php



// Includes the configuration file and the ReceptionistClass file

@include 'config.php';
@include 'WareHouseMangerClass.php';

// Checks if the 'BookRoom' button was clicked

if(isset($_POST['providestockreport'])){

 
   // Creates a new Admin object with the user input values and calls the 'AddUser' method

   $WareHouseManger = new WareHouseManger('','','' ,'' ,'' );
   $WareHouseManger->ProvideStockReports(mysqli_real_escape_string($conn,$_POST['id']), mysqli_real_escape_string($conn,$_POST['item_type']),mysqli_real_escape_string($conn,$_POST['quantity']),mysqli_real_escape_string($conn,$_POST['expire_date']),mysqli_real_escape_string($conn,$_POST['date']));
   
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
      <select name="item_type">
         <option value="medicine">medicine</option>
         <option value="Paper">Paper</option>
         <option value="physicalitems">physical items</option>
         
      </select>
      <input type="text" name="quantity" required placeholder="enter quantity ">
      <input type="date" name="expire_date" required placeholder="enter your expire date">
      <input type="date" name="date" required placeholder="enter your date">


      
      
      
 
      <input type="submit" name="providestockreport" value="Provide Stock Report" class="form-btn">
     
    


      </select>

      
   </form>

</div>

</body>
</html>