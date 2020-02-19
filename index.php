<?php

    session_start();

    include 'include/conn.php';

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $getadmin = "SELECT * FROM  admin where username  = '$username' && password = '$password' ";

        $query = mysqli_query($conn , $getadmin);

        $get_query = mysqli_fetch_array($query);

        if ($get_query > 0)
        {
            header ('location:admin/dashboard.php');
        }
    
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="" method="POST">

    <label>Username</label> <br>
    <input type="text" name="username" placeholder= "Username"> <br>

    <label>Password</label> <br>
    <input type="password" name="password" placeholder="Password"> <br>

    <button type="submit" name="submit">Login</button>

</form>
    
</body>
</html>