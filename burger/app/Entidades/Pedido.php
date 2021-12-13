<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
      protected $table = 'pedidos';
      public $timetamps = false;

      protected $fillable = [
            'idpedido', 'fk_idsucursal', 'fk_idcliente', 'fk_idestado', 'total', 'comentarios', 'fecha',
      ];

      protected $hidden = [];

      public function cargarDesdeRequest($request)
      {
            $this->idpedido = $request->input('id') != "0" ? $request->input('id') : $this->idpedido;
            $this->fk_idsucursal = $request->input("lstSucursal");
            $this->fk_idcliente = $request->input("lstCliente");
            $this->fk_idestado = $request->input("lstEstado");
            $this->total = $request->input("txtTotal");
            $this->comentarios = $request->input("txtComentarios");
            if (isset($request["lstAnio"]) && isset($request["lstMes"]) && isset($request["lstDia"])) {
                  $this->fecha = $request["lstAnio"] . "-" . $request["lstMes"] . "-" . $request["lstDia"];
            }
      }

      public function insertar()
      {
            $sql = "INSERT INTO pedidos (
                  fk_idsucursal,
                  fk_idcliente,
                  fk_idestado,
                  total,
                  comentarios,
                  fecha
            )     VALUES (?, ?, ?, ?, ?, ?);";
            $result = DB::insert($sql, [
                  $this->fk_idsucursal,
                  $this->fk_idcliente,
                  $this->fk_idestado,
                  $this->total,
                  '$this->comentarios',
                  $this->fecha,
            ]);
            return $this->idpedido = DB::getPdo()->lastInsertId();
      }


      public function actualizar()
      {
            $sql = "UPDATE pedidos SET
                  fk_idsucursal = $this->fk_idsucursal,
                  fk_idcliente = $this->fk_idcliente,
                  fk_idestado = $this->fk_idestado,
                  total = $this->total,
                  comentarios = '$this->comentarios',
                  fecha = '$this->fecha'
                  WHERE idpedido=?";
            $affected = DB::update($sql, [$this->idpedido]);
      }

      public function eliminar()
      {
            $sql = "DELETE FROM pedidos WHERE idpedido=?";
            $affected = DB::delete($sql, [$this->idpedido]);
      }

      public function obtenerPorId($idPedido)
      {
            $sql = "SELECT
                        idpedido,
                        fk_idsucursal,
                        fk_idcliente,
                        fk_idestado,
                        total,
                        comentarios,
                        fecha
                        FROM pedidos WHERE idpedido = $idPedido";
            $lstRetorno = DB::select($sql);

            if (count($lstRetorno) > 0) {
                  $this->idpedido = $lstRetorno[0]->idpedido;
                  $this->fk_idsucursal = $lstRetorno[0]->fk_idsucursal;
                  $this->fk_idcliente = $lstRetorno[0]->fk_idcliente;
                  $this->fk_idestado = $lstRetorno[0]->fk_idestado;
                  $this->total = $lstRetorno[0]->total;
                  $this->comentarios = $lstRetorno[0]->comentarios;
                  $this->fecha = $lstRetorno[0]->fecha;
                  return $this;
            }
            return null;
      }

      public function ObtenerTodos()
      {
            $sql = "SELECT
                        idpedido,
                        fk_idsucursal,
                        fk_idcliente,
                        fk_idestado,
                        total,
                        comentarios,
                        fecha
                        FROM pedidos";
            $lstRetorno = DB::select($sql);
            return $lstRetorno;
      }

      public function obtenerFiltrado()
      {
            $request = $_REQUEST;
            $columns = array(
                  0 => 'A.fecha',
                  1 => 'B.nombre',
                  2 => 'C.nombre',
                  3 => 'D.nombre',
                  4 => 'A.total'
            );
            $sql = "SELECT DISTINCT
                    A.idpedido,
                    A.fk_idcliente,
                    B.nombre as cliente,
                    A.fk_idsucursal,
                    C.nombre as sucursal,                 
                    A.fk_idestado,
                    D.nombre as estado,
                    A.total,
                    A.fecha
            FROM pedidos A
            INNER JOIN clientes B ON A.fk_idcliente = B.idcliente
            INNER JOIN sucursales C ON A.fk_idsucursal = C.idsucursal
            INNER JOIN estados D ON A.fk_idestado = D.idestado
            WHERE 1=1";

            //Realiza el filtrado
            if (!empty($request['search']['value'])) {
                  $sql .= " AND ( B.nombre LIKE '%" . $request['search']['value'] . "%' ";
                  $sql .= " OR C.nombre LIKE '%" . $request['search']['value'] . "%' ";
                  $sql .= " OR D.nombre LIKE '%" . $request['search']['value'] . "%' ";
                  $sql .= " OR A.total LIKE '%" . $request['search']['value'] . "%' )";
                  $sql .= " OR A.comentarios LIKE '%" . $request['search']['value'] . "%' )";
                  $sql .= " OR A.fecha LIKE '%" . $request['search']['value'] . "%' )";
            }
            $sql .= " ORDER BY " . $columns[$request['order'][0]['column']] . "   " . $request['order'][0]['dir'];

            $lstRetorno = DB::select($sql);

            return $lstRetorno;
      }


      public function obtenerPorCliente($idCliente)
      {
            $sql = "SELECT DISTINCT
                        A.idpedido,
                        A.fecha,
                        B.nombre as sucursal,                 
                        A.total,
                        C.nombre as estado
                  FROM pedidos A
                  INNER JOIN sucursales B ON A.fk_idsucursal = B.idsucursal
                  INNER JOIN estados C ON A.fk_idestado = C.idestado
                  WHERE A.fk_idcliente = $idCliente AND A.fk_idestado != '3' AND A.fk_idestado != '4'";

            $lstRetorno = DB::select($sql);

            return $lstRetorno;
      }
}
