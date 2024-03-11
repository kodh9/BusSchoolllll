<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bus school</title>
    <link rel="stylesheet" href="login.css">
    <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
    <div class="dark">
        <div class="b"></div>
        <a href="http://localhost/bus%20school/bus%20school.php"><img src="arabic.png"></a>
        <a href="http://localhost/bus%20school/login%20dark/logindar.php"><ion-icon name="moon-sharp"></ion-icon></a>
    </div>
    <form action="post.php" method="post">
        <img src="logo.jpeg"  class="ss">
    <div class="login">
         <h1>اهلا بك</h1>
         <div class="username">
            <?php if (isset($user_error)){
                echo $user_error;
            }
            ?>
             <input type="text" name="user" placeholder="اسم المستخدم">
              <ion-icon name="mail-outline"></ion-icon>
        </div>
        <br>
        <div class="password">
            <?php if (isset($password_error)){
                echo $password_error;
            }
            ?>
            <input type="password" name="password" placeholder="كلمه المرور">
            <ion-icon name="lock-closed-outline"></ion-icon>
        </div>
        <a href="file:///C:/Users/salem/Desktop/bus%20school/home%20ar/home.html">
            <button type="submit" name="submit">
               دخول
            </button>
        </a>
        <p>هل نسيت كلمه المرور؟<a href="http://localhost/bus%20school/forget%20ar/forget%20ar.php">اضغط هنا</a></p>
        <p> ليس لديك حساب؟ <a href="http://localhost/bus%20school/create%20ar/cr%20ar.php">اضغط هنا </a></p>
    </div>
    </form>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>