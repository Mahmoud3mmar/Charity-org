<?php

class DBConnectionPool {
    
    private static $instance;
    private $connections = [];
    
    public function __construct() {
        // Initialize the connection pool with 10 connections
        for ($i = 0; $i < 10; $i++) {
            $conn = new PDO("mysql:host=localhost;dbname=user_db", "root", "");
            $this->connections[] = $conn;  
        } 
    }
    
     public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new DBConnectionPool(); 
        }
        return self::$instance;
    }
     
     public function getConnection() {
        // Get an unused connection from the pool
        $conn = array_shift($this->connections);
        
        if (!$conn) { 
            // Create a new connection if needed       
            $conn = new PDO("mysql:host=localhost;dbname=user_db", "root", "");
        }
 
        return $conn;
    }  
     
    public function returnConnection($connection) {
        // Close the connection 
        $connection = null; 
        
        // Add a new connection to the pool
        $this->connections[] = new PDO("mysql:host=localhost;dbname=user_db", "root", "");  
     }
}
?>

<!-- $connectionPool = DBConnectionPool::getInstance();

// Get a connection
$databaseConnection = $connectionPool->getConnection();

// Run query   
$databaseConnection->query('SELECT * FROM users');

// Do more queries ...

// Return connection to pool
$connectionPool->returnConnection($databaseConnection);

// Get another connection
$databaseConnection = $connectionPool->getConnection();

// Run more queries...

// Return connection  
$connectionPool->returnConnection($databaseConnection); -->