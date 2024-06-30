<?php 
   require 'config.php';

    
    if(isset($_POST['submit']))
        {
            $id = $_POST['id'];
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "UPDATE signup SET fname='$firstname',lname='$lastname',email='$email'
            ,password='$password' WHERE id = '$id'";
            
            $result = $connection->query($sql);

            if($connection->query($sql) === TRUE){
                    header("Location: crudApp.php");
                    exit();
            }
            else{
                echo "Error:".$connection->error;
            }
        }

        $connection->close();
?>





