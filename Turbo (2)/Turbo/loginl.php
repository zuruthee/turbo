<?php

    session_start();
    include("connection.php");

    if($_SERVER['REQUEST_METHOD']== "POST")
    {
        $email= $_POST['email'];
        $password = $_POST['password'];

        if(!empty($email) && !empty($password) && !empty($email) && !is_numeric($email))
            {
                $query = "SELECT * FROM signup where email='$email' limit 1";
                $result = mysqli_query($conn, $query);

                if($result)
                {
                    if($result && mysqli_num_rows($result) > 0)
                    {
                        $user_data = mysqli_fetch_assoc($result);

                        if($user_data['password'] == $password)
                        {
                            header("location: index.php");
                            die;
                            

                        }
                    }
                }
                echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
            }
        else
         {
            echo "<script type='text/javascript'> alert('Wrong username or password')</script>";
        }
    }