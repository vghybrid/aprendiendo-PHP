@extends('web.plantilla')
@section('contenido')
<section id="contact" class="contact-wrapper">
      <div class="container mt-5">
            <div class="row  text-center">
                  <div class="col-6">
                        <div class="heading">
                              <h2>Ingrese</h2>
                        </div>
                  </div>
                  <div class="col-6">
                        <div class="heading">
                              <h2>Pedidos Activos</h2>
                        </div>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper">
                              <form method="POST">
                                     <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                    <div class="form-group">
                                          <input type="text" class="form-control" value="{{$entidad->nombre}}" required="name" role="text" name="txtNombre">
                                    </div>
                                    <div class="form-group">
                                          <input type="text" class="form-control" value="{{$entidad->apellido}}" required="apellido" role="text" name="txtApellido">
                                    </div>
                                    <div class="form-group">
                                          <input type="tel" class="form-control" value="{{$entidad->telefono}}" required="telefono" role="text" name="txtTelefono">
                                    </div>
                                    <div class="form-group">
                                          <input type="email" class="form-control" value="{{$entidad->correo}}" required="email" role="text" name="txtCorreo">
                                    </div>

                                    <div class="form-group">
                                          <button type="submit" name="btnEnviarPost" class="btn">Actualizar</button>
                                    </div>
                              </form>
                        </div>
                  </div>
                  
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="wrapper">
                        <table class="table table-hover border">
                              <tr>
                                    <th># Pedido</th>
                                    <th>Fecha</th>
                                    <th>Sucursal</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                              </tr>
                              @foreach($aPedido as $pos => $item)
                                          <tr>
                                                <td>{{$item->idpedido}}</td>
                                                <td><?php echo date_format(date_create($item->fecha), 'd/m/Y'); ?></td>
                                                <td>{{$item->sucursal}}</td>
                                                <td><?php echo "$" . number_format($item->total, 2, ",", ".");?></td>
                                                <td>{{$item->estado}}</td>
                                          </tr>
                              @endforeach
                        </table>

            </div>
      </div>
</section>
@endsection