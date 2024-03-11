<?php
include('inc/connections.php');
if(isset($_POST["submit"])){
    $text = $_POST["sa"];
    
    if(empty($text)){
        $text_error = '<p class="er" > please enter username </p><br>';
        $err_s = 1;
    }
else{
    if($err_s == 0){
        $sql = "INSERT INTO assess(ass_text) VALUES ('$text')";
        mysqli_query($conn,$sql);
        header('location:bus school.php');
    }
}
}
?>