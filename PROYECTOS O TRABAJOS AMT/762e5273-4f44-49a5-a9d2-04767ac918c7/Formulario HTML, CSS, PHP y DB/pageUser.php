<?php
    session_start();
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Usuario</title>
    <link rel="stylesheet" href="css/userPage.css">
</head>
<body>
    <div class="box">
        <h1>Bienvenido, <span><?= $_SESSION['nombre']; ?></span></h1>
        <p>Eres un usuario de la página</p>
        <button onclick="window.location.href='logout.php'">Salir</button>
    </div>
</body>
</html>