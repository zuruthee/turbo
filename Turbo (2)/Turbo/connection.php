<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ratings";

//create connection
$conn =  mysqli_connect($servername,$username,$password,$database);

//check cconnection
if(!$conn){
    die("connection failed:" . mysqli_connect_error());
}

?>