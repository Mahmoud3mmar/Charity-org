



<?php

// include config file and UserClass file

include 'config1.php';
@include 'UserClass.php';
 




// create a class Admin which inherits from class User

 class WareHouseManger extends User {
  
    

 
 
    



   public function ProvideStockReports($id,$item_type, $quantity,$expire_date,$date){

        // Establish database connection
  
        $conn = mysqli_connect('localhost','root','','user_db');
        // Check if the "stockreport" form has been submitted
        if(isset($_POST['providestockreport'])){
        
        
        
        
              // Check if the stockreport already exists in the database
        
        $select = " SELECT * FROM stockreport  WHERE id = '$id' && item_type = '$item_type' && quantity = '$quantity' &&  'expire_date' = '$expire_date'&&date='$date' ";
        
        $result = mysqli_query($conn, $select);
          // If the stockreport already Occupied, display an error message
        
        if(mysqli_num_rows($result) > 0){
            $error[] = 'stockreport  already exist!';
          if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };  
        }else{
                  //  add stockreport to the database
           $error[] = 'stockreport  Send Successfuly!';
           if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };  
        
        
           $insert = "INSERT INTO stockreport(id,item_type,quantity,expire_date,date) VALUES('$id','$item_type','$quantity','$expire_date','$date')";
            
           mysqli_query($conn, $insert);
             
        }
        
        };
        
        
        }
        

 }
?>
