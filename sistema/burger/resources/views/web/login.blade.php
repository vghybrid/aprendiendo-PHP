@extends('web.plantilla')
@section('contenido')
<section id="contact" class="contact-wrapper">
      <div class="container">
            <div class="row">
                  <div class="col-12 text-center pt-5">
                        <div class="heading">
                              <h2>Iniciar sesión</h2>
                        </div>
                  </div>
            </div>
            @if (isset($msg))
            <div class="alert alert-danger" role="alert">
                  @{{$msg}}
            </div>
            @endif
            <div class="row">
                  <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper">
                              <form method="POST">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                    <div class="form-group">
                                          <label for="">Correo: </label>
                                          <input class="form-control" placeholder="Ingrese su correo" required type="email" name="txtCorreo">
                                    </div>
                                    <div class="form-group">
                                          <label for="">Clave: </label>
                                          <input class="form-control" placeholder="Ingrese su clave" required type="password" name="txtClave">
                                    </div>
                                    <div class="d-flex justify-content-center pb-3">
                                          <button type="submit" class="btn">Ingresar</button>
                                    </div>
                                    <div class="text-center">
                                          <p>¿No tenés cuenta?<a href="/registro">Registrate acá</a></p>
                                          <a href="/olvido-su-contrasena">¿Olvido su contraseña?</a>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</section>
@endsection