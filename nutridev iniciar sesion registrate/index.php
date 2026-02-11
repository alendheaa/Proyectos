<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriDev</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>

<header>
    <div class="logo">
        <a href="index.php">
            <img src="imagenes/logo.jpeg" alt="NutriDev Logo">
        </a>
    </div>

    <nav>
        <ul>
            <li><a href="ubicacion.html"><b>UBICACIÓN</b></a></li>
            <li><a href="contacto.html"><b>CONTACTO</b></a></li>
            <li><a href="menu.html"><b>MENÚ</b></a></li>
        </ul>
    </nav>

    <div class="botones-usuario">
        <?php if (isset($_SESSION['usuario'])): ?>
            <span class="bienvenido">
                Bienvenido, <b><?php echo $_SESSION['usuario']; ?></b>
            </span>
            <a href="php/logout.php" class="btn-register">Cerrar sesión</a>
        <?php else: ?>
            <a href="iniciarsesion.php" class="btn-login">Iniciar Sesión</a>
            <a href="registrate.php" class="btn-register">Registrarse</a>
        <?php endif; ?>
    </div>

    <div class="carrito">
        <a href="carrito.html">
            <img src="carrito.png" alt="Carrito">
        </a>
    </div>
</header>

<section class="hero">
    <div class="hero-image">
        <img src="imagenes/yogurtfrutado.jpg" alt="Comida saludable">
    </div>
    <div class="hero-content">
        <h1>SALUDABLE TENTACIÓN</h1>
    </div>
</section>

<section class="productos-destacados">
    <h2>Productos Destacados</h2>

    <div class="contenedor-productos">

        <div class="producto">
            <div class="imagen-producto">
                <img src="pandebono de yuca.webp" alt="Pandebono de yuca">
            </div>
            <h3 class="nombre-producto">Pandebono de yuca</h3>
            <p class="precio-producto">$10.000</p>
            <div class="acciones-producto">
                <input type="number" min="1" value="1" class="cantidad">
                <button class="btn-carrito">Añadir al carrito</button>
            </div>
        </div>

        <div class="producto">
            <div class="imagen-producto">
                <img src="acai en polvo.webp" alt="Acai en polvo">
            </div>
            <h3 class="nombre-producto">Acai en polvo</h3>
            <p class="precio-producto">$10.000</p>
            <div class="acciones-producto">
                <input type="number" min="1" value="1" class="cantidad">
                <button class="btn-carrito">Añadir al carrito</button>
            </div>
        </div>

        <div class="producto">
            <div class="imagen-producto">
                <img src="cafe molido organico.jpg" alt="Café orgánico">
            </div>
            <h3 class="nombre-producto">Café molido orgánico</h3>
            <p class="precio-producto">$16.000</p>
            <div class="acciones-producto">
                <input type="number" min="1" value="1" class="cantidad">
                <button class="btn-carrito">Añadir al carrito</button>
            </div>
        </div>

    </div>
</section>

<footer class="footer">
    <div class="footer-contenido">

        <div class="footer-columnas">
            <div class="columna">
                <h3>Productos</h3>
                <ul>
                    <li><a href="productos.html copy/smoothies/smoothies.html">Smoothies</a></li>
                    <li><a href="productos.html copy/frutossecos/frutossecos.html">Frutos secos</a></li>
                    <li><a href="productos.html copy/snaks/snaks.html">Snacks proteicos</a></li>
                    <li><a href="productos.html copy/cereales/cereales.html">Cereales</a></li>
                    <li><a href="productos.html copy/bebidas/bebidas.html">Bebidas funcionales</a></li>
                    <li><a href="productos.html copy/sopas/sopas.html">Sopas saludables</a></li>
                    <li><a href="productos.html copy/suplementos/suplementos.html">Suplementos</a></li>
                    <li><a href="productos.html copy/yogurts/yogurts.html">Yogurts</a></li>
                </ul>
            </div>

            <div class="columna">
                <h3>Soporte</h3>
                <ul>
                    <li><a href="contacto.html">Contacto</a></li>
                    <li><a href="preguntasfrecuentes.html">Preguntas frecuentes</a></li>
                    <li><a href="enviosydevoluciones.html">Envíos y devoluciones</a></li>
                    <li><a href="ayudaenlinea.html">Ayuda en línea</a></li>
                </ul>
            </div>

            <div class="columna">
                <h3>Sobre nosotros</h3>
                <ul>
                    <li><a href="nutridev.html">NutriDev</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-legal">
            <a href="terminosycondiciones.html">Términos y condiciones</a>
            <a href="politicadeprivacidad.html">Política de privacidad</a>
            <a href="usodelsitio.html">Uso del sitio</a>
        </div>

        <div class="footer-final">
            <p>© 2025 NutriDev. Todos los derechos reservados.</p>
        </div>

    </div>
</footer>

</body>
</html>
