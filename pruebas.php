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
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 my-5">
                    <h1 class="text-title">Proyectos</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="texto-secundario">
                        Los siguientes son algunos de los trabajos que he realizado:
                    </p>
                </div>
            </div>
        </div>
        <section id="abm">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2 class="texto-mi">
                            <i class="fas fa-pager"></i> ABM Clientes
                        </h2>
                    </div>
                </div>
                <div class="row rounded shadow">
                    <div class="col-md-4">
                        <img src="./images/abmclientes.png" class="img-fluid imagen"></div>
                    <div class="col-md-4 offset-md-4 align-self-end">
                        <a href="./abmventas/" class="btn button primary-button text-uppercase mt-0" target="_blank">Ver
                            online</a>
                    </div>
                </div>
        </section>
    </main>
    <!--fin proyectos-->

    <!--inicio del footer-->
    <?php include_once("footer.php"); ?>
    <!--fin del footer-->

</body>

</html>