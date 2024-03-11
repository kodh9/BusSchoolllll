<?php
session_start();
include('inc/connections.php');
if(isset($_SESSION['us_name'])){
    $user = $_SESSION['us_name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asse.css">
</head>
<body>
    <div class="dark">
        <div class="b"></div>
        <a href="file:///C:/Users/salem/Desktop/bus%20school/create%20ar/cr%20ar.html"><img src="arabic.png"></a>
        <a href="#"><ion-icon name="moon-sharp"></ion-icon></a>
    </div>
    <div class="logo">
        <img src="logo.jpeg">
    </div>
    <center>
        <form action="asse_post.php" method="post">
            <div class="asse">
                <h3><?php
                echo $user
                ?>:</h3>
                <input type="text" name="sa" placeholder="write your review">
            </div>
            <button name="submit" type="submit">
                SEND
            </button>
        </form>
    </center>
    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>