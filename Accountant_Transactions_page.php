<?php



// Includes the configuration file 

@include 'config.php';
@include 'AccountantClass.php';

// Checks if the 'BookRoom' button was clicked

if(isset($_POST['provideTransactions'])){

 

   $Accountant = new Accountant('','','' ,'');
   $Accountant->provideTransactions(mysqli_real_escape_string($conn,$_POST['id']), mysqli_real_escape_string($conn,$_POST['payment_type']),mysqli_real_escape_string($conn,$_POST['value']),mysqli_real_escape_string($conn,$_POST['date']),$_POST['donner_name']);
   
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
      <select name="payment_type">
         <option value="ViaCash">Via Cash</option>
         <option value="ViaVisa">Via Visa</option>         
         <option value="ViaBank">Via Bank Transfer</option>      
      </select>
      <input type="text" name="value" required placeholder="enter value ">
      <input type="date" name="date" required placeholder="enter your date">
      <input type="text" name="donner_name" required placeholder="enter donner name">



      
      
      
 
      <input type="submit" name="provideTransactions" value="Provide Transactions" class="form-btn">
     
    


      </select>

      
   </form>

</div>

</body>
</html>