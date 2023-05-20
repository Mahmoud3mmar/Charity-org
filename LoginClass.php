


<?php
// Include the database configuration file

@include 'config.php';
 
// Define the User class

class Login {

    // Define public properties for the User object

  
  public $email;
  public $pass;
  public $user_type;
  // Constructor method to set initial values for the properties

  public function __construct($email, $pass, $user_type) {
    $this->email = $email;
    $this->pass = $pass;
    $this->user_type = $user_type;

  }




  public function setEmail($email) {
    $this->email = $email;
  }

  public function setPassword($pass) {
    $this->pass = $pass;
  }

  public function setUserType($user_type) {
    $this->user_type = $user_type;
  }



  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return $this->pass;
  }

  public function getUserType() {
    return $this->user_type;
  }



  public function LoggingIn($email, $pass, $user_type) {

        // establish database connection
    $conn = mysqli_connect('localhost','root','','user_db');
    if(isset($_POST['Login'])){
   
       
     
        $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
     
        $result = mysqli_query($conn, $select);
     
        if(mysqli_num_rows($result) > 0){
     
           $row = mysqli_fetch_array($result);
     
           if($row['user_type'] == 'admin'){
     
              $_SESSION['admin_name'] = $row['name'];
              header('location:admin_page.php');
           
           }elseif($row['user_type'] == 'receptionist'){
     
              $_SESSION['user_name'] = $row['name'];
              header('location:Receptionist_page.php');
     
           }elseif($row['user_type'] == 'WareHouse Manager'){
            $_SESSION['user_name'] = $row['name'];
            header('location:WareHouseManager_Page.php');

           }elseif($row['user_type'] == 'Accountant'){
            $_SESSION['user_name'] = $row['name'];
            header('location:Accountant_page.php');
           }
            
        //    elseif($row['user_type'] == 'Accountant'){
     
        //     $_SESSION['user_name'] = $row['name'];
        //     header('location:user_page.php');
   
        //  }
        //  elseif($row['user_type'] == 'Pharmacist'){
     
        //     $_SESSION['user_name'] = $row['name'];
        //     header('location:user_page.php');
   
        //  }
        //  elseif($row['user_type'] == 'WareHouse Manager'){
     
        //     $_SESSION['user_name'] = $row['name'];
        //     header('location:user_page.php');
   
        //  }
          
        }else{
           $error[] = 'incorrect email or password!';
           if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };   
        }
     
     };
      
  }

};
  






?>
