<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario</title>
    <link rel="stylesheet" href="css/registro.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h2>Crear Cuenta</h2>
        </div>
        <form action="php/generador.php" method="post">
            <div class="data-container">
                <label for="usuario">Nombre de Usuario</label>
                <input id="usuario" type="text" name="usuario">
            </div>
            <div class="data-container">
                <label for="mail">Email</label>
                <input id="mail" type="email" name="email">
            </div>
            <div class="data-container">
                <label for="pass">Contraseña</label>
                <input id="pass" type="password" name="password">
            </div>
            <div class="data-container">
                <label for="repass">Repetir Contraseña</label>
                <input id="repass" type="password">
            </div>
            <input type="submit" value="Registrar" name="registrar">
        </form>
        <div class="login">
            <p>¿Ya tenés una cuenta?</p>
            <a href="login.php">Inicia Sesión</a>
        </div>
    </div>
</body>
</html>