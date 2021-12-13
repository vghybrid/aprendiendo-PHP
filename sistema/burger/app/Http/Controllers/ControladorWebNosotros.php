<?php

namespace App\Http\Controllers;

use App\Entidades\Postulacion;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

require app_path() . '/start/constants.php';

class ControladorWebNosotros extends Controller
{
    public function index()
    {
        return view("web.nosotros");
    }

    public function guardar(Request $request)
    {
        try {
            
            $postulacion = new Postulacion();
            $postulacion->cargarDesdeRequest($request);
            
            
            if ($_FILES["txtArchivo"]["error"] === UPLOAD_ERR_OK) { //Se adjunta el archivo
                $nombre = date("Ymdhmsi");
                $archivo = $_FILES["txtArchivo"]["tmp_name"];
                $extension = pathinfo($_FILES["txtArchivo"]["name"], PATHINFO_EXTENSION);
                if ($extension == "pdf" || $extension == "doc" || $extension == "docx") {
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
                $postulacion->insertar();

                return view('web.postulacionok');
            }
        } catch (Exception $e) {
            $msg["ESTADO"] = MSG_ERROR;
            $msg["MSG"] = ERRORINSERT;
        }
    }
}
