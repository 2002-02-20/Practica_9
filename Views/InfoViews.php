<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/Models/InsertInfo.php'; 

$inserInfo = new InsertInfo();
$result = $inserInfo->select();
foreach ($result as $key){
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Your Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #F3F3F3; 
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        section{
            margin: 60px;
            padding: 30px;
            background-color: #FFFFFF;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 75%;
            height: 75%;
            border-radius: 8px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
        }
        a{
            text-decoration: none;
            color:#FF2828; 
        }
        a:hover{
            color: #FF5E5E;
            cursor: pointer;
            transition: 0.3s;
        }
        
    </style>
</head>
<body>
    <section>
        <h3>Welcome to Your Dashboard</h3>
        <p>Username: <?=$key['username']?></p>
        <p>Email: <?=$key['email']?></p>
        <a href="../index.php">Logout</a>
    </section>
</body>
</html>

