<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bus school</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dark">
        <div class="b"></div>
        <a href="http://localhost/bus%20school/login%20ar/login.php"><img src="arabic.png"></a>
        <a href="http://localhost/bus%20school/bus%20school.php"><ion-icon name="moon-sharp"></ion-icon></a>
    </div>
    <div class="from">
        <img src="imayges.png"  class="ss">
        <h1>
           WELCOME
        </h1>
        <form action="logindar.php" method="post">
            <div class="un">
            <?php if (isset($user_error)){
                echo $user_error;
            }
            ?>
            <ion-icon name="mail-outline"></ion-icon>
            <input type="text" name="user" placeholder="Username">
           </div>
           <div class="pw">
            <?php if (isset($password_error)){
                echo $password_error;
            }
            ?>
               <ion-icon name="lock-closed-outline"></ion-icon>
               <input type="password" name="pass" placeholder="password">
            </div>
        <div class="forget">
            <br>
            <p>Forget Password?<a href="create2/create2.html">PRESS HERE</a></p>
        </div>
        <div>
            <a href="file:///C:/Users/salem/Desktop/bus%20school/home%20page/home.html">
                <button type="submit" name="submit">
                Login
              </button>
            </a>
        </div>
        <div class="create">
            <p> Don't have a Account? <a href="http://localhost/bus%20school/create%20page1/createBC.php">PRESS HERE</a></p>
        </div>
           </form>
           
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>