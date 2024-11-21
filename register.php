<!DOCTYPE html>
<html lang="en">

<?php
include("./connect.php"); // connection to db
error_reporting(0);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #c9d4d5;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .login-container label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        .login-container input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-container button {
            background-color: #b71010;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 5px;
            width:100px;
        }

        .login-container button:hover {
            background-color: #d3400b;
        }
    </style>
</head>

<body>

<?php
    session_start();
    if(isset($_REQUEST['log'])){
        $un = $_REQUEST['name'];
        $pa = $_REQUEST['pass'];

        
        $q = "select * from student where email='$un' and password='$pa'";
        $r = mysqli_query($db,$q);
        if($d=mysqli_fetch_assoc($r)){
            $_SESSION['user'] = $un;
            header("location:index2.php");
        }

        else{
            echo "<div class='alert alert-dark' role='alert' style='border-radius:0px'>
            Incorrect email/password , Please <a href='signup.php' class='alert-link'>click here</a> to register
          </div>";
            // echo '<script>alert("User doesnt exist , please register")</script>';
        }
   
    }
?>
    <div class="login-container">
        <h2>Student Login</h2>
        <form action="#" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="name" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="pass" required>

            <button type="submit" name="log">Login</button>
        </form>
        <a href="./index.PHP"><button >Home</button></a>
    </div>
</body>

</html>
