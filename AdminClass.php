



<?php

// include config file and UserClass file

@include 'config.php';
@include 'UserClass.php';
 




// create a class Admin which inherits from class User

 class Admin extends User {
  
    // method to add a new user to the user database

  public function AddUser($name,$email, $pass, $user_type) {

        // establish database connection

    $conn = mysqli_connect('localhost','root','','user_db');
    // if the 'AddUser' button is clicked
    if(isset($_POST['AddUser'])){
      
         // select user with matching email and password from the user database

      $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
            // execute the query

      $result = mysqli_query($conn, $select);


      // if the user already exists, display an error message
      if(mysqli_num_rows($result) > 0){
       
         $error[] = 'user already exist!';
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
        
      }else{
        // insert the new user into the user database and display a success message

         $error[] = 'user created!';
         if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
          
          $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
          mysqli_query($conn, $insert);

          
      }
   
   };
      
    
  }

  // method to remove a user from the user database
  public function RemoveUser($id,$name,$email, $pass, $user_type){
        // establish database connection

    $conn = mysqli_connect('localhost','root','','user_db');
    // if the 'RemoveUser' button is clicked

    if(isset($_POST['RemoveUser'])){


   
          // select user with matching id from the user database

      $select = " SELECT * FROM user_form WHERE id = '$id'  ";
         // execute the query

      $result = mysqli_query($conn, $select);

         // if the user is found, delete the user from the user database and display a success message

      if(mysqli_num_rows($result) > 0){
        $error[] = 'user Found!----Deleted...';
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
   
         
         $delete = " DELETE FROM user_form WHERE id = '$id'";
         mysqli_query($conn, $delete);
   
      }
   
   };
   
  }


  // method to update a user in the user database

  public function UpdateUser($id,$name,$email, $pass, $user_type){
    // establish database connection

    $conn = mysqli_connect('localhost','root','','user_db');
    // if the 'UpdateUser' button is clicked

    if(isset($_POST['UpdateUser'])){

      
          // select user with matching id from the user database

      $select = " SELECT * FROM user_form WHERE id = '$id'  ";
      $result = mysqli_query($conn, $select);
         // if the user is found, update the user in the user database and display a success message

      if(mysqli_num_rows($result) > 0){
         $error[] = 'user Found!----Updated...';
   
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
         
         $Update = " UPDATE  user_form SET id = '$id' , name = '$name' ,email = '$email',password='$pass',user_type = '$user_type' WHERE id = '$id'";
         mysqli_query($conn, $Update);
   
      }else{
        $error[] = 'user Not Found!----Updated...';
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
   
      }
   
   };
   








  }






  









  /////////////////////////////////////////////------Orphans----/////////////////////////////////////////////////////////


  public function AddOrphan($id,$name, $age, $register,$room) {

    
    $conn = mysqli_connect('localhost','root','','user_db');
    // Create a new User object with the provided email, password, and usertype
    if(isset($_POST['AddOrphan'])){


        
    
  
     
   
      $select = " SELECT * FROM oprhans WHERE id = '$id'";
   
      $result = mysqli_query($conn, $select);
    
      
      if(mysqli_num_rows($result) > 0){
   
         $error[] = 'Orphan already exist!';

         if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
   
      }else{
          $error[] = 'Orphan created!';
          if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
  
          $insert = "INSERT INTO oprhans(name, age, came_at, room_id) VALUES('$name','$age','$register','$room')";
          mysqli_query($conn, $insert);
        }


      
   
   };
      
    
  }




  public function RemoveOrphan($id,$name, $age, $register,$room){
    $conn = mysqli_connect('localhost','root','','user_db');

    if(isset($_POST['RemoveOrphan'])){

     
     
      
        $select = " SELECT * FROM oprhans WHERE id = '$id'  ";
     
        $result = mysqli_query($conn, $select);
     
        if(mysqli_num_rows($result) > 0){
           $error[] = 'Oprhan Found!----Deleted...';
           if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };  
     
     
           
           $delete = " DELETE FROM oprhans WHERE id = '$id'";
           mysqli_query($conn, $delete);
     
        }
     
     };
  }



  public function UpdateOrphan($id,$name,$age, $register, $room){

    $conn = mysqli_connect('localhost','root','','user_db');

    if(isset($_POST['UpdateOrphan'])){

      
    
      $select = " SELECT * FROM oprhans WHERE id = '$id'  ";
      $result = mysqli_query($conn, $select);
   
      if(mysqli_num_rows($result) > 0){
         $error[] = 'Orphan Found!----Updated...';
   
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
         
         $Update = " UPDATE  oprhans SET id = '$id' , name = '$name' ,age = '$age',came_at='$register',room_id = '$room' WHERE id = '$id'";
         mysqli_query($conn, $Update);
   
      }else{
        $error[] = 'Orphan Not Found!';
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
   
      }
   
   };
   








  }








  /////////////////////////////////////////////------Volunteers----/////////////////////////////////////////////////////////
 
 
  // AddVolunteer function

  public function AddVolunteer($id,$name, $age, $phone,$type) {

        // Establish database connection

    $conn = mysqli_connect('localhost','root','','user_db');
    // Check if the "AddVolunteer" form has been submitted
    if(isset($_POST['AddVolunteer'])){
      
   
   
   
            // Check if the volunteer already exists in the database

      $select = " SELECT * FROM volunteers WHERE id = '$id' && volunteer_name = '$name'  ";
   
      $result = mysqli_query($conn, $select);
        // If the volunteer already exists, display an error message

      if(mysqli_num_rows($result) > 0){
          $error[] = 'Volunteer already exist!';
        if(isset($error)){
          foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
          };
      };  
      }else{
                // If the volunteer does not exist, add them to the database

         $error[] = 'Volunteer Added!';
         if(isset($error)){
          foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
          };
      };  
   
   
         $insert = "INSERT INTO volunteers(id, volunteer_name,volunteer_age,volunteer_phone,volunteer_type) VALUES('$id','$name','$age','$phone', '$type')";
          
            
         mysqli_query($conn, $insert);
           
      }
   
   };
    
  }



    // RemoveVolunteer function

  public function RemoveVolunteer($id,$name, $age, $phone,$type){
        // Establish database connection

    $conn = mysqli_connect('localhost','root','','user_db');
        // Check if the "RemoveVolunteer" form has been submitted

    if(isset($_POST['RemoveVolunteer'])){

            // Check if the volunteer exists in the database

        $select = " SELECT * FROM volunteers WHERE id = '$id'  ";
        $result = mysqli_query($conn, $select);
             // If the volunteer exists, display a message and remove them from the database

        if(mysqli_num_rows($result) > 0){
           $error[] = 'Volunteer Found!----Deleted...';
           if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };  
     
     
           
           $delete = " DELETE FROM volunteers WHERE id = '$id'";
           mysqli_query($conn, $delete);
     
        }
     
     };
  }

  // UpdateVolunteer function

  public function UpdateVolunteer($id,$name, $age, $phone,$type){
    // Establish database connection

    $conn = mysqli_connect('localhost','root','','user_db');
    // Check if the "UpdateVolunteer" form has been submitted

    if(isset($_POST['UpdateVolunteer'])){

      
          // Check if the volunteer exists in the database

      $select = " SELECT * FROM volunteers WHERE id = '$id'  ";
      $result = mysqli_query($conn, $select);
   
              // If the volunteer exists, display a message and update their information in the database

      if(mysqli_num_rows($result) > 0){
         $error[] = 'Volunteer Found!----Updated...';
   
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   

         $Update = " UPDATE volunteers SET id = '$id' , volunteer_name = '$name' ,volunteer_age = '$age',volunteer_phone='$phone',volunteer_type = '$type' WHERE id = '$id'";
         mysqli_query($conn, $Update);
   
      }else{
        $error[] = 'Volunteer Not Found!';
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
   
      }
   
   };
   








  }


 }
?>
