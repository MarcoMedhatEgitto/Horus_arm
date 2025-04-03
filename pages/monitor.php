<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script>
        function x_y_axis(direction, steps) {
            fetch("http://192.168.43.178:5000/move_stepper_first", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ direction: direction, steps: steps }),
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error("Error:", error));
        }
        function Z_axis(direction, steps) {
            fetch("http://192.168.43.178:5000/move_stepper_second", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ direction: direction, steps: steps }),
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error("Error:", error));
        }
        function third(direction, steps) {
            fetch("http://192.168.43.178:5000/move_stepper_third", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ direction: direction, steps: steps }),
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error("Error:", error));
        }
        function fork(direction, steps) {
            fetch("http://192.168.43.178:5000/move_stepper_fork", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ direction: direction, steps: steps }),
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error("Error:", error));
        }
        
    </script>
    <style>
        body{
            min-height:100vh;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            min-height: 100vh;
            background: linear-gradient(to right, #0a192f, #1e3a5f, #3b5998, #0f3057);
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding-bottom: 80px;
        }
        .video-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80vw;
            height: 60vh;
            padding: 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        .video-container iframe {
            width: 100%;
            height: 100%;
            border: none;
            object-fit: fill;
        }
        .controls-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
            width: 100%;
        }
        @media (max-width: 768px) {
            .controls-container {
                flex-direction: column;
                align-items: center;
            }
        }
        .control-box {
            padding: 20px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            text-align: center;
            color: white;
            width: 300px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .btn {
            padding: 15px 30px;
            font-size: 18px;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background: linear-gradient(to bottom right, rgba(15, 48, 87, 1), rgba(0, 0, 0, 1));
            transition: 0.3s;
            margin: 10px;
        }
        .btn:hover {
            opacity: 0.8;
        }   
        .footer {
    width: 100%;
    padding: 10px 0; /* Adjust padding as needed */
    text-align: center;
}     
    </style>
</head>
<body>
    <div class="content">
        <div class="video-container container">
            <iframe src="http://192.168.1.2:5000/video" frameborder="0" scrolling="no"></iframe>
        </div>
        <div class="controls-container container-fluid">
            <div class="control-box">
                <h3>X/Y</h3>
                <button onclick="x_y_axis('forward', 100)" class="btn">Move Forward</button>
                <button onclick="x_y_axis('backward', 100)" class="btn">Move Backward</button>
            </div>
            <div class="control-box">
                <h3>Z</h3>
                <button onclick="Z_axis('forward', 100)" class="btn">Move Forward</button>
                <button onclick="Z_axis('backward', 100)" class="btn">Move Backward</button>
            </div>
            <div class="control-box">
                <h3>Third</h3>
                <button onclick="third('forward', 100)" class="btn">Move Forward</button>
                <button onclick="third('backward', 100)" class="btn">Move Backward</button>
            </div>
            <div class="control-box">
                <h3>Forth</h3>
                <button onclick="fork('forward', 100)" class="btn">Move Forward</button>
                <button onclick="fork('backward', 100)" class="btn">Move Backward</button>
            </div>
        </div>
    </div>
    <footer>
    <div class="container d-flex flex-wrap justify-content-center align-items-center">
        <img src="../assets/don.jpg" alt="donbosco" class="img-fluid mx-2" style="max-width: 100px;">
        <img src="../assets/other.png" alt="danieli" class="img-fluid mx-2" style="max-width: 100%; height: auto;">
        <img src="../assets/confi.png" alt="confi" class="img-fluid mx-2" style="max-width: 100px;">
        <img src="../assets/ITS.png" alt="ITS" class="img-fluid mx-2" style="max-width: 100px;">
    </div>
</footer>
    <footer class="footer mt-5">
    <div class="container d-flex flex-wrap justify-content-center align-items-center">
        <img src="../assets/don.jpg" alt="donbosco" class="img-fluid mx-2" style="max-width: 100px;">
        <img src="../assets/other.png" alt="danieli" class="img-fluid mx-2" style="max-width: 100%; height: auto;">
        <img src="../assets/confi.png" alt="confi" class="img-fluid mx-2" style="max-width: 100px;">
        <img src="../assets/ITS.png" alt="ITS" class="img-fluid mx-2" style="max-width: 100px;">
    </div>
</footer>
</body>
</html>
