<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bus school</title>
    <link rel="stylesheet" href="BS.css">
    <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
    <div class="dark">
        <div class="b"></div>
        <a href="http://localhost/bus%20school/login%20ar/login.php"><img src="arabic.png"></a>
        <a href="http://localhost/bus%20school/login%20dark/logindar.php"><ion-icon name="moon-sharp"></ion-icon></a>
    </div>
     <img src="logo.jpeg"  class="ss">
     <form action="login.php" method="post">
     <div class="login">
         <h1>WELCOME</h1>
         <div class="username">
            <?php if (isset($user_error)){
                echo $user_error;
            }
            ?>
             <input type="text" name="user" placeholder="Username">
             <ion-icon name="mail-outline"></ion-icon>
        </div>
        <br>
        <div class="password">
            <?php if (isset($password_error)){
                echo $password_error;
            }
            ?>
            <input type="password" name="pass" placeholder="Password">
            <ion-icon name="lock-closed-outline"></ion-icon>
        </div>
        <a href="http://localhost/bus%20school/home%20page/home.php">
            <button type="submit" name="submit">
               Login
            </button>
        </a>
     </form>
        <p>Forget Password?<a href="http://localhost/bus%20school/forget/forget.php">PRESS HERE</a></p>
        <p> Don't have a Account? <a href="http://localhost/bus%20school/create%20page/create%20bc.php">PRESS HERE</a></p>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>