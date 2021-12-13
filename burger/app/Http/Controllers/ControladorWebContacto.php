<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ControladorWebContacto extends Controller
{
    public function index()
    {
        return view("web.contacto");
    }

    public function enviar(request $request){

    $nombre = $request->nombre;
    $correo = $request->correo;
    $telefono = $request->telefono;
    $mensaje = $request->mensaje;
    
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = env('MAIL_HOST'); 
    $mail->SMTPAuth = true;
    $mail->Username = env('MAIL_USERNAME');
    $mail->Password = env('MAIL_PASSWORD');
    $mail->SMTPSecure = env('MAIL_ENCRYPTION');
    $mail->Port = env('MAIL_PORT');


    $mail->setFrom($correo, $nombre); //Dirección desde
    $mail->addAddress('ezequilacordoba@gmail.com'); //Dirección para
    
    //Contenido del mail
    $mail->isHTML(true);
    $mail->telefono = $telefono;
    $mail->Body = $mensaje;
    //$mail->send();

    return view("web.contactado");

    }
}