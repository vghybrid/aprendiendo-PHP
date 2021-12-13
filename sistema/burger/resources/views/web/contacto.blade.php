@extends('web.plantilla')    
@section('contenido')
            <section id="contact" class="contact-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 pt-5 text-center">
                            <div class="heading">
                                <h2>Contacto</h2>
                                <p>Abierto a sus consultas. En forma rapida resolveremos inquietudes. 
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="wrapper">
                                <form action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Ingrese su nombre"  role="text" name="nombre" >
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Ingrese su mail"  role="text" type="email" name="correo">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Ingrese tu telefono"  role="phone" name="telefono">
                                    </div>
                                    <div class="form-group">
                                        <textarea .
                                        id="" cols="30" rows="8" placeholder="Ingrese mensaje" name="mensaje"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn">Contactar</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="wrapper">
                                <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52483.89348129355!2d-58.375625527540336!3d-34.699041770570524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccd2194f3cfb7%3A0x8c054a901d575260!2sLan%C3%BAs%2C%20Provincia%20de%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1635459212018!5m2!1ses!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
