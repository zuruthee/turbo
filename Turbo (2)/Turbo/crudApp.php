<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD APP</title>
    <link rel="stylesheet" href="crudAppStyle.css">
</head>
<body>
    <div class="container">
        <div class="crudBox">
            <div class="cardHeader">
                <h2>USER CRUD APPLICATION</h2>
            </div>
            <div class="addBtn">
                <button class="button-Add"><a href="index.php">Add New</a></button>
            </div>
            <div class="cardBody">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>fname</th>
                            <th>lname</th>
                            <th>email</th>
                            <th>password</th>
                            
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                            require 'config.php';
                            $sql = "SELECT * FROM signup";
                            $result = $connection->query($sql);

                            if($result){
                                while($row = $result->fetch_assoc()){
                                $id = $row['id'];
                                $firstname = $row['fname'];
                                $lastname = $row['lname'];
                                $email = $row['email'];
                                $password = $row['password'];
                                

                                    echo '<tr>
                                    <td>'.$id.'</td>
                                    <td>'.$firstname.'</td>
                                    <td>'.$lastname.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$password.'</td>
                                    
                                    <td>
                                        <div class="btn">
                                            <div class="edit-btn">
                                            <button> <a href="edit.php?updateid='.$id.'">Update</a></button>
                                            </div>
                                            <div class="delete-btn">
                                            <button> <a href="delete.php?delete='.$id.'">Delete</a></button>
                                            </div>
                                        </div>
                            
                                    </td>
                                </tr>';
                                }
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

