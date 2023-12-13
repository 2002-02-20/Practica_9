
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            width: 30%;
            height: 30%;
            border-radius: 12px;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.1);
        }

        label{
            color: #817D7D; 
        }

        input{
            width: 100%;
            padding: 10px;
            border-radius: 8px;
            outline: none;
            border: 1px solid #D9D9D9;
            margin-top: 10px;
        }

        button{
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background-color: #3598DB;
            color: #FFFFFF;
            cursor: pointer;
            margin-bottom: 20px;
        }
        button:hover{
            transition: 0.3s;
            background-color: #4AC7FF;
            cursor: pointer;
        }
        p{
            color: #817D7D;
        }

        h2{
            color: #273542; 
            text-align: center;
        }
        
    </style>
</head>

<body>
    <section>
        <form action="./Models/verifyPass.php" method="POST">
            <h2>Login</h2>
            
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username"><br><br>

            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password"><br><br>
            <button type="submit">Login</button>
            <p>Don´t have an account? <a href="./Views/RegisterViews.php">Register here</a></p>
        </form>
    </section>
</body>

</html>