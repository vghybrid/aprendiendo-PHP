@extends('plantilla')
@section('titulo', $titulo)
@section('scripts')
<script>
      globalId = '<?php echo isset($pedido->idpedido) && $pedido->idpedido > 0 ? $pedido->idpedido : 0; ?>';
      <?php $globalId = isset($pedido->idpedido) ? $pedido->idpedido : "0"; ?>
</script>
@endsection
@section('breadcrumb')
<ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/admin/home">Inicio</a></li>
      <li class="breadcrumb-item"><a href="/admin/pedidos">Pedidos</a></li>
      <li class="breadcrumb-item active">Modificar</li>
</ol>
<ol class="toolbar">
      <li class="btn-item"><a title="Nuevo" href="/admin/pedido/nuevo" class="fa fa-plus-circle" aria-hidden="true"><span>Nuevo</span></a></li>
      <li class="btn-item"><a title="Guardar" href="#" class="fa fa-floppy-o" aria-hidden="true" onclick="javascript: $('#modalGuardar').modal('toggle');"><span>Guardar</span></a>
      </li>
      @if($globalId > 0)
      <li class="btn-item"><a title="Guardar" href="#" class="fa fa-trash-o" aria-hidden="true" onclick="javascript: $('#mdlEliminar').modal('toggle');"><span>Eliminar</span></a></li>
      @endif
      <li class="btn-item"><a title="Salir" href="#" class="fa fa-arrow-circle-o-left" aria-hidden="true" onclick="javascript: $('#modalSalir').modal('toggle');"><span>Salir</span></a></li>
</ol>
<script>
      function fsalir() {
            location.href = "/admin/pedidos";
      }
</script>
@endsection


@section('contenido')
<?php
if (isset($msg)) {
      echo '<div id = "msg"></div>';
      echo '<script>msgShow("' . $msg["MSG"] . '", "' . $msg["ESTADO"] . '")</script>';
}
?>
<div class="panel-body">
      <div id="msg"></div>
      <?php
      if (isset($msg)) {
            echo '<script>msgShow("' . $msg["MSG"] . '", "' . $msg["ESTADO"] . '")</script>';
      }
      ?>
      <form id="form1" method="POST">
            <div class="row">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}"></input>
                  <input type="hidden" id="id" name="id" class="form-control" value="{{$globalId}}" required>
                  <div class="form-group col-lg-6">
                        <label for="lstSucursal">Sucursal:</label>
                        <select name="lstSucursal" id="lstSucursal" class="form-control">
                              <option value disabled selected>Seleccionar</option>
                              @foreach($array_sucursales as $item)
                                    @if($pedido->fk_idsucursal == $item->idsucursal)
                                          <option      selected value="{{ $item->idsucursal }}">{{ $item->nombre }} - {{$item->domicilio}} </option>
                                    @else
                                          <option value="{{ $item->idsucursal }}">{{ $item->nombre }} </option>
                                    @endif
                              @endforeach
                        </select>
                  </div>
                  <div class="form-group col-lg-6">
                        <label for="lstCliente">Cliente:</label>
                        <select name="lstCliente" id="lstCliente" class="form-control">
                              <option value disabled selected>Seleccionar</option>
                              @foreach($array_clientes as $item)
                                    @if($pedido->fk_idcliente == $item->idcliente)
                                          <option selected value="{{ $item->idcliente }}">{{ $item->nombre }} {{ $item->apellido }}</option>
                                    @else
                                          <option value="{{ $item->idcliente }}">{{ $item->nombre }} {{ $item->apellido }}</option>
                                    @endif
                              @endforeach
                        </select>
                  </div>
                  
                  <div class="form-group col-lg-6">
                        <label for="lstEstado">Estado de pedido:</label>
                        <select name="lstEstado" id="lstEstado" class="form-control">
                              <option value disabled selected>Seleccionar</option>
                              @foreach($array_estados as $item)
                                    @if($pedido->fk_idestado == $item->idestado)
                                          <option selected value="{{ $item->idestado }}">{{ $item->nombre }}</option>
                                    @else
                                          <option value="{{ $item->idestado }}">{{ $item->nombre }}</option>
                                    @endif
                              @endforeach
                        </select>
                  </div>
                  <div class="form-group col-lg-6">
                        <label for="txtTotal">Total del pedido:</label>
                        <input type="text" name="txtTotal" class="form-control" value="{{$pedido->total}}">
                  </div>
                  <div class="form-group col-lg-6">
                        <label for="txtTotal">Comentarios:</label><br>
                        <textarea name="txtComentarios" id="txtComentarios" class="form-control" value="{{$pedido->sucursal}}"></textarea>
                  </div>
                  <div class="form-group col-lg-12">
                        <label for="txtFecha" class="">Fecha:</label><br>
                        <select name="lstDia" id="lstDia" class="fecha form-control d-inline">
                              <option disabled selected>DD</option>
                              @for($i = 1; $i < 32; $i++) 
                                    @if($pedido->fecha != "" && $i == date_format(date_create($pedido->fecha), "d"))
                                    <option selected value="{{$i}}">{{$i}}</option>
                                    @else
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endif
                              @endfor
                        </select>
                        <select name="lstMes" id="lstMes" class="fecha form-control d-inline">
                              <option disabled selected>MM</option>
                              @for($i = 1; $i < 13; $i++)
                                    @if($pedido->fecha != "" && $i == date_format(date_create($pedido->fecha), "m"))
                                    <option selected value="{{$i}}">{{$i}}</option>
                                    @else
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endif
                              @endfor
                        </select>
                        <select name="lstAnio" id="lstAnio" class="fecha form-control d-inline">
                              <option disabled selected>AAAA</option>
                              @for($i = date("Y"); $i <= date("Y"); $i++)
                                    @if($pedido->fecha != "" && $i == date_format(date_create($pedido->fecha), "Y"))
                                    <option selected value="{{$i}}">{{$i}}</option>
                                    @else
                                    <option value="{{$i}}">{{$i}}</option>
                                    @endif
                              @endfor
                        </select>
                  </div>
                  <!---
                  <div class=" form-group col-lg-6">
                        <label for="txtProducto" class="">Seleccionar productos:</label><br>
                        @foreach($array_productos as $item)
                              <input type="checkbox" value="{{$item->idproducto}}"> {{$item->nombre}} <br>
                        @endforeach
                  </div>
                  !-->
            </div>
      </form>
</div>
<div class="modal fade" id="mdlEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar registro?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                        </button>
                  </div>
                  <div class="modal-body">¿Deseas eliminar el registro actual?</div>
                  <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                        <button type="button" class="btn btn-primary" onclick="eliminar();">Sí</button>
                  </div>
            </div>
      </div>
</div>

<table id="grilla" class="display">
    <thead>
        <tr>
            <th>Imagen</th>  
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
        </tr>
    </thead>
</table> 

<script>

      var dataTable = $('#grilla').DataTable({
                  "processing": true,
                  "serverSide": true,
                  "bFilter": true,
                  "bInfo": true,
                  "bSearchable": true,
                  "pageLength": 25,
                  "order": [[ 0, "asc" ]],
                  "ajax": "{{ route('pedido.cargarProductos') }}"
            });
            
      $("#form1").validate();

      function guardar() {
            if ($("#form1").valid()) {
                  modificado = false;
                  form1.submit();
            } else {
                  $("#modalGuardar").modal('toggle');
                  msgShow("Corrija los errores e intente nuevamente.", "danger");
                  return false;
            }
      }

      function eliminar() {
            $.ajax({
                  type: "GET",
                  url: "{{ asset('admin/pedido/eliminar') }}",
                  data: {
                        id: globalId
                  },
                  async: true,
                  dataType: "json",
                  success: function(data) {
                        if (data.err = "0") {
                              msgShow("Registro eliminado exitosamente.", "success");
                              $("#btnEnviar").hide();
                              $("#btnEliminar").hide();
                              $('#mdlEliminar').modal('toggle');
                        } else {
                              msgShow("Error al eliminar", "success");
                        }
                  }
            });
      }
</script>
@endsection