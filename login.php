<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet href="assets/css/style.css">
</head>
<body>



<section class="login" id="login">
    <div class="container ">
        <span class="icon" id="icon"><a href=""><i class="fas fa-times"></i></a></span>
        <div class="col col-md-12 block_">

            <form class="form-signin" method="POST">
                <h2>Login</h2>
                <input type="text" name="username" class="form-control" placeholder="Username" required height="50">
                <input type="password" name="password" class="form-control" placeholder="Password" required height="50">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                <a href="index.php" class="btn btn-lg btn-primary btn-block">Registration</a>
            </form>
        </div>
    </div>
</section>

<?php
session_start();
require ('connect.php');

if(isset($_POST['username']) and isset($_POST['password'])){
    $username =$_POST['username'];
    $password =$_POST['password'];

    $query = "SELECT * FROM auth WHERE username='$username' AND password='$password' ";
    $result = mysqli_query($connection, $query) or die (mysqli_error($connection));
    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['username'] =$username;
    }else{
        $fsmsg = "Error";
    }
}

if(isset($_SESSION['username'])){
    $username =$_SESSION['username'];
    echo "Hello" . $username . "";
    echo "You are entered!";
    echo "<a href='logout.php' class='btn btn-lg btn-primary' > Logout </a>";
}

?>
</body>
</html>
