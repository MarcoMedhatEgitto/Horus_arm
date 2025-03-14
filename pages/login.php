<?php
include 'db_connection.php';
session_start();
if(isset($_POST['submit'])){

$email = $_POST['email'];
$user_password = $_POST['user_password'];

$query = "SELECT access_password FROM user_access WHERE email = '$email'";

$recieve = mysqli_query($db_connection,$query); 
$output = mysqli_fetch_all($recieve, MYSQLI_ASSOC);
mysqli_free_result($recieve);


if($output == null){
    echo "Your email doesn't exist in the database!";
}
else if(password_verify($user_password, $output[0]['access_password'])){
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");
    exit();
}
else{
    echo "You have entered a wrong password!";
}
}
mysqli_close($db_connection);

?>