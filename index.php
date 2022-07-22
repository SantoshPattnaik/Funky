<?php require_once './config.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <title>Funky-Home</title>
</head>

<body>
    <div class="header text-center bg-indigo-200">
        <div class="display-1"><?php echo $site_name[0] ?></div>
        <p class="display-3"><?php echo $site_name[1] ?></p>
    </div>
    <div class="container-fluid">
        <p class="fs-4">List of games:</p>
        <ul>
            <li><a class="link-success" href="./games/simon-game">Simon Game</a></li>
            <li><a class="link-success" href="./games/dice-game">Dice Game</a></li>
            <li><a class="link-success" href="./games/hang_man-game">Hang Man Game</a></li>
        </ul>
    </div>
    <script src="./bootstrap-5.0.2/dist/js/bootstrap.min.js"></script>
</body>

</html>