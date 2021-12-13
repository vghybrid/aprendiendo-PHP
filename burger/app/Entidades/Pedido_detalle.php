<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Pedido_detalle extends Model{
      protected $table = 'pedido_detalle';
      public $timetamps = false;

      protected $fillable = [
            'idpedidodetalle', 'fk_idpedido', 'fk_idproducto', 'cantidad', 'precio_unitario', 'subtotal',
      ];

      protected $hidden = [


      ];

      public function insertar(){
            $sql = "INSERT INTO pedido_detalle (
                  fk_idpedido,
                  fk_idproducto,
                  cantidad,
                  precio_unitario,
                  subtotal
            )     VALUES (?, ?, ?, ?, ?);";
            $result = DB::insert($sql, [
                  $this->fk_idpedido,
                  $this->fk_idproducto,
                  $this->cantidad,
                  $this->precio_unitario,
                  $this->subtotal,
            ]);
            return $this->idpedidodetalle = DB::getPdo()->lastInsertId();
      }

      public function guardar(){
            $sql = "UPDATE pedido_detalle SET
                  fk_idpedido = $this->fk_idpedido,
                  fk_idproducto = $this->fk_idproducto,
                  cantidad = $this->cantidad,
                  precio_unitario = $this->precio_unitario,
                  subtotal = $this->subtotal
                  WHERE idpedidodetalle=?";
            $affected = DB::update($sql, [$this->idpedidodetalle]);

      }

      public function eliminar(){
            $sql = "DELETE FROM pedido_detalle WHERE idpedidodetalle=?";
            $affected = DB::delete($sql, [$this->idpedidodetalle]);

      }

      public function obtenerPorId($idPedidoDetalle){
            $sql = "SELECT
                        idpedidodetalle,
                        fk_idpedido,
                        fk_idproducto,
                        cantidad,
                        precio_unitario,
                        subtotal
                        FROM pedido_detalle WHERE idpedidodetalle = $idPedidoDetalle";
            $lstRetorno = DB::select($sql);

            if (count($lstRetorno) > 0) {
                  $this->idpedidodetalle = $lstRetorno[0]->idpedidodetalle;
                  $this->fk_idpedido = $lstRetorno[0]->fk_idpedido;
                  $this->fk_idproducto = $lstRetorno[0]->fk_idproducto;
                  $this->cantidad = $lstRetorno[0]->cantidad;
                  $this->precio_unitario = $lstRetorno[0]->precio_unitario;
                  $this->subtotal = $lstRetorno[0]->subtotal;
                  return $this;
            }
            return null;
      }

      public function ObtenerTodos(){
            $sql = "SELECT
                        idpedidodetalle,
                        fk_idpedido,
                        fk_idproducto,
                        cantidad,
                        precio_unitario,
                        subtotal
                        FROM pedido_detalle";
            $lstRetorno = DB::select($sql);
            return $lstRetorno;

      }


}
