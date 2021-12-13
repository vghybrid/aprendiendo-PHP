<?php

namespace App\Http\Controllers;

use App\Entidades\Postulacion;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

require app_path() . '/start/constants.php';

class ControladorDownload extends Controller{

      public function descargar($id)
      {
            try {
                  $postulacion = new Postulacion();
                  $postulacion->obtenerPorId($id);               
                  
                  if ($postulacion->archivo_cv == "") {
                      $msg["ESTADO"] = MSG_ERROR;
                      $msg["MSG"] = "No existe archivo para descargar";

                  } else {
                  
                  $nom_archivo = $postulacion->archivo_cv;
                  $path_archivo = env('APP_PATH') . "/public/files/$nom_archivo"; 
                         
                  $headers = 
                  [
                        'Content-Type' => 'application/pdf',
                        'Content-Disposition' => 'inline; filename="'.$nom_archivo.'"'
                    ];

                  return response()->file($path_archivo, $nom_archivo, $headers);
                    
                  }

            } catch (Exception $e) {
            $msg["ESTADO"] = MSG_ERROR;
            $msg["MSG"] = ERRORINSERT;
            }

      }  

      


      
                    

}

?>