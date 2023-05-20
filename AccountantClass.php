



<?php

// include config file and UserClass file

include 'config.php';
@include 'UserClass.php';
 





 class Accountant extends User {
  
    

 
 
    



      public function provideFinancereports($id, $category,$amount,$date){

        // Establish database connection
  
        $conn = mysqli_connect('localhost','root','','user_db');
        // Check if the "stockreport" form has been submitted
        if(isset($_POST['provideFinancereports'])){
        
        
        
        
              // Check if the stockreport already exists in the database
        
        $select = " SELECT * FROM financereport  WHERE id = '$id' && category = '$category' && amount = '$amount' &&  'date' = '$date'";
        
        $result = mysqli_query($conn, $select);
          // If the financereport already Occupied, display an error message
        
        if(mysqli_num_rows($result) > 0){
            $error[] = 'financereport  already exist!';
          if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };  
        }else{
                  //  add financereport to the database
           $error[] = 'financereport  Send Successfuly!';
           if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };  
        
        
           $insert = "INSERT INTO financereport(id,category,amount,date) VALUES('$id','$category','$amount','$date')";
            
           mysqli_query($conn, $insert);
             
        }
        
        };
        
        
        }
        







    




        public function provideTransactions($id,$payment_type,$value,$date,$donner_name){

            // Establish database connection
      
            $conn = mysqli_connect('localhost','root','','user_db');
            // Check if the "transactions" form has been submitted
            if(isset($_POST['provideTransactions'])){
            
            
            
            
                  // Check if the stockreport already exists in the database
            
            $select = " SELECT * FROM transactions  WHERE id = '$id' && payment_type = '$payment_type' && value = '$value' &&  'date' = '$date' &&  'donner_name' = '$donner_name' ";
            
            $result = mysqli_query($conn, $select);
              // If the Transactions already Occupied, display an error message
            
            if(mysqli_num_rows($result) > 0){
                $error[] = 'Transactions  already exist!';
              if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };  
            }else{
                      //  add transactions to the database
               $error[] = 'Transactions  Send Successfuly!';
               if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };  
            
            
               $insert = "INSERT INTO transactions(id,payment_type,value,date,donner_name) VALUES('$id','$payment_type','$value','$date','$donner_name')";
                
               mysqli_query($conn, $insert);
                 
            }
            
            };
            
            
            }
            
    
 }
?>
