<?php
session_start();
session_unset();
$lock_file = "lock.txt";
if (file_exists($lock_file)) {
        unlink($lock_file);
    }
    session_destroy();
header("Location: ../index.php");
exit();