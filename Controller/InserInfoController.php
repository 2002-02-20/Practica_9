<?php
 require_once '../Models/InsertInfo.php';

class InserInfoController
{

    function index()
    {
        $inserInfo = new InsertInfo();
        $inserInfo->index($_POST['username'], $_POST['email'], $_POST['password']);
          header('location: ../Views/infoViews.php'); 
    }

}

$inserInfoController = new InserInfoController();

$inserInfoController->index();