<?php
include('inc/connections.php');
if(isset($_POST["submit"])){
    $username = stripcslashes($_POST["username"]);
    $email = stripcslashes($_POST["email"]);
    $phoneNumber = stripcslashes($_POST["phone"]);
    $Neighborhood = stripcslashes($_POST["Neighborhood"]);
    $Street = stripcslashes($_POST["Street"]);
    $PostalCode = stripcslashes($_POST["Postal"]);
    $password = stripcslashes($_POST["Password"]);

    $check_user = "SELECT * FROM `user` WHERE us_name = '$username'";
    $check_result = mysqli_query($conn,$check_user);
    $num_rows = mysqli_num_rows($check_result);
    if($num_rows != 0){
        $user_error = "sorry username already exist";
        $err_s = 1;
    }

if(empty($username)){
    $user_error = '<p class="er" > please enter username </p><br>';
    $err_s = 1;
}elseif(strlen($username) < 6){
    $user_error = "your username needs to have a minimum of 6 letters <br>";
    $err_s = 1;
}

if(empty($email)){
    $email_error = '<p class="er" > please insert email <br>';
    $err_s = 1;
}
if(empty($phoneNumber)){
    $phoneNumber_error = '<p class="er" > please enter your phone number </p><br>';
    $err_s = 1;
}
if(empty($Neighborhood)){
    $Neighborhood_error = '<p class="er" > please enter your Neighborhood </p><br>';
    $err_s = 1;
}
if(empty($Street)){
    $Street_error = '<p class="er" >please enter your Street </p><br>';
    $err_s = 1;
}
if(empty($PostalCode)){
    $PostalCode_error = '<p class="er" > please enter your PostalCode </p> <br>';
    $err_s = 1;
}elseif(strlen($PostalCode) > 5){
    $PostalCode_error = '<p class="er" > your PostalCode needs to have a minimum of 5 letters </p> <br>';
    $err_s = 1;
}
if(empty($password)){
    $password_error = '<p class="er" > please enter your password </p> <br>';
    $err_s = 1;
    include("createAR.php");
}elseif(strlen($password) < 6){
    $password_error  = '<p class="er" > your password needs to have a minimum of 6 letters </p><br>';
    $err_s = 1;
    include("createAR.php");
}
else{
    if(($err_s == 0) && ($num_rows == 0)){
        $sql = "INSERT INTO user(us_name,us_email,us_phone,us_Neighborhood,us_Street,us_PostalCode,us_password)
        VALUES ('$username','$email','$phoneNumber','$Neighborhood','$Street','$PostalCode','$password')";
        mysqli_query($conn,$sql);
        header('location:bus school.php');
    }else{
        include("createAR.php");
    }
}
}

?>