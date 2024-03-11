<?php
$conn = mysqli_connect("localhost","root","","bus_school");
if(!$conn){
    die("Error".mysqli_connect_error());
}