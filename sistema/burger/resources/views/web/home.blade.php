@extends('web.plantilla')
@section('contenido')
<main>
    <section class="slider">
        <div class="shape"></div>
        <div class="shape-01"></div>
        <div class="banner">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <div class="content">
                                            <h1>tu comida favorita entregada y fresca</h1>
                                            <h5>este es el lugar ideal para que vivas una experiencia gastronómica diferente e inolvidable.</h5>
                                            <ol>
                                                <li><a href="#">Ordená ahora<span class="flaticon-right-arrow"></span></a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <img src="web/assets/images/slider/slide-01.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <div class="content">
                                            <h1>tu comida favorita entregada y fresca</h1>
                                            <h5>Si amas la buena hamburguesa por encima de todas las cosas, descubrirás un sin fin de combinaciones que, sin ninguna duda, te van a sorprender</h5>
                                            <ol>
                                                <li><a href="#">Ordená ahora<span class="flaticon-right-arrow"></span></a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <img src="web/assets/images/slider/slide-02.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <div class="content">
                                            <h1>tu comida favorita entregada y fresca</h1>
                                            <h5>Comer es compartir, mientras esperas el festín te daremos motivos para no tener las manos quietas</h5>
                                            <ol>
                                                <li><a href="#">Ordená ahora<span class="flaticon-right-arrow"></span></a></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <div class="wrapper">
                                        <img src="web/assets/images/slider/slide-03.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                </a>
            </div>
        </div>
    </section>
    <!-- --------------------------------------------------------------------------- -->
    <section class="bg-01">
        <div class="container">
            <div class="row">
                @foreach($array_sucursales as $item)
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icon">
                                <span class="flaticon-pin"></span>
                            </div>
                            <div class="sentence">
                                <strong>{{$item->nombre}}</strong>
                                <p>{{$item->domicilio}}</p>
                                <p>{{$item->telefono}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="bg-03">
        <div class="shape-05"></div>
        <div class="shape-06"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="heading">
                        <h2>Como funciona</h2>
                        <p>Hamburguesas De Verdad nace con un claro objetivo, revolucionar la hamburguesa tradicional, sencillamente apostamos por carne de primera hecha a la parrilla, acompañada de los mejores y más frescos ingredientes combinándolos de forma sorprendente y donde todo se hace al momento.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icons">
                                <span class="flaticon-fish"></span>
                            </div>
                            <h3>Elija tus comidas</h3>
                            <p>Hamburguesas De Verdad es mucho más que una cadena de hamburgueserías, es un auténtico estilo de vida basado en dos conceptos clave: calidad y creatividad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icons">
                                <span class="flaticon-touch"></span>
                            </div>
                            <h3>Elegí con que frecuencia</h3>
                            <p>Reformulamos la receta original, desarrollando hamburguesas gourmet, llenas de sabor, de estilo casero, usando los mejores ingredientes frescos y naturales, para que nos elijas con más frecuencia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="wrapper">
                        <div class="content">
                            <div class="icons">
                                <span class="flaticon-catering"></span>
                            </div>
                            <h3>Entregas rápidas</h3>
                            <p>Nuestro sistema de entregas ser la más rápida, ven a visitarnos y haz tu pedido take away. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ------------------------------------------------------------------ -->

</main>
@endsection