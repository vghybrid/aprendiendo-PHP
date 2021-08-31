<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <div class="me-auto"></div>
                        <ul class="navbar-nav">
                        <li class="nav-item">
                                <a class="nav-link <?php echo ($pg == "inicio") ? "active" : "" ?>" href="index.html">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" href="sobre-mi.html">Sobre mí</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyectos.html">Proyectos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($pg == "contacto") ? "active" : "" ?>" href="contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--Fin del header-->
</body>