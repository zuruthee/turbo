<?php
    session_start();
    include("connection.php");

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email= $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !empty($email) && !is_numeric($email)) 
        {
            $query = "INSERT INTO signup (fname, lname, email, password) VALUES ('$firstname', '$lastname', '$email','$password')";
        
            if(mysqli_query($conn, $query)) {
                echo "<script type='text/javascript'> alert('Welcome'); window.location.href = 'crudApp.php'; </script>";
                exit(); // Exit PHP script after redirecting
            } else {
                echo "<script type='text/javascript'> alert('Error: " . mysqli_error($conn) . "')</script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
        }
    }
?>
