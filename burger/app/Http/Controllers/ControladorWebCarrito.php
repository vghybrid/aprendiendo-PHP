<?php

namespace App\Http\Controllers;

use App\Entidades\Carrito;
use App\Entidades\Sucursal;
use App\Entidades\Pedido;
use App\Entidades\Pedido_detalle;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use MercadoPago\SDK;
use MercadoPago\Item;
use MercadoPago\Payer;
use MercadoPago\Preference;
use Session;

class ControladorWebCarrito extends Controller
{
    public function index()
    {
      
        if (Session::get("idCliente") != "") {
            $carrito = new Carrito();
            $aCarritos = $carrito->obtenerPorCliente(Session::get("idCliente"));
            $total = 0;

            $sucursal = new Sucursal();
            $aSucursales = $sucursal->obtenerTodos();

            
            foreach ($aCarritos as $item) {
                $total += $item->precio * $item->cantidad;
            }
            return view('web.carrito', compact('aCarritos', 'total', 'aSucursales'));
        } else {
            return redirect("login");
        }

    }

    public function eliminarProductoDelCarrito($id){

        if (Session::get("idCliente") != "") {
            
            $entidad = new Carrito();
            $entidad->idcarrito = $id;
            $entidad->eliminar();

            $aCarritos = $entidad->obtenerPorCliente(Session::get("idCliente"));
            $total = 0;
            
            foreach ($aCarritos as $item) {
                $total += $item->precio * $item->cantidad;
            }

            return redirect('carrito');
        } else {
            return redirect("login");
        }
    }

    public function finalizarPedido(Request $request){
        $sucursal = $request->input("lstSucursal");
        $modalidadPago = $request->input("lstPago");
        $comentarios = $request->input("txtComentarios");

        //Inserta la cabecera del pedido
        $pedido = new Pedido();
        $pedido->fk_idsucursal =  $sucursal;
        $pedido->fk_idcliente =  Session::get("idCliente");
        $pedido->fk_idestado =  1;
        $pedido->comentarios =  $comentarios;
        $pedido->fecha =  date("Y-m-d H:i:s");

        $carrito = new Carrito();
        $aCarritos = $carrito->obtenerPorCliente(Session::get("idCliente"));
        $total = 0;
        foreach ($aCarritos as $item) {
            $total += $item->precio * $item->cantidad;
        }
        $pedido->total = $total;
        $pedido->insertar();

        //Inserta el detalle para ell pedido
        foreach ($aCarritos as $item) {
            $pedidoDetalle = new Pedido_detalle();
            $pedidoDetalle->fk_idpedido = $pedido->idpedido;
            $pedidoDetalle->fk_idproducto = $item->fk_idproducto;
            $pedidoDetalle->cantidad = $item->cantidad;
            $pedidoDetalle->cantidad = $item->cantidad;
            $pedidoDetalle->precio_unitario = $item->precio;
            $pedidoDetalle->subtotal = $item->precio * $item->cantidad;
            $pedidoDetalle->insertar();
        }
        $carrito->vaciarPorCliente(Session::get('idCliente'));


        if($modalidadPago == 3){
            $access_token = "TEST-5604004131987858-090620-795ecabade5d71251d2f779be752a54b-819945987";

            SDK::setClientId(config("payment-methods.mercadopago.client"));
            SDK::setClientSecret(config("payment-methods.mercadopago.secret"));
            SDK::setAccessToken($access_token); //Es el token de la cuenta de MP donde se deposita el dinero
            //Obtener de la BBDD el carrito actual del usuario
            $item = new Item();
            $item->id = "1234";
            $item->title = "Burger SRL";
            $item->category_id = "products";
            $item->quantity = 1;
            $item->unit_price = $total;
            $item->currency_id = "ARS";

            $preference = new Preference();
            $preference->items = array($item);

            //Datos del comprador
            $payer = new Payer();
            $cliente = new Cliente();
            $cliente->obtenerPorId(Session::get("idCliente"));
            $payer->name = $cliente->nombre;
            $payer->surname = $cliente->apellido;
            $payer->email = $cliente->correo;
            $payer->date_created = date('Y-m-d H:m:s');
            $preference->payer = $payer;

            //URL de configuración para indicarle a MP
            $preference->back_urls = [
                "success" => "http://127.0.0.1:8000/mercado-pago/aprobado/" . $pedido->idpedido,
                "pending" => "http://127.0.0.1:8000/mercado-pago/pendiente/" . $pedido->idpedido,
                "failure" => "http://127.0.0.1:8000/mercado-pago/error/" . $pedido->idpedido,
            ];

            //Preparar la transaccion con mercadopago
            $preference->payment_methods = array("installments" => 6);
            $preference->auto_return = "all";
            $preference->notification_url = '';
            $preference->save(); //Ejecuta la transacción
            header("Location: " . $preference->init_point); //redirecciona a la pasarela de pago de MP
            exit; 
        } else {
            return Redirect("/mi-cuenta");
        }

    }

}
