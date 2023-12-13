<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/DataBase.php';
class verifyPass
{
    private $conn;

    public function __construct()
    {
        $dataBase = new DataBase;
        $this->conn = $dataBase->getConn(); 
    }

    function select($password)
    {
        $query = 'SELECT * FROM login_info' ;
        $stm = $this->conn->prepare($query); 
        $stm->execute(); 
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        foreach($result as $key){
           
            if(password_verify($password, $key['password'])){
                header('location: ../Views/InfoViews.php'); 
            } else{
                 echo "Password incorrecta";
            }
        }

    }

}

$a = new verifyPass;
$as =$a->select($_POST['password']);
 