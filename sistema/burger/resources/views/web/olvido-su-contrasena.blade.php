@extends('web.plantilla')
@section('contenido')
<section id="contact" class="contact-wrapper">
      <div class="container">
            <div class="row">
                  <div class="col-12 text-center py-5">
                        <div class="heading">
                              <h2>Restablecer contraseña</h2>
                        </div>
                  </div>
            </div>
            @if (isset($msg))
            <div class="alert alert-danger" role="alert">
                  {{$msg}}
            </div>
            @endif
            <div class="row">
                  <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper">
                              <form method="POST">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                    <div class="form-group">
                                          <label for="">Correo: </label>
                                          <input class="form-control" placeholder="Ingrese su correo" required role="text" name="txtCorreo">
                                    </div>
                                    <div class="d-flex justify-content-center pb-3">
                                          <button type="submit" class="btn">Enviar</button>
                                    </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>
</section>
@endsection