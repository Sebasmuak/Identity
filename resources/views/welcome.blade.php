<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Identity</title>
    <link href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<nav class="navbar">
    <div class="logo">
        <i class="fas fa-user"></i> IDENTITY
        <p class="logo-subtext">Se auténticamente tú</p>
        <div class="logo-underline"></div>
    </div>
    <div class="menu">
        <a href="./index.html" class="button">Inicio</a>
        <a href="./servicios.html" class="button">Servicios</a>
        <a href="#" class="button">Acerca de</a>
        <a href="#" class="button">¿Quiénes somos?</a>
        <a href="#" class="button">Galería</a>
        <a href="#" class="button">Más</a>
    </div>
    <div class="logo-right">
        <a href="#" aria-label="Logo derecho">
        <i class="fas fa-user"></i> </a>
        <p class="logo-name-right">Juan Sebastian Rubio Torres</p>
        <div class="logo-underline"></div>
    </div>
</nav>

<section class="hero">
    <div class="hero-left">
        <h1>Bienvenido a <br /><strong>Identity</strong></h1>
    </div>

    <div class="hero-right">
        <p><strong>Identity</strong> permite tener un mejor control en el sistema, en el cual servirá para automatizar y mejorar la eficiencia del centro formativo CIAS.</p>
        <a href="#">Saber más</a>
    </div>
</section>

<section id="carnet-demo" class="carnet-container">
    <h2 class="carnet-title">Carnet Digital – Demo</h2>

<div class="id-card">
    <header class="id-card__header">
        <img class="id-card__logo" src="../IMG/Logosena.png" alt="Logo de la institución" />
        <div class="id-card__entidad">
        <h3>IDENTITY</h3>
        <p>Institución Educativa • Regional Bogotá</p>
</div>
    </header>

    <div class="id-card__body">
        <div class="id-card__foto">
        <img src="../IMG/fotoApr.jpg" alt="Foto del usuario en el carnet" />
        <span class="id-card__rol" data-rol="Aprendiz">Aprendiz</span>
        </div>

        <div class="id-card__info">
        <div class="id-row">
            <span class="id-label">Nombre</span>
            <span class="id-value">Juan Sebastian Rubio</span>
        </div>
        <div class="id-row">
            <span class="id-label">Programa</span>
            <span class="id-value">Análisis y Desarrollo de Software</span>
        </div>
        <div class="id-row">
            <span class="id-label"># Programa</span>
            <span class="id-value">ADSO-2978583</span>
        </div>
        <div class="id-row">
            <span class="id-label">Tipo de sangre</span>
            <span class="id-value">O+</span>
        </div>
        <div class="id-row">
            <span class="id-label">Regional</span>
            <span class="id-value">Boyaca</span>
        </div>
        <div class="id-row">
            <span class="id-label">Institución</span>
            <span class="id-value">Centro de la Innovación Agroindustrial y de Servicios</span>
        </div>
        </div>

        <div class="id-card__codes">
        <!-- Placeholder QR -->
        <div class="qr" aria-label="Código QR (demostración)">
            <span>QR</span>
        </div>
        <!-- Placeholder código de barras -->
        <div class="barcode" aria-label="Código de barras (demostración)">
            <div></div><div></div><div></div><div></div><div></div>
            <div></div><div></div><div></div><div></div><div></div>
        </div>
        <span class="id-code">ID: 9A3F-72KX</span>
        </div>
    </div>

    <footer class="id-card__footer">
        <button class="btn-id" data-set-rol="Aprendiz">Aprendiz</button>
        <button class="btn-id" data-set-rol="Instructor">Instructor</button>
        <button class="btn-id" data-set-rol="Administrativo">Administrativo</button>
    </footer>
</div>
</section>


<section class="menu">
    <article class="contenedor">
        <h2 class="contenedor-title">VISIÓN</h2>
        <p class="contenedor-text">Ser un referente en la automatización y control eficiente de procesos formativos.</p>
    </article>

    <article class="contenedor">
        <h2 class="contenedor-title">MISIÓN</h2>
        <p class="contenedor-text">Brindar soluciones tecnológicas que optimicen el funcionamiento del centro formativo CIAS.</p>
    </article>

    <article class="contenedor">
        <h2 class="contenedor-title">OBJETIVO</h2>
        <p class="contenedor-text">Mejorar la eficiencia y control mediante sistemas automatizados y confiables.</p>
    </article>

    <article class="contenedor">
        <h2 class="contenedor-title">FRAMEWORK</h2>
        <p class="contenedor-text">Utilizamos tecnologías modernas y escalables para el desarrollo del sistema.</p>
    </article>

    <article class="contenedor">
        <h2 class="contenedor-title">SEGURIDAD</h2>
        <p class="contenedor-text">Garantizamos la protección de datos y la integridad del sistema.</p>
    </article>

    <article class="contenedor">
        <h2 class="contenedor-title">IMPLEMENTACIÓN</h2>
        <p class="contenedor-text">Despliegue progresivo con monitoreo constante para asegurar calidad.</p>
    </article>
  </section>


<footer class="footer">
    <p>Cias (Centro de la Innovación Agroindustrial)</p>
    <p>Creado por Juan Sebastián Rubio Torres y Brian Steven Rodríguez Vanegas</p>
    <div class="footer-social-icons">
    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
    </div>
</footer>
</body>
</html>
