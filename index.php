<?php

$pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!--archivo bootstrap-->
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <!--archivo fontawesome -->
    <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
    <!--archivo css-->
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <!--Inicio del header-->
    <header class="area-header">
        <div class="menu-principal">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">Portfolio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="me-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre-mi.html">Sobre mí</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="proyectos.html">Proyectos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--Fin del header-->


    <!--Inicio menu principal-->
    <main class="principal">
        <section class="titulo-principal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 titulo">
                        <h3 class="title-text">Hola</h3>
                        <h1 class="title-text text-uppercase">Soy Anderson</h1>
                        <h4 class="title-text text-uppercase">Desarrollador Web Full Stack Junior</h4>
                        <div class="botones">
                            <div class="d-flex flex-row flex-wrap">
                                <button type="button" class="btn button primary-button me-4 text-uppercase"><a
                                    href="sobre-mi.html">sobre mí</a></button>
                                <button type="button" class="btn button secundary-button text-uppercase"><a
                                    href="contacto.html">Contactame</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 imagen-titulo">
                        <img src="./images/inicio-2.jpg" alt="imagen" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--Fin menu principal-->

    <!--inicio del footer-->
    <footer class="area-footer">
        <div class="container">
            <div class="col-md-12 mt-5">
                <div class="col-md-12 col-sm-3 text-center">
                    <p class="text-uppercase p-0 par1">Estoy disponible para proyectos freelance y trabajos full-time.
                    </p>
                </div>
                <div class="col-md-12 col-sm-3 text-center">
                    <small class="pequeño">E-mail</small>
                    <a href="mailto:anderson.sarmiento13@gmail.com" class="mail">anderson.sarmiento13@gmail.com</a>
                </div>
                <div class="col-md-12 col-sm-3 redes text-center">
                    <a href="https://github.com/vghybrid" target="_blank" title="Github"><i
                            class="fab fa-github-square"></i></a>
                    <a href="www.linkedin.com/in/anderson-sarmiento-peña" target="_blank" title="Linkedin"><i
                            class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!--fin del footer-->

</body>

</html>