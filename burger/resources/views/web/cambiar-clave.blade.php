@extends('web.plantilla')
@section('contenido')
<section id="contact" class="contact-wrapper">
      <div class="container">
            <div class="row">
                  <div class="col-12 text-center py-5">
                        <div class="heading">
                              <h2>Cambiar contraseña</h2>
                        </div>
                  </div>
            </div>
            <div>
                  @if($msg)
                  {{$msg}}
                  @endif
            </div>
            <div class="row">
                  <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper">
                              <form method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                    
                                          <div class="form-group col-12">
                                                <label for="">Clave actual: </label>
                                                <input class="form-control d-inline" required type="password" name="txtClaveAnt">
                                          </div>
                                          <div class="form-group col-12">
                                                <label for="">Clave nueva: </label>
                                                <input class="form-control" required type="password" name="txtClaveNew">
                                          </div>

                                          <div class="form-group col-12">
                                                <label for="">Confirme la clave nueva: </label>
                                                <input class="form-control" required type="password" name="txtClaveNewConfirm">
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