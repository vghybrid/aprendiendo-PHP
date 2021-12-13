@extends('web.plantilla')
@section('contenido')
<section id="contact" class="contact-wrapper">
      <div class="container mt-5">
            <div class="row">
                  <div class="col-13 text-center">
                        <div class="heading">
                              <h3>Carrito</h3>
                        </div>
                  </div>
                  <div class="col-6 offset-3">
                        <div class="wrapper">
                              <form method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                                    <table class="table table-hover border">
                                          <tr>
                                                <th>Cant</th>
                                                <th>Imagen</th>
                                                <th>Producto</th>
                                                <th>Precio unitario</th>
                                                <th></th>
                                          </tr>
                                          @foreach($aCarritos as $pos => $item)
                                          <tr>
                                                <td>{{$item->cantidad}}</td>
                                                <td><img src='/files/{{$item->imagen}}' class="imagenes"></td>
                                                <td>{{$item->nombre_producto}}</td>
                                                <td>{{$item->precio}}</td>
                                                <td>
                                                      <a href="/carrito/eliminar/{{$item->idcarrito}}" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                          </tr>
                                          @endforeach
                                          <tr>
                                                <th>TOTAL</th>
                                                <td colspan="4" class="text-center">${{$total}}</td>
                                          </tr>
                                          
                                    </table>

                                    <div class="mt-1">
                                          <label class="pt-3" for="lstSucursal">Sucursal donde retirar el pedido:</label>
                                          <select name="lstSucursal" id="lstSucursal" class="form-control" required>
                                                <option value disabled selected>Seleccionar</option>
                                                @foreach($aSucursales as $sucursal)
                                                      <option value="{{$sucursal->idsucursal}}">{{$sucursal->nombre}}</option>
                                                @endforeach
                                          </select>
                                    </div>
                                    <div class="mt-3">
                                          <label class="pt-3" for="lstPago">Modalidad de pago:</label>
                                          <select name="lstPago" id="lstPago" class="form-control" required>
                                                <option value disabled selected>Seleccionar</option>
                                                <option value="1">Efectivo</option>
                                                <option value="3">Mercado Pago</option>
                                          </select>
                                    </div>
                                    <div class="mt-4">
                                          <textarea class="form-control" name="txtComentarios" id="txtComentarios" rows="6" placeholder="Añadir comentarios...."></textarea>
                                    </div>
                                    <div class="mt-3 d-flex justify-content-around">
                                          <a href="/takeaway" class="btn">CONTINUAR PEDIDO</a>
                                          <button type="submit" class="btn">FINALIZAR PEDIDO</button>
                                    </div>
                              </form>

                        </div>
                  </div>


            </div>
      </div>
</section>
@endsection