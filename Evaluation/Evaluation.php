<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Evaluation.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
    <title>Evaluation</title>
</head>
<body>
    <div class="dark">
        <div class="b"></div>
        <a href="http://localhost/bus%20school/Evaluation/Evaluation%20ar.php"><img src="arabic.png"></a>
        <a href="http://localhost/bus%20school/Evaluation/evaluation%20dm.php"><ion-icon name="moon-sharp"></ion-icon></a>
    </div>
    <div class="container">
        <div class="star-widget" id="staar">
            <input type="radio" name="rate" id="rate-5">
            <label for="rate-5" class="fas fa-star"></label>

            <input type="radio" name="rate" id="rate-4">
            <label for="rate-4" class="fas fa-star"></label>

            <input type="radio" name="rate" id="rate-3">
            <label for="rate-3" class="fas fa-star"></label>

            <input type="radio" name="rate" id="rate-2">
            <label for="rate-2" class="fas fa-star"></label>

            <input type="radio" name="rate" id="rate-1">
            <label for="rate-1" class="fas fa-star"></label>
        </div>
        <form action="#" id="bbtn">
            <header>Evaluation</header>
            <div class="textarea">
                <textarea cols="30" placeholder="Name" id="textarea"></textarea>
            </div>
            <br/>
            <div class="textarea">
                <textarea cols="30" placeholder="Write the opinion"id="textarea1"></textarea>
            </div>
            <div class="btn">
                <button type="submit" id="submit">ok</button>
            </div>
        </form>
    </div>
    <div class="zz"></div>
    <div class="container2">
        <form action="#">
            <header> Evaluations</header>
            <table>
                <thead>
                    <tr>
                        <th>    Evaluation</th>
                        <th> opinion </th>
                        <th> Name</th>
                    </tr>
                </thead>
                <tbody id="tbody"></tbody>
            </table>
        </form>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
