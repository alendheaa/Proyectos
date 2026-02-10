<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($password, $usuario["password"])) {
            $_SESSION["usuario"] = $usuario["nombre"];
            header("Location: index.php"); // página principal
            exit();
        } else {
            echo "<script>alert('Contraseña incorrecta');</script>";
        }
    } else {
        echo "<script>alert('Usuario no encontrado');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - NutriDev</title>
    <link rel="stylesheet" href="iniciarsesion.css">
</head>
<body>

<div class="login-container">
    <h1 class="titulo">Iniciar Sesión</h1>
    <p class="subtitulo">Bienvenido de nuevo a NutriDev</p>

    <form class="login-form" method="POST">

        <label>Correo electrónico</label>
        <input type="email" name="email" required>

        <label>Contraseña</label>
        <input type="password" name="password" required>

        <button type="submit" class="btn-login">Ingresar</button>

        <p class="registro-link">
            ¿No tienes una cuenta? <a href="registrate.php">Regístrate aquí</a>
        </p>
    </form>
</div>

</body>
</html>
