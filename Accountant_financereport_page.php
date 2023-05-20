<?php



// Includes the configuration file 

@include 'config.php';
@include 'AccountantClass.php';

// Checks if the 'BookRoom' button was clicked

if(isset($_POST['provideFinancereports'])){

 

   $Accountant = new Accountant('','','' ,''  );
   $Accountant->provideFinancereports(mysqli_real_escape_string($conn,$_POST['id']), mysqli_real_escape_string($conn,$_POST['category']),mysqli_real_escape_string($conn,$_POST['amount']),mysqli_real_escape_string($conn,$_POST['date']));
   
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
      <select name="category">
         <option value="bills">Bills</option>
         <option value="medicine">medicine</option>         
      </select>
      <input type="text" name="amount" required placeholder="enter amount ">
      <input type="date" name="date" required placeholder="enter your date">


      
      
      
 
      <input type="submit" name="provideFinancereports" value="Provide Finance Report" class="form-btn">
     
    


      </select>

      
   </form>

</div>

</body>
</html>