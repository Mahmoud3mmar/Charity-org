<?php

class Connection {

  public function __construct(PDO $conn) {
    $this->conn = $conn;  
  }  
  
  public function query($sql) {        
    return $this->conn->query($sql);           
  }      
  
}
?>
