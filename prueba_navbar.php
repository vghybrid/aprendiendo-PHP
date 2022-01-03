<!doctype html>
<html lang="es" class="h-100">

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba 2.0</title>
    <!--archivo bootstrap-->
    <link rel="stylesheet" href="./css/bootstrap/css/bootstrap.min.css">
    <!--archivo fontawesome -->
    <link rel="stylesheet" href="./css/fontawesome/css/all.min.css">
    <!--archivo css-->
    <link rel="stylesheet" href="./css/estilos.css">
    <!--favicon-->
    <link rel="shortcut icon" href="./images/favicon.ico">


    <!-- Custom styles for this template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <header class="area-header">
        <div class="menu-principal">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">Portfolio</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="me-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($pg == "inicio") ? "active" : "" ?>" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" href="sobre-mi.php">Sobre mí</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyectos.php">Proyectos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($pg == "contacto") ? "active" : "" ?>" href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>