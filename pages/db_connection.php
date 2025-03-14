<?php
    $server_name = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'rc_users';
    $db_port = 3306;
    $db_connection = mysqli_connect($server_name,$db_user,$db_password,$db_name,$db_port);
    if(!$db_connection){
        echo "Connection error ". mysqli_connect_error();
    }
?>