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
    <!--favicon-->
    <link rel="shortcut icon" href="./images/favicon.ico">
</head>

<body>

    <!--Inicio del header-->
    <?php include_once("header.php"); ?>
    <!--Fin del header-->

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
                                <a href="./abmventas/" class="btn button primary-button text-uppercase mt-0" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 py-4">
                                <a href="https://github.com/vghybrid/abm_clientes" class="btn button secundary-button text-uppercase mt-0" target="_blank">Codigo
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
                                <a href="./sistema/login.php" class="btn button primary-button text-uppercase mt-0" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 py-4">
                                <a href="https://github.com/vghybrid/sistema_ventas" class="btn button secundary-button text-uppercase mt-0" target="_blank">Codigo
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
                                <a href="./burger/" class="btn button primary-button text-uppercase mt-0" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 py-4">
                                <a href="https://github.com/depcsuite/burger062021" class="btn button secundary-button text-uppercase mt-0" target="_blank">Codigo
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
    <?php include_once("footer.php"); ?>
    <!--fin del footer-->

</body>

</html>