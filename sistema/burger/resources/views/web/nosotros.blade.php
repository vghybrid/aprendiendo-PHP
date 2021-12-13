@extends('web.plantilla')
@section('contenido')
<!-- --------------------------------------------------------------------------- -->
<section class="bg-02 mt-5" id="about-us">
    <div class="shape-02"></div>
    <div class="shape-03"></div>
    <div class="shape-04"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="wrapper">
                    <div class="image">
                        <img src="web/assets/images/hamburguesa Nosotros.png">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="content mt-5">

                    <h1>SOBRE NOSOTROS</h1>
                    <h2 class="mt-4">La comida es una parte importante de nuestra vida</h2>
                    <p>Nos preocupamos por ofrecerte una excelente propuesta.           
                    Productos elaborados con materias primas de la más alta calidad. 
                    Contamos con la más moderna tecnología para la elaboración de nuestras hamburguesas. 
                    Exquisitos sabores que harán de tus almuerzos y cenas momentos únicos.</p>

                    <p>Gracias por siempre elegir Hamburguesas De Verdad.</p>
                    
                    <div id="carouselExampleSlidesOnly" class="carousel slide text-center mt-3" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <h2 style="background-color:orange;">PRODUCTOS DE CALIDAD</h2>
                            </div>
                            <div class="carousel-item">
                                <h2 style="background-color:orange;">SABORES ORIGINALES</h2>
                            </div>
                            <div class="carousel-item">
                                <h2 style="background-color:orange;">COME RICO, VIVI FELIZ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-05 pt-0">
    <div class="shape-03"></div>
    <div class="shape-04"></div>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12  text-center">
                <div class="heading">
                    <h2 style="color:orange;">TRABAJA CON NOSOTROS</h2>
                    <p>Completa el formulario y postulate para ser parte de nuestra empresa</p>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="wrapper">
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Correo" required="email" role="text" name="txtCorreo">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre" required="name" role="text" name="txtNombre">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apellido" required="apellido" role="text" name="txtApellido">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Teléfono" required="telefono" role="text" name="txTel">
                        </div>
                        <div class="form-group">
                            <label for="" class="text-left" style="color:orange;">Adjuntar CV</label>
                            <input type="file" name="txtArchivo" id="txtArchivo" class="form-control-file" accept=".pdf, .doc,.docx">
                            <small>Adjuntar solo archivos .pdf, .doc, .docx</small>
                        </div>
                        <div class="form-group d-flex justify-content-center mt-2">
                            <button type="submit" name="btnEnviarPost" class="btn">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </div>
</section>

@endsection