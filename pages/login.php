<?php
include 'db_connection.php';
session_start();
if(isset($_POST['submit'])){

$email = mysqli_real_escape_string($db_connection,$_POST['email']);
$user_password = mysqli_real_escape_string($db_connection,$_POST['user_password']);

$query = "SELECT access_password FROM user_access WHERE email = '$email'";

$recieve = mysqli_query($db_connection,$query); 
$output = mysqli_fetch_all($recieve, MYSQLI_ASSOC);
mysqli_free_result($recieve);


if($output == null){
    header("Location: notfound.php");
}
else if(password_verify($user_password, $output[0]['access_password'])){
    $_SESSION['email'] = $email;
    $lock_file = "lock.txt";

    if (file_exists($lock_file)) {
        header("Location: another.php");
        exit();
    }
    
    file_put_contents($lock_file, "locked");

    header("Location: dashboard.php");
    exit();
}
else{
    header("Location: wrongPassword.php");
    exit();
}
}
mysqli_close($db_connection);

?>