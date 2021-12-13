<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Restarant</title>
    <link rel="stylesheet" href="web/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/assets/font/flaticon.css">
    <link rel="stylesheet" href="web/assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="web/assets/css/style.css" />
    <link href="{{ asset('css/fontawesome/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/fontawesome/css/fontawesome.min.css') }}" rel="stylesheet" type="text/css">

</head>
<!-- =================Body Started==================== -->

<body>

    <!-- =================Header Started================ -->
    <header>
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="menu-toggle"></div>
                    <div class="logo">
                        <img src="web/assets/images/logo/logo.png">
                    </div>

                    <div class="my-nav">
                        <div class="menu">
                            <ul>
                                <li><a href="/">Inicio</a></li>
                                <li><a href="/takeaway">Takeaway</a></li>
                                <li><a href="/nosotros">Nosotros</a></li>
                                <li><a href="/contacto">Contacto</a></li>
                                @if(Session::get("idCliente") != "")
                                <li>
                                    <div class="dropdown">
                                        <button class="btn-login dropdown" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Mi cuenta
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <a href="/mi-cuenta" class="dropdown-item" type="submit">Perfil</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="/cambiar-clave" class="dropdown-item" type="submit">Cambiar clave</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="/logout" class="dropdown-item" type="submit">Cerrar sesión</a>
                                        </div>
                                    </div>
                                </li>
                                @else
                                <li><a href="/login">Ingresar</a></li>
                                @endif
                                <li><a href="/carrito"><span class="flaticon-shopping-cart"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- =================Header End================ -->
    <!-- ->->->->->->->->->->->->->->->->->->->->->->->->->->->->->-> -->

    <!-- ================================================================= -->
    <!-- ->->->->->->->->->->->->->->->->->->->->->->->->->->->->->-> -->

    @yield('contenido')

    <!-- ================================================================= -->
    <!-- ->->->->->->->->->->->->->->->->->->->->->->->->->->->->->-> -->
    <!-- =================Main End================ -->

    <!-- =====================>>>>>Footer Started>>>>>======================== -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                    <div class="footer-content">
                        <ul>
                            <li><i class="flaticon-facebook"></i></li>
                            <li><i class="flaticon-twitter"></i></li>
                            <li><i class="flaticon-behance"></i></li>
                            <li><i class="flaticon-instagram"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                    <div class="footer-content">
                        <h2>Email de contacto</h2>
                        <a href="mailto: hamburguesasdeverdad@gmail.com">hamburguesasdeverdad@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 text-center">
                    <div class="footer-content">
                        <img src="http://127.0.0.1:8000/web/assets/images/logo/logo.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container">
                <div class="copy-right-card">
                    <p>2020 @ All Rights Reserved Diseñado y desarrollado por Curso 06-2021(Anderson, Ezequiel, Maricel y Tomás)</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================================================================= -->
    <!-- ->->->->->->->->->->->->->->->->->->->->->->->->->->->->->-> -->
    <!-- =================Footer End================ -->

</body>
<!-- =================Body End==================== -->

<script src="web/assets/js/jquery-3.2.1.min.js"></script>
<script src="web/assets/js/popper.min.js"></script>
<script src="web/assets/js/bootstrap.min.js"></script>
<script src="web/assets/js/plugins/owl.carousel.min.js"></script>
<script src="web/assets/js/script.js"></script>

</html>