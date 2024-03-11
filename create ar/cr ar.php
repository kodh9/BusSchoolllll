<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create account</title>
    <link rel="stylesheet" href="cr ar.css">
    <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
    <div class="dark">
        <div class="b"></div>
        <a href="http://localhost/bus%20school/create%20page/create%20bc.php"><img src="arabic.png"></a>
        <a href="http://localhost/bus%20school/createAR1/createAR.php"><ion-icon name="moon-sharp"></ion-icon></a>
    </div>
    <div class="cre">
        <img src="logo.jpeg">
        <h1>اهلا بك</h1>
        <form action="create_post.php" method="post">
            <p><input type="text" name="username" placeholder="الاسم">
            <input type="email" name="email" placeholder="الاميل"></p>
            <p><input type="number" name="phone" placeholder="رقم الجوال">
            <input type="text" name="Street" placeholder="الشارع"></p> 
            <p><input type="text" name="Neighborhood" placeholder="الحي">
            <input type="text" name="Postal" placeholder="الرمز البريدي"></p>
            <p><input type="password" name="Password" placeholder="كلمه المرور">
            <input type="password" placeholder="اعاده كلمه المرور"></p>
            <?php if (isset($user_error)){
                    echo $user_error;
                }    ?>
                <?php if (isset($email_error)){
                    echo $email_error;
                }    ?>
                <?php if (isset($phoneNumber_error)){
                    echo $phoneNumber_error;
                }    ?>
                <?php if (isset($Neighborhood_error)){
                    echo $Neighborhood_error;
                }    ?>
                <?php if (isset($Street_error)){
                    echo $Street_error;
                }    ?>
                <?php if (isset($PostalCode_error)){
                    echo $PostalCode_error;
                }    ?>
                <?php if (isset($password_error)){
                    echo $password_error;
                }    ?>
                <br>
        <a href="file:///C:/Users/salem/Desktop/bus%20school/home%20ar/home.html">
            <button type="submit" name="submit">
                انشاء
            </button>
            </a>
        </form>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>