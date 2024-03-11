<?php
session_start();
include('inc/connections.php');
if(isset ($_POST['user']) && isset($_POST['pass'])){
    $username = stripcslashes($_POST['user']);
    $password = stripcslashes($_POST['pass']);
}
if(empty($username)){
    $user_error = '<p class = "er" > Please enter your name </p> <br>';
    $err_s = 1;
}
if(empty($password)){
    $password_error = '<p class="er" > please enter your password </p> <br>';
    $err_s = 1;
    include('login.php');
}else{
    include('login.php');
}
if(!isset($err_s)){
    $sql = "SELECT us_name FROM user WHERE us_name = '$username'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if ($row['us_name'] === $username){
        $_SESSION['us_name'] = $row['us_name'];
        header('location:http://localhost/bus%20school/home%20ar/home.php');
        exit();
    }else{
        $user_error = '<p class = "er" > wrong username or password </p> <br>';
        include('login.php');
        exit();
    }
}
?>