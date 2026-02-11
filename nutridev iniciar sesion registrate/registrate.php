<?php
include("php/conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmar = $_POST["confirmar"];

    if ($password != $confirmar) {
        echo "<script>alert('Las contraseñas no coinciden');</script>";
    } else {

        $password_segura = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nombre, email, password)
                VALUES ('$nombre', '$email', '$password_segura')";

        if ($conexion->query($sql) === TRUE) {
            echo "<script>alert('Registro exitoso'); window.location='iniciarsesion.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conexion->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrarse - NutriDev</title>
    <link rel="stylesheet" href="css/registrate.css">
</head>
<body>

<div class="register-container">
    <h1 class="titulo">Crear Cuenta</h1>
    <p class="subtitulo">Únete a NutriDev</p>

    <form class="register-form" method="POST">

        <label>Nombre completo</label>
        <input type="text" name="nombre" required>

        <label>Correo electrónico</label>
        <input type="email" name="email" required>

        <label>Contraseña</label>
        <input type="password" name="password" required>

        <label>Confirmar contraseña</label>
        <input type="password" name="confirmar" required>

        <button type="submit" class="btn-register">Registrarme</button>

        <p class="login-link">
            ¿Ya tienes una cuenta? <a href="iniciarsesion.php">Inicia sesión aquí</a>
        </p>
    </form>
</div>

</body>
</html>
