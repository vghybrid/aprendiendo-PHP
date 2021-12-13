@extends('web.plantilla')
@section('contenido')
<section id="contact" class="contact-wrapper">
      <div class="container">
            <form action="" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                  <div class="row">
                        <div class="col-12 text-center py-5">
                              <div class="heading">
                                    <h2>Registro</h2>
                              </div>
                        </div>
                  </div>
                  <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <div class="wrapper">
                                    <div class="form-group">
                                          <label>Nombre: </label>
                                          <input class="form-control" type="text" placeholder="Ingrese su nombre" required name="txtNombre">
                                    </div>
                                    <div class="form-group">
                                          <label>Apellido: </label>
                                          <input class="form-control" type="text" placeholder="Ingrese su apellido" required name="txtApellido">
                                    </div>
                              </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                              <div class="wrapper">
                                    <div class="form-group">
                                          <label>Teléfono: </label>
                                          <input class="form-control" type="tel" placeholder="Ingrese su teléfono" required name="txtTelefono">
                                    </div>
                                    <div class="form-group">
                                          <label>Clave: </label>
                                          <input class="form-control" type="password" placeholder="Ingrese su clave" required name="txtClave">
                                    </div>
                              </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                              <div class="wrapper m-0">
                                    <div class="form-group">
                                          <label>Correo: </label>
                                          <input class="form-control" type="email" placeholder="Ingrese su correo" required name="txtCorreo">
                                    </div>
                              </div>
                        </div>
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12 d-flex justify-content-center">
                              <div class="wrapper">
                                    <div class="text-center pb-3">
                                          <button type="submit" class="btn">Enviar</button>
                                    </div>
                              </div>
                        </div>
                  </div>
            </form>
      </div>
</section>
@endsection