


<?php
@include 'config.php';
 

class User {
  public $id;
  public $name;
  public $email;
  public $pass;
  public $user_type;

  public function __construct($id,$email, $pass, $user_type) {
    $this->id = $id;
    $this->email = $email;
    $this->pass = $pass;
    $this->user_type = $user_type;
  }
  public function setid($id) {
    $this->id = $id;
  }

  public function setName($name) {
    $this->name = $name;
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

  public function getid() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
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

//   public function saveUser() {
//     // insert user into database
//     $servername = "localhost";
//     $username = "username";
//     $password = "password";
//     $dbname = "myDB";

//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);
//     // Check connection
//     if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//     }

//     $sql = "INSERT INTO users (email, password, usertype)
//     VALUES ('".$this->email."', '".$this->password."', '".$this->usertype."')";

//     if ($conn->query($sql) === TRUE) {
//       echo "New user created successfully";
//     } else {
//       echo "Error: " . $sql . "<br>" . $conn->error;
//     }

//     $conn->close();
//   }
}



 class Admin extends User {
  
  public function AddUser($name,$email, $pass, $user_type) {

    
    $conn = mysqli_connect('localhost','root','','user_db');
    // Create a new User object with the provided email, password, and usertype
    if(isset($_POST['AddUser'])){
      
   
      $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
   
      $result = mysqli_query($conn, $select);
   
      if(mysqli_num_rows($result) > 0){
   
        // $error[] = 'user already exist!';
   
      }else{
        //  $error[] = 'user created!';
          
          $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
          mysqli_query($conn, $insert);

          
      }
   
   };
      
    
  }


  public function RemoveUser($id,$name,$email, $pass, $user_type){
    $conn = mysqli_connect('localhost','root','','user_db');

    if(isset($_POST['RemoveUser'])){


   
    
      $select = " SELECT * FROM user_form WHERE id = '$id'  ";
   
      $result = mysqli_query($conn, $select);
   
      if(mysqli_num_rows($result) > 0){
         echo ($error[] = 'user Found!----Deleted...');
   
   
         
         $delete = " DELETE FROM user_form WHERE id = '$id'";
         mysqli_query($conn, $delete);
   
      }
   
   };
   
  }



  public function UpdateUser($id,$name,$email, $pass, $user_type){

    $conn = mysqli_connect('localhost','root','','user_db');

    if(isset($_POST['UpdateUser'])){

      
    
      $select = " SELECT * FROM user_form WHERE id = '$id'  ";
      $result = mysqli_query($conn, $select);
   
      if(mysqli_num_rows($result) > 0){
        echo ($error[] = 'user Found!----Updated...');
   
    
         
         $Update = " UPDATE  user_form SET id = '$id' , name = '$name' ,email = '$email',password='$pass',user_type = '$user_type' WHERE id = '$id'";
         mysqli_query($conn, $Update);
        // header('location:dashboard_page.php');
   
      }else{
        echo ($error[] = 'user Not Found!----Updated...');
   
      }
   
   };
   








  }






  
}
?>
