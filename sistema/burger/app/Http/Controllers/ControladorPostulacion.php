<?php

namespace App\Http\Controllers;

use App\Entidades\Postulacion;
use Illuminate\Routing\Controller;
use App\Entidades\Sistema\Patente;
use Illuminate\Http\Request;
use App\Entidades\Sistema\Usuario;

require app_path() . '/start/constants.php';


class ControladorPostulacion extends Controller
{

    public function index()
    {
        $titulo = "Listado de postulantes";
        if (Usuario::autenticado() == true) {
            if (!Patente::autorizarOperacion("POSTULANTECONSULTA")) {
                $codigo = "POSTULANTECONSULTA";
                $mensaje = "No tiene permisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                return view('postulacion.postulacion-listar', compact('titulo'));
            }
        } else {
            return redirect('admin/login');
        }
    }

    public function nuevo() {
        $titulo = "Nuevo postulante";
        if(Usuario::autenticado() == true){
            if (!Patente::autorizarOperacion("POSTULANTEALTA")) {
                $codigo = "POSTULANTEALTA";
                $mensaje = "No tiene pemisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                $usuario = new Postulacion();

                return view("postulacion.postulacion-nuevo", compact("titulo", "postulacion"));
            }
        } else {
           return redirect('admin/login');
        }        
    }

    public function guardar(Request $request) {
        try {
            $titulo = "Modificar postulacion";
            $postulacion = new Postulacion();
            $postulacion->cargarDesdeRequest($request);

            if ($_FILES["txtArchivo"]["error"] === UPLOAD_ERR_OK) { //Se adjunta el archivo
                $nombre = date("Ymdhmsi");
                $archivo = $_FILES["txtArchivo"]["tmp_name"];
                $extension = pathinfo($_FILES["txtArchivo"]["name"], PATHINFO_EXTENSION);
                if($extension == "pdf" || $extension == "doc" || $extension == "docx"){
                    move_uploaded_file($archivo, env('APP_PATH') . "/public/files/$nombre.$extension"); //Guarda el archivo
                    $postulacion->archivo_cv = "$nombre.$extension";
                } else {
                    $postulacion->archivo_cv = "";
                }
            }


            if ($postulacion->nombre == "") {
                $msg["ESTADO"] = MSG_ERROR;
                $msg["MSG"] = "Complete todos los datos";
            } else {
                if ($_POST["id"] > 0) {

                    $productAnt = new Postulacion();
                    $productAnt->obtenerPorId($postulacion->idpostulacion);

                    if ($_FILES["txtArchivo"]["error"] === UPLOAD_ERR_OK) {
                        //Elimina el archivo anterior
                        @unlink(env('APP_PATH') . "/public/files/$productAnt->archivo_cv");
                    } else {
                        $postulacion->archivo_cv = $productAnt->archivo_cv;
                    }

                    $postulacion->actualizar();

                    $msg["ESTADO"] = MSG_SUCCESS;
                    $msg["MSG"] = OKINSERT;
                } else {
                    $postulacion->insertar();

                    $msg["ESTADO"] = MSG_SUCCESS;
                    $msg["MSG"] = OKINSERT;
                }

                return view('postulacion.postulacion-listar', compact('titulo', 'msg'));
            }
        } catch (Exception $e) {
            $msg["ESTADO"] = MSG_ERROR;
            $msg["MSG"] = ERRORINSERT;
        }

        return view('postulacion.postulacion-nuevo', compact('msg', 'postulacion', 'titulo')) . '?id=' . $postulacion->idpostulacion;
    }

    public function cargarGrilla() {
        $request = $_REQUEST;

        $entidad = new Postulacion();
        $aPostulacion = $entidad->obtenerFiltrado();

        $data = array();
        $cont = 0;

        $inicio = $request['start'];
        $registros_por_pagina = $request['length'];

        for ($i = $inicio; $i < count($aPostulacion) && $cont < $registros_por_pagina; $i++) {
            $row = array();
            $row[] = "<a href='/admin/postulacion/".$aPostulacion[$i]->idpostulacion."' class='btn btn-secondary'><i class='fas fa-search'></i></a>";
            $row[] = $aPostulacion[$i]->nombre;
            $row[] = $aPostulacion[$i]->apellido;
            $row[] = $aPostulacion[$i]->correo;
            $row[] = $aPostulacion[$i]->telefono;
            $cont++;
            $data[] = $row;
        }

        $json_data = array(
            "draw" => intval($request['draw']),
            "recordsTotal" => count($aPostulacion), //cantidad total de registros sin paginar
            "recordsFiltered" => count($aPostulacion), //cantidad total de registros en la paginacion
            "data" => $data,
        );
        return json_encode($json_data);

    }

    public function editar($id){
        $titulo = "Modificar postulacion";
        if (Usuario::autenticado() == true) {
            if (!Patente::autorizarOperacion("POSTULANTEEDITAR")) {
                $codigo = "POSTULANTEEDITAR";
                $mensaje = "No tiene pemisos para la operaci&oacute;n.";
                return view('sistema.pagina-error', compact('titulo', 'codigo', 'mensaje'));
            } else {
                $postulacion = new Postulacion();
                $postulacion->obtenerPorId($id);
                return view('postulacion.postulacion-nuevo', compact('postulacion', 'titulo'));
            }
        } else {
            return redirect('admin/login');
        }
    }

    public function eliminar(Request $request){
        $id = $request->input('id');

        if (Usuario::autenticado() == true) {
            if (Patente::autorizarOperacion("POSTULANTEBAJA")) {

                $entidad = new Postulacion();
                $entidad->idpostulacion = $id;
                $entidad->eliminar();

                $aResultado["err"] = EXIT_SUCCESS; //eliminado correctamente
            } else {
                $codigo = "POSTULANTEBAJA";
                $aResultado["err"] = "No tiene pemisos para la operaci&oacute;n.";
            }
            echo json_encode($aResultado);
        } else {
            return redirect('admin/login');
        }
                 
    }

}
