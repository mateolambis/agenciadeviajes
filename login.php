<?php
if (isset($_POST['login'])) {
    include 'conexion.php';
    $doc = $_POST['doc'];
    $pasw = $_POST['pasw'];
$query= "SELECT * FROM transporte
         WHERE idtransporte= $id and ";
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">

</head>

<body>

    <div method="post" id="signin">
        <div class="form-title">Sign in</div>
        <div class="input-field">
            <input type="email" id="id" name="doc" autocomplete="off" />
            <i class="material-icons">email</i>
            <label for="email">Email</label>
        </div>
        <div class="input-field">
            <input type="password" id="pa" name="pasw" />
            <i class="material-icons">lock</i>
            <label for="password">Password</label>
        </div>
        <a href="" class="forgot-pw">Forgot Password ?</a>
        <a href="C0803.php" class="volver">Volver</a>
        <button class="login">Login</button>
        <div class="check">
            <i class="material-icons">check</i>
        </div>
    </div>
    <div id="gif">
        <a href="https://dribbble.com/shots/2197140-New-Material-Text-Fields">
            <img src="https://d13yacurqjgara.cloudfront.net/users/472930/screenshots/2197140/efsdfsdae.gif" alt="">
        </a>
    </div>

    <script src="login.js"></script>
</body>

</html>