<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link your CSS file -->
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #fccb90;
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
            margin: 0;
        }
        .button-container {
            text-align: center;
        }
        .btn {
            display: inline-block;
            padding: 15px 30px;
            font-size: 18px;
            margin: 10px;
            border: none;
            cursor: pointer;
            color: white;
            border-radius: 5px;
            background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));
            transition: 0.3s;
        }
        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <?php
    if(isset($_SESSION['email']))
    {?>
     <div class="button-container">
        <button class="btn" onclick="location.href='logout.php'">Log Out</button>
        <button class="btn" onclick="location.href='http://192.168.1.3:8501'">Monitor</button>
        <button class="btn" onclick="location.href='register_page.php'">Register</button>
    </div>
   <?php } ?>
    
</body>
</html>