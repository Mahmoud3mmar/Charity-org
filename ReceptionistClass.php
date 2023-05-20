



<?php

// include config file and UserClass file

include 'config1.php';
@include 'UserClass.php';
 




// create a class Admin which inherits from class User

 class Receptionist extends User {
  
    

 
 
    

    public function BookRoom($id,$bed_no, $orphan_id){

            // Establish database connection

    $conn = mysqli_connect('localhost','root','','user_db');
    // Check if the "AddVolunteer" form has been submitted
    if(isset($_POST['BookRoom'])){
      
   
   
   
            // Check if the volunteer already exists in the database

      $select = " SELECT * FROM orphan_rooms WHERE id = '$id' && bed_no = '$bed_no' &&  	orphan_id = '$orphan_id' ";
   
      $result = mysqli_query($conn, $select);
        // If the Bed already Occupied, display an error message

      if(mysqli_num_rows($result) > 0){
          $error[] = 'Bed already Occupied!';
        if(isset($error)){
          foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
          };
      };  
      }else{
                // If the Bed isnt Occupied, add them to the database

         $error[] = 'Bed Occupied Successfuly!';
         if(isset($error)){
          foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
          };
      };  
   
   
         $insert = "INSERT INTO orphan_rooms(id, bed_no,orphan_id) VALUES('$id','$bed_no','$orphan_id')";
          
            
         mysqli_query($conn, $insert);
           
      }
   
   };
    
  
    }




   public function SendMails($id,$sender, $receiver,$message){

      // Establish database connection

      $conn = mysqli_connect('localhost','root','','user_db');
      // Check if the "AddVolunteer" form has been submitted
      if(isset($_POST['SendMail'])){
      
      
      
      
            // Check if the volunteer already exists in the database
      
      $select = " SELECT * FROM mails WHERE id = '$id' && sender = '$sender' && 	receiver = '$receiver' &&  'message' = '$message' ";
      
      $result = mysqli_query($conn, $select);
        // If the Bed already Occupied, display an error message
      
      if(mysqli_num_rows($result) > 0){
          $error[] = 'Mail already Occupied!';
        if(isset($error)){
          foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
          };
      };  
      }else{
                //  add Mail to the database
         $error[] = 'Mail Send Successfuly!';
         if(isset($error)){
          foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
          };
      };  
      
      
         $insert = "INSERT INTO mails(id,sender,receiver,message) VALUES('$id','$sender','$receiver','$message')";
          
            
         mysqli_query($conn, $insert);
           
      }
      
      };
      
      
      }
      

   public function SendAppointments($id,$category, $date,$message){

        // Establish database connection
  
        $conn = mysqli_connect('localhost','root','','user_db');
        // Check if the "AddVolunteer" form has been submitted
        if(isset($_POST['SendAppointments'])){
        
        
        
        
              // Check if the volunteer already exists in the database
        
        $select = " SELECT * FROM appointments  WHERE id = '$id' && category = '$category' && 	date = '$date' &&  'message' = '$message' ";
        
        $result = mysqli_query($conn, $select);
          // If the Bed already Occupied, display an error message
        
        if(mysqli_num_rows($result) > 0){
            $error[] = 'appointments  already Occupied!';
          if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };  
        }else{
                  //  add Mail to the database
           $error[] = 'appointments  Send Successfuly!';
           if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };  
        
        
           $insert = "INSERT INTO appointments (id,category,date,message) VALUES('$id','$category','$date','$message')";
            
              
           mysqli_query($conn, $insert);
             
        }
        
        };
        
        
        }
        

 }
?>
