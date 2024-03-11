<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="homePage.css">
    <meta thhp-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
    
    <div class="brr">
        <div class="ss">
            <img src="imayges.png">
        </div>
        <div class="dark">
            <div class="b">

            </div>
            <a href="http://localhost/bus%20school/home%20ar/home.php"><img src="arabic.png"></a>
            <a href="http://localhost/bus%20school/home%20page/home.php"><ion-icon name="moon-sharp"></ion-icon></a>
        </div>
        <a href="http://localhost/bus%20school/Evaluation/evaluation%20dm.php">
        <button>
            Evaluation
        </button>
        </a>
        <a href="http://localhost/bus%20school/profile/profile.php"><ion-icon name="person-circle-outline"></a>
    </div>
    
    <div class="s">
        <p>
            Home
        </p>
        <h1> <u>Bus tracking:</u> </h1>
    </div>
    <div class="bus">
        <!-- <img src="pp.jpeg"> -->
        <div class="text">
            <h2>salem Ahmed:    ACTIVE</h2>
        </div>
        
        <div class="bus1">
            <!-- <img src="pp.jpeg"> -->
            <div class="dd">
                <h2>Mohammed Ahmed: STOP</h2>
            </div>
        </div>
    </div>
    <div class="loc">
        <img src="loc.png">
    <a href="https://www.google.com/maps/@24.6239483,46.7381793,15z?authuser=0&entry=ttu" target="_blank"><img src="loc.png"></a>
   </div>
   <div class="loc1">
    <img src="loc1.jpeg">
    <a href="https://www.google.com/maps/@24.6239483,46.7381793,15z?authuser=0&entry=ttu"target="_blank"><img src="loc1.jpeg"></a>
   </div>
    <div class="su">
        <button>
            <ion-icon name="cash-outline"></ion-icon>
            <h3>Subscription </h3>
            <a href="#"></a>
        </button>
    </div>
    <div class="sup">
        <button>
         <ion-icon name="chatbox-outline"></ion-icon>
         <h3>Customers Service</h3>
        </button>
    </div>
    <div class="sm">
        <a href="http://localhost/bus%20school/add%20student1/add%20stuent.php">
            <button>
                <ion-icon name="file-tray-stacked-outline"></ion-icon>
                <h3>Student Management</h3>
            </button> 
        </a>
    </div>
    <div class="lo">
        <a href="http://localhost/bus%20school/login%20dark/logindar.php">
            <button>
                <ion-icon name="log-in-outline"></ion-icon>
                <h3>LOG OUT</h3>
            </button> 
         </a>
    </div>
    <div class="wha">
        <a href="https://wa.me/966506008954"target="_blank"> 
            <ion-icon name="logo-whatsapp"></ion-icon>
        </a>
    </div>
    <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h4>Phone number: 0506008954</h4>
          <h5>normal business hours are listed below:</h5>
          <h5>(Sunday,Monday,Tuesday,wednesday,thursday)</h5>
          <h5>from 8am to 4pm</h5>
        </div>
      </div>
      
      <script>
        var modal = document.getElementById("myModal");
        
        var btn = document.querySelector(".sup button");
        
        var span = document.getElementsByClassName("close")[0];
        
        btn.onclick = function() {
          modal.style.display = "block";
        }
        span.onclick = function() {
          modal.style.display = "none";
        }
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>  
</body>
</html>