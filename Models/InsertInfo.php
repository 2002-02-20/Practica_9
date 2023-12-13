<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/DataBase.php';

class InsertInfo
{
    private $conn;

    public function __construct()
    {
        $dataBase = new DataBase;
        $this->conn = $dataBase->getConn(); 
    }

    public function index($username, $email, $password)
    {
        $query = 'INSERT INTO login_info (`username`, `email`, `password`) VALUES (?,?,?)'; 

        $hash = password_hash($password, PASSWORD_DEFAULT); 
        try {
            $stm = $this->conn->prepare($query);
        $stm->execute([$username, $email, /*$password*/ $hash]);
           
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    function select()
    {
        $query = 'SELECT `username`, `email` FROM login_info ';

        $stm = $this->conn->prepare($query); 
        $stm->execute(); 
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
   
}
