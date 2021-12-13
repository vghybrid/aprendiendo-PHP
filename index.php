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
    <!--favicon-->
    <link rel="shortcut icon" href="./images/favicon.ico">
</head>

<body>

    <!--Inicio del header-->
    <?php include_once("header.php");?>
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
                                    href="sobre-mi.php">sobre mí</a></button>
                                <button type="button" class="btn button secundary-button text-uppercase"><a
                                    href="contacto.php">Contactame</a></button>
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
    <?php include_once("footer.php");?>
    <!--fin del footer-->

</body>

</html>