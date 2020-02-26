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

            echo "U are admin";
            header ('location:owner/ownerDashboard.php');
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/loginmodal.css" rel="stylesheet">
    
</head>
<body>



<div class="login-form" id="loginmodal" v-if="showlogin">
    <form action="" method="POST">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
            
    </form>
   
</div>



<button @click="showlogin = false"> Login</button>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>

 new Vue({
    
    el:'#loginmodal',
    data:{  
        showlogin: true,
    },
    

    
});
    

</script>
</body>
</html>