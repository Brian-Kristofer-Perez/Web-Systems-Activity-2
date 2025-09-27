<?php
    include './index.php';

    $host = 'localhost';
    $port = '5432';      
    $dbname = 'phplogin';
    $user = 'postgres';
    $password = '12345678';

    $conn_string = "host=$host port=$port dbname=$dbname user=$user password=$password";
    $db = pg_connect($conn_string);

    if (!$db) {
        die("Error: Could not connect to PostgreSQL database.");
    }

    ob_start();

    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background: #f4f4f4;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .login-container {
                background: #fff;
                padding: 30px 40px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 300px;
            }

            h2 {
                text-align: center;
                margin-bottom: 20px;
            }

            label {
                display: block;
                margin-top: 10px;
                margin-bottom: 5px;
            }

            input[type="text"],
            input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            button {
                width: 100%;
                padding: 10px;
                margin-top: 10px;
                background-color: #007BFF;
                border: none;
                color: white;
                border-radius: 4px;
                font-size: 16px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h2>Login</h2>
            <form action="login.php" method="post">

                <label for="name">Username</label>
                <input type="text" id="name" name="username" required>

                <label for="password">Password</label>
                <input type="password" id="passw" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </body>
    </html>
    ';


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = pg_query_params($db, "SELECT name, password FROM users where users.name = $1 and users.password = $2", [$username, $password]);

        $result = pg_fetch_assoc($query);

        if ($result) {
            ob_clean();
            CV();
        } else {
            echo "<script>alert('Invalid username or password!');</script>";
        }
    }

    ob_end_flush();
?>
