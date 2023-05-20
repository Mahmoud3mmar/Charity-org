


<?php
// Include the database configuration file

@include 'config.php';
@include 'DataBaseClass.php';

// Define the User class

class User {

    // Define public properties for the User object

  public $id;
  public $name;
  public $email;
  public $pass;
  public $user_type;

  
  // Constructor method to set initial values for the properties

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



 
}




?>
