<?php 
    $connection = new mysqli("localhost", "root", "", "dbnew");

    if($connection->connect_error)
        {
            die("Connection failed:" .$connection->connect_error);
        }
?>