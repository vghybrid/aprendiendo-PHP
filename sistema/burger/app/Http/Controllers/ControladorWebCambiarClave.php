<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Entidades\Cliente;
use Session;

class ControladorWebCambiarClave extends Controller
{
    public function index() {
        $msg = '';
        return view("web.cambiar-clave", compact('msg'));
    }

    public function cambiarClave(Request $request) {
      $msg = '';
      $titulo = "Cambiar contraseña";
      $entidad = New Cliente();
      $entidad->obtenerPorId(Session::get("idCliente"));
      $claveAnt = $request->input("txtClaveAnt");
      $claveAntBD = $entidad->clave;
      
      $claveNew = $request->input("txtClaveNew");
      $claveNewConfirm = $request->input("txtClaveNewConfirm");

     
            if($entidad->verificarClave($claveAnt, $claveAntBD)){
                  if($claveNew == $claveNewConfirm){
                        $entidad->cambiarClave($entidad->encriptarClave($claveNew));
                        $msg = 'La contraseña ha sido cambiada con éxito';
                        return view("web.cambiar-clave", compact('titulo', 'msg'));
                  }else{
                        $msg= 'Las contraseñas nuevas no coinciden';
                        return view("web.cambiar-clave", compact('titulo', 'msg'));
                  }
            }else{
                  $msg= 'La contraseña actual no coincide con la guardada';
                  return view("web.cambiar-clave", compact('titulo', 'msg'));
            }
      
      

      }
    
}
