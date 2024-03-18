<?php

require '../config/db.php';
/**
 * set PDO::ATTR_ERRMODE to PDO::ERRMODE_EXCEPTION
 * set PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
 */
class Database{
    public $conn;
    public function __construct($config){
        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']}";
        $options = [
            PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ

        ];
  
    try{

        $this->conn = new PDO($dsn, $config['username'], $config['password'], $options);
        // echo 'connnected';
    }
    catch(PDOException $e){
        throw new Exception("Database connection failed{$e->getMessage()}");
        
    }

}

/**
 * Query the database
 * @param string $query
 * @return PDPStatement
 * @throws PDOException
 * $e object
 */

 public function query($query, $params = []){
try{
 $stmt = $this->conn->prepare($query);
 foreach($params as $param => $value){
    $stmt->bindValue(':'. $param, $value);
 }

 $stmt->execute();
 return $stmt;
}
catch(PDOException $e){
    throw new Exception("Query failed to execute($e->getMessage()");
}

 }

}