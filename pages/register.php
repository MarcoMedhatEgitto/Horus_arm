<?php
// initialize the connection to the database and check if there are errors 
include 'db_connection.php';

// save the input from the form into the db
if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($db_connection, $_POST['fname']). " " . mysqli_real_escape_string($db_connection, $_POST['lname']);
    $email = mysqli_real_escape_string($db_connection, $_POST['email']);
    $password = mysqli_real_escape_string($db_connection,password_hash($_POST['password'],PASSWORD_DEFAULT));

    $query = "INSERT INTO user_access(id, email, access_password, name) VALUES ('','$email','$password','$name')";

    if(mysqli_query($db_connection,$query)){
        echo "success";
    }
    else{
        echo "error: ".mysqli_error($db_connection);
    }
}

mysqli_close($db_connection);
