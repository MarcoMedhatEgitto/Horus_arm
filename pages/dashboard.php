<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dashboard</title>
    <link rel="stylesheet" href="../styles/style.css"> <!-- Link your CSS file -->
    
</head>
<body>
    <?php
    if(isset($_SESSION['email']))
    {?>
    <img src="../assets/horus.png" alt="Left Image" class="corner-image left">
    <img src="../assets/horus.png" alt="Right Image" class="corner-image right">
     <div class="button-container">
        <button class="btn" onclick="location.href='logout.php'">Log Out</button>
        <button class="btn" onclick="location.href='monitor.php'">Monitor</button>
        <button class="btn" onclick="location.href='register_page.php'">Register</button>
    </div>
    <footer class="footer mt-5">
        <div class="container d-flex justify-content-center">
            <img src="../assets/don.jpg" alt="donbosco">
            <img src="../assets/other.png" style= "height: 4rem; width: 40rem" alt="danieli" id="danieli">
            <img src="../assets/confi.png" style="width:100px" alt="confi">
            <img src="../assets/ITS.png" style="width:100px" alt="ITS">
        </div>
    </footer>
   <?php } ?>
    
</body>
</html>