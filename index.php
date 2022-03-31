<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,700;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>TecnoMovil</title>
</head>

<body>
    <header class="header" id="inicio">
        <div class="header__contenedor">
            <div class="header__barra">
                <a href="index.html">
                    <img src="img/logo.png" alt="logo de la pagina">
                </a>

                <div class="mobile-menu">
                    <img src="img/barras.png" alt="Icono menu responsive">
                </div>

                <nav class="navegacion">
                    <a href="#inicio" class="navegacion__link">Inicio</a>
                    <a href="#nosotros" class="navegacion__link">Nosotros</a>
                    <a href="#formulario" class="navegacion__link">Formulario</a>
                </nav>
            </div>
            <!---BARRA-->

            <div class="header__grid">
                <div class="header__contenido">
                    <h1 class="header__heading">Venta de los mejores celulares del mercado</h1>
                    <p class="header__texto">Tenemos 8 años de experiencia en el mercado probamos cada pantalla para
                        asegurar. Somos una
                        profesional proveedor de todos repuestos para celular en china. </p>
                </div>

                <div class="header__grafico">
                    <img class="header__imagen" src="img/celular.png" alt="imagen de un celular ">
                </div>
            </div>
        </div>
    </header>
    <main id ="nosotros" class="tecno">
        <h2 class="tecno__heading">¿Qué es?</h2>
        <div class="tecno__contenedor">
            <div class="tecno__grid">
                <div class="tecno__imagen">
                    <img src="img/nosotros.png" alt="Tecno app">
                </div>
                <div class="listado">
                    <div class="listado__elemento">
                        <h2 class="listado__heading">Rápido</h2>
                        <p class="listado__texto">Envía el modelo del celular que desees en solo cinco minutos.</p>
                    </div>
                    <div class="listado__elemento">
                        <h2 class="listado__heading">Seguro</h2>
                        <p class="listado__texto">No te pediremos ningún dato, ¡solo tienes que entrar con el usuario
                            que te proporcionamos!</p>
                    </div>
                    <div class="listado__elemento">
                        <h2 class="listado__heading">Facil</h2>
                        <p class="listado__texto">Rellena un formulario sencillo y los datos quedarán ingresados.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <section id="formulario" class="formulario">

        <a href="" class="formulario__btn">Haga click aquí para ir al formulario</a>

        <p class="formulario__texto"><span>Importante:</span>
            Para poder rellenar el formulario, debe ingresar con los siguientes datos:
            Usuario: <small>usuario@usuario.com</small>
            Contraseña: <smal>12345</smal>
        </p>
    </section>

    <footer class="footer">
        <div class="footer__contenedor">
            <div class="footer__grid">
                <div class="footer__logo">
                    <img src="img/logo.png" alt="Logo de la pagina">
                </div>
                <nav class="navegacion">
                    <a href="#" class="navegacion__link navegacion__link--blanco">Inicio</a>
                    <a href="#" class="navegacion__link navegacion__link--blanco">Nosotros</a>
                    <a href="#" class="navegacion__link navegacion__link--blanco">Formulario</a>
                </nav>
            </div>
        </div>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>