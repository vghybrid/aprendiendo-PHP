<?php

namespace App\Http\Controllers;

use App\Entidades\Cliente;
use App\Entidades\Sistema\Patente;
use App\Entidades\Sistema\Usuario;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

require app_path() . '/start/constants.php';

class ControladorCliente extends Controller
{

    public function index()
    {
        $titulo = "Listado de clientes";
        if (Usuario::autenticado() == true) {
            if (!Patente::autorizarOperacion("CLIENTECONSULTA")) {
                $codigo = "CLIENTECONSULTA";
                $mensaje = "No tiene permisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                return view('cliente.cliente-listar', compact('titulo'));
            }
        } else {
            return redirect('admin/login');
        }
    }

    public function nuevo()
    {
        $titulo = "Nuevo cliente";
        $cliente = new Cliente();

        return view("cliente.cliente-nuevo", compact('titulo', 'cliente'));
    }

    public function guardar(Request $request)
    {
        try {
            //Define la entidad servicio
            $titulo = "Modificar cliente";
            $cliente = new Cliente();
            $cliente->cargarDesdeRequest($request);

            //validaciones
            if ($cliente->nombre == "") {
                $msg["ESTADO"] = MSG_ERROR;
                $msg["MSG"] = "Complete todos los datos";
            } else {
                if ($_POST["id"] > 0) {
                    //Es actualizacion
                    $cliente->actualizar();

                    $msg["ESTADO"] = MSG_SUCCESS;
                    $msg["MSG"] = OKINSERT;
                } else {
                    //Es nuevo
                    $cliente->insertar();

                    $msg["ESTADO"] = MSG_SUCCESS;
                    $msg["MSG"] = OKINSERT;
                }

                return view('cliente.cliente-listar', compact('titulo', 'msg'));
            }
        } catch (Exception $e) {
            $msg["ESTADO"] = MSG_ERROR;
            $msg["MSG"] = ERRORINSERT;
        }

        return view('cliente.cliente-nuevo', compact('msg', 'cliente', 'titulo')) . '?id=' . $cliente->idcliente;

    }

    public function cargarGrilla()
    {
        $request = $_REQUEST;

        $entidad = new Cliente();
        $aClientes = $entidad->obtenerFiltrado();

        $data = array();
        $cont = 0;

        $inicio = $request['start'];
        $registros_por_pagina = $request['length'];

        for ($i = $inicio; $i < count($aClientes) && $cont < $registros_por_pagina; $i++) {
            $row = array();
            $row[] = "<a href='/admin/cliente/".$aClientes[$i]->idcliente."' class='btn btn-secondary'><i class='fas fa-search'></i></a>";
            $row[] = $aClientes[$i]->nombre;
            $row[] = $aClientes[$i]->apellido;
            $row[] = $aClientes[$i]->telefono;
            $row[] = $aClientes[$i]->correo;
            $cont++;
            $data[] = $row;
        }

        $json_data = array(
            "draw" => intval($request['draw']),
            "recordsTotal" => count($aClientes), //cantidad total de registros sin paginar
            "recordsFiltered" => count($aClientes), //cantidad total de registros en la paginacion
            "data" => $data,
        );
        return json_encode($json_data);

    }

     public function editar($id)
    {
        $titulo = "Modificar cliente";
        if (Usuario::autenticado() == true) {
            if (!Patente::autorizarOperacion("CLIENTEEDITAR")) {
                $codigo = "CLIENTEEDITAR";
                $mensaje = "No tiene pemisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                $cliente = new Cliente();
                $cliente->obtenerPorId($id);
                return view('cliente.cliente-nuevo', compact('cliente', 'titulo'));
            }
        } else {
            return redirect('admin/login');
        }
    }

     public function eliminar(Request $request)
    {
        $id = $request->input('id');

        if (Usuario::autenticado() == true) {
            if (Patente::autorizarOperacion("CLIENTEELIMINAR")) {

                $entidad = new Cliente();
                $entidad->idcliente = $id;
                $entidad->eliminar();

                $aResultado["err"] = EXIT_SUCCESS; //eliminado correctamente
            } else {
                $codigo = "CLIENTEELIMINAR";
                $aResultado["err"] = "No tiene pemisos para la operaci&oacute;n.";
            }
            echo json_encode($aResultado);
        } else {
            return redirect('admin/login');
        }
    }
}
