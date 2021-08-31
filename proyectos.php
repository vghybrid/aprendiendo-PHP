<?php

$pg = "proyectos";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <!--archivo bootstrap-->
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <!--archivo fontawesome -->
    <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
    <!--archivo css-->
    <link rel="stylesheet" href="./css/estilos.css">
</head>

<body>
    <!--Inicio del menu-->

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
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sobre-mi.html">Sobre mí</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="proyectos.html">Proyectos</a>
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
    <!--Fin del menu-->
    <!--inicio proyectos-->
    <main id="proyectos">
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <h1 class="text-title">Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 my-4">
                    <p class="texto-secundario">
                        Los siguientes son algunos de los trabajos que he realizado:
                    </p>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                    <div class="row card">
                        <div class="col-12 bg-white p-0">
                            <img src="./images/abmclientes.png" class="img-fluid">
                        </div>
                        <div class="col-12 py-3 coso">
                            <h3 class="text-uppercase">
                                abm clientes
                            </h3>
                        </div>
                        <div class="col-12 py-3">
                            <p class="texto-secundario">
                                Alta, baja y modificación de un registro de clientes. Realizado en HTML, CSS, PHP,
                                Bootstrap y Json.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-6 py-4">
                                <a href="#" class="btn button primary-button text-uppercase mt-0" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 py-4">
                                <a href="#" class="btn button secundary-button text-uppercase mt-0" target="_blank">Codigo
                                    fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                    <div class="row card">
                        <div class="col-12 bg-white p-0">
                            <img src="./images/abmventas.png" class="img-fluid">
                        </div>
                        <div class="col-12 py-3 coso">
                            <h3 class="text-uppercase">
                                sistema gestión de ventas
                            </h3>
                        </div>
                        <div class="col-12 py-3">
                            <p class="texto-secundario">
                                Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                                Bootstrap, Js, Ajax, jQuery y MySQL de base de datos.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-6 py-4">
                                <a href="#" class="btn button primary-button text-uppercase mt-0" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 py-4">
                                <a href="#" class="btn button secundary-button text-uppercase mt-0" target="_blank">Codigo
                                    fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-12 p-sm-4 px-4 py-2">
                    <div class="row card">
                        <div class="col-12 bg-white p-0">
                            <img src="./images/proyecto-integrador.png" class="img-fluid">
                        </div>
                        <div class="col-12 py-3 coso">
                            <h3 class="text-uppercase">
                                proyecto integrador
                            </h3>
                        </div>
                        <div class="col-12 py-3">
                            <p class="texto-secundario">
                                Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX, HTML, CSS,
                                Mercadopago con panel administrador, gestor de usuarios, módulo de permisos y
                                funcionalidades a fines
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-6 py-4">
                                <a href="#" class="btn button primary-button text-uppercase mt-0" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 py-4">
                                <a href="#" class="btn button secundary-button text-uppercase mt-0" target="_blank">Codigo
                                    fuente</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--fin proyectos-->
    <!--inicio del footer-->
    <footer class="area-footer">
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-12 col-sm-3 text-center">
                    <p class="text-uppercase p-0 par1">Estoy disponible para proyectos freelance y trabajos full-time.
                    </p>
                </div>
                <div class="col-md-12 col-sm-3 text-center p-0">
                    <small class="pequeño">E-mail</small>
                    <a href="mailto:anderson.sarmiento13@gmail.com" class="mail">anderson.sarmiento13@gmail.com</a>
                </div>
                <div class="col-md-12 col-sm-3 redes text-center py-4">
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