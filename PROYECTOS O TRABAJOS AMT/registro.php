<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Usuario</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="title">
            <h2>Iniciar Sesión</h2>
        </div>
        <form action="php/generador.php" method="post">
            <div class="data-container">
                <label for="mail">Email</label>
                <input id="mail" type="email" name="email">
            </div>
            <div class="data-container">
                <label for="pass">Contraseña</label>
                <input id="pass" type="password" name="password">
            </div>
            <input type="submit" value="Entrar" name="entrar">
        </form>
        <div class="login">
            <p>¿No tenés una cuenta?</p>
            <a href="registro.php">Registrate</a>
        </div>
    </div>
</body>
</html>