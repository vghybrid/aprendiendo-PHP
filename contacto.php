<?php

$pg = "contact";

if ($_POST) {
    $nombre = $_REQUEST['txtNombre'];
    $correo = $_REQUEST['txtCorreo'];
    $telefono = $_REQUEST['txtTelefono'];
    $mensaje = $_REQUEST['txtMensaje'];


    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Cabeceras adicionales
    $cabeceras .= 'To: anderson.sarmiento13@gmail.com' . "\r\n";
    $cabeceras .= 'From: Admin <ander@sarmiento.com.ar>' . "\r\n";

    $para = "anderson.sarmiento13@gmail.com";
    $asunto = "Se contactaron desde tu sitio web";
    $mensaje = "
    nombre = $nombre<br>
    correo = $correo<br>
    telefono = $telefono<br>
    mensaje = <br>$mensaje<br>
    ";

    // Enviarlo
    //mail($para, $asunto, $mensaje, $cabeceras);
    header("Location: confimacion-envio-en.php");
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
                                <a class="nav-link" href="proyectos.html">Proyectos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--Fin del menu-->

    <!--inicio contacto-->
    <main id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-title my-5">Contacto</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <p class="texto-secundario">
                        Te invito a que te contactes enviándome un mensaje o bien por whatsapp.
                    </p>
                </div>
                <div class="col-6">
                    <form action="" method="POST">
                        <div class="mb-3">
                            <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control shadow rounded" required="">
                        </div>
                        <div class="mb-3">
                            <input type="text" id="txtTelefono" name="txtTelefono" placeholder="Teléfono" class="form-control shadow rounded" required="">
                        </div>
                        <div class="mb-3">
                            <input type="text" id="txtCorreo" name="txtCorreo" placeholder="Correo" class="form-control shadow rounded" required="">
                        </div>
                        <div class="mb-3">
                            <textarea name="txtMensaje" id="txtMensaje" placeholder="Escriba su mensaje aqui" class="form-control shadow rounded" required=""></textarea>
                        </div>
                        <div>
                            <button id="btnEnviar" name="btnEnviar" class="btn button secundary-button text-uppercase mt-0 mb-5">enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!--fin contacto-->

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