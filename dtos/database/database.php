<?php

class Database {
    private $host = 'localhost';
    private $dbname = 'db_website';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Lỗi kết nối đến cơ sở dữ liệu: ' . $e->getMessage();
        }
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn = null;
    }

    public function __destruct() {
        $this->closeConnection();
    }

    public function getConnectToQuery(){
        return mysqli_connect($this->host, $this->username, $this->password, $this->dbname); 
    }
}

?>