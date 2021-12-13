<?php

namespace App\Http\Controllers;


class ControladorWebMercadoPago extends Controller
{
    public function aprobado() {
      
      Redirect("/mi-cuenta");
    }
    public function pendiente() {
      
      Redirect("/mi-cuenta");
    }
    public function error() {
      
      Redirect("/mi-cuenta");
    }

}
