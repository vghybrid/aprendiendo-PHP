<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente;
use App\Entidades\Estado;
use App\Entidades\Pedido;
use App\Entidades\Pedido_detalle;
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use App\Entidades\Sucursal;
use App\Entidades\Producto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

require app_path() . '/start/constants.php'; //Constantes

class ControladorPedido extends Controller
{

    public function index()
    {
        $titulo = "Listado de pedidos";
        if (Usuario::autenticado() == true) {
            if (!Patente::autorizarOperacion("PEDIDOCONSULTA")) {
                $codigo = "PEDIDOCONSULTA";
                $mensaje = "No tiene permisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                return view('pedido.pedido-listar', compact('titulo'));
            }
        } else {
            return redirect('admin/login');
        }
    }

    public function nuevo()
    {
        $titulo = "Nuevo pedido";

        $sucursal = new Sucursal();
        $array_sucursales = $sucursal->obtenerTodos();

        $producto = new Producto();
        $array_productos = $producto->obtenerTodos();

        $cliente = new Cliente();
        $array_clientes = $cliente->obtenerTodos();

        $estado = new Estado();
        $array_estados = $estado->obtenerTodos();

        $pedido = new Pedido();
        
        $pedido_detalle = new Pedido_detalle();
        $array_pedido_detalle = $pedido_detalle->ObtenerTodos();

        return view("pedido.pedido-nuevo", compact('titulo', 'pedido', 'array_sucursales', 'array_clientes', 'array_estados', 'array_productos', 'array_pedido_detalle'));
    }

    public function guardar(Request $request)
    {
        try {
            //Define la entidad servicio
            $titulo = "Modificar pedido";
            $pedido = new Pedido();
            $pedido->cargarDesdeRequest($request);

            //validaciones
            if ($pedido->fk_idcliente == "" || $pedido->fk_idsucursal == "" || $pedido->fk_idestado == "") {
                $msg["ESTADO"] = MSG_ERROR;
                $msg["MSG"] = "Complete todos los datos";
            } else {
                if ($_POST["id"] > 0) {
                    //Es actualizacion
                    $pedido->actualizar();

                    $msg["ESTADO"] = MSG_SUCCESS;
                    $msg["MSG"] = OKINSERT;
                } else {
                    //Es nuevo
                    $pedido->insertar();

                    $msg["ESTADO"] = MSG_SUCCESS;
                    $msg["MSG"] = OKINSERT;
                }

                return view('pedido.pedido-listar', compact('titulo', 'msg'));
            }
        } catch (Exception $e) {
            $msg["ESTADO"] = MSG_ERROR;
            $msg["MSG"] = ERRORINSERT;
        }

        return view('pedido.pedido-nuevo', compact('msg', 'pedido', 'titulo')) . '?id=' . $pedido->idpedido;

    }

    public function cargarGrilla()
    {
        $request = $_REQUEST;

        $entidad = new Pedido();
        $aPedidos = $entidad->obtenerFiltrado();

        $data = array();
        $cont = 0;

        $inicio = $request['start'];
        $registros_por_pagina = $request['length'];

        for ($i = $inicio; $i < count($aPedidos) && $cont < $registros_por_pagina; $i++) {
            $row = array();
            $row[] = "<a href='/admin/pedido/".$aPedidos[$i]->idpedido."' class='btn btn-secondary'><i class='fas fa-search'></i></a>";
            $row[] = date_format(date_create($aPedidos[$i]->fecha), "d/m/Y");
            $row[] = $aPedidos[$i]->cliente;
            $row[] = $aPedidos[$i]->sucursal;
            $row[] = $aPedidos[$i]->estado;
            $row[] = "$" . number_format($aPedidos[$i]->total, 2, ",", ".");
            $cont++;
            $data[] = $row;
        }

        $json_data = array(
            "draw" => intval($request['draw']),
            "recordsTotal" => count($aPedidos), //cantidad total de registros sin paginar
            "recordsFiltered" => count($aPedidos), //cantidad total de registros en la paginacion
            "data" => $data,
        );
        return json_encode($json_data);

    }

    public function editar($id)
    {
        $titulo = "Modificar pedido";
        if (Usuario::autenticado() == true) {
            if (!Patente::autorizarOperacion("PEDIDOEDITAR")) {
                $codigo = "PEDIDOEDITAR";
                $mensaje = "No tiene pemisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                $pedido = new Pedido();
                $pedido->obtenerPorId($id);

                $sucursal = new Sucursal();
                $array_sucursales = $sucursal->obtenerTodos();

                $cliente = new Cliente();
                $array_clientes = $cliente->obtenerTodos();

                $estado = new Estado();
                $array_estados = $estado->obtenerTodos();

                $producto = new Producto();
                $array_productos = $producto->obtenerTodos();

                return view('pedido.pedido-nuevo', compact('pedido', 'titulo', 'array_sucursales', 'array_clientes', 'array_estados', 'array_productos'));
            }
        } else {
            return redirect('admin/login');
        }
    }

    public function eliminar(Request $request)
    {
        $id = $request->input('id');

        if (Usuario::autenticado() == true) {
            if (Patente::autorizarOperacion("PEDIDOBAJA")) {

                $entidad = new Pedido();
                $entidad->idpedido = $id;
                $entidad->eliminar();

                $aResultado["err"] = EXIT_SUCCESS; //eliminado correctamente
            } else {
                $codigo = "PEDIDOBAJA";
                $aResultado["err"] = "No tiene pemisos para la operaci&oacute;n.";
            }
            echo json_encode($aResultado);
        } else {
            return redirect('admin/login');
        }
    }

    public function cargarProductos(){
        $request = $_REQUEST;

        $entidad = new Pedido_detalle();
        $aPedido_detalle = $entidad->ObtenerTodos();

        $data = array();
        $cont = 0;

        $inicio = $request['start'];
        $registros_por_pagina = $request['length'];

        for ($i = $inicio; $i < count($aPedido_detalle) && $cont < $registros_por_pagina; $i++) {
            $row = array();
            $row[] = "<img src='/files/".$aPedido_detalle[$i]->imagen."' class='img-thumbnail'>";
            $row[] = $aPedido_detalle[$i]->nombre;
            $row[] = $aPedido_detalle[$i]->descripcion;
            $row[] = "$" . number_format($aPedido_detalle[$i]->precio, 2, ",", ".");
            $cont++;
            $data[] = $row;
        }

        $json_data = array(
            "draw" => intval($request['draw']),
            "recordsTotal" => count($aPedido_detalle), //cantidad total de registros sin paginar
            "recordsFiltered" => count($aPedido_detalle), //cantidad total de registros en la paginacion
            "data" => $data,
        );
        return json_encode($json_data);

    }

}
