<?php

$pg = "contacto";

if ($_POST) {
    $ToEmail = 'contacto@andersonsarmiento.com.ar'; 
    $EmailSubject = 'Prueba'; 
    $mailheader = "From: ".$_POST["txtCorreo"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["txtCorreo"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Nombre: ".$_POST["txtNombre"].""; 
    $MESSAGE_BODY .= "Apellido: ".$_POST["txtApellido"].""; 
    $MESSAGE_BODY .= "Email: ".$_POST["txtCorreo"].""; 
    $MESSAGE_BODY .= "Mensaje: ".($_POST["txtMensaje"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Fallo"); 
    header("Location: confirmacion-envio.php");
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
    <?php include_once("header.php");?>
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
                            <input type="text" id="txtApellido" name="txtApellido" placeholder="Apellido" class="form-control shadow rounded" required="">
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
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn button secundary-button text-uppercase mt-0 mb-5">enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!--fin contacto-->

    <!--inicio del footer-->
    <?php include_once("footer.php");?>
    <!--fin del footer-->

</body>

</html>