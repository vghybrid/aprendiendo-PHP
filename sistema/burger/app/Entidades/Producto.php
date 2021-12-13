<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

      protected $table = 'productos';
      public $timetamps = false;

      protected $fillable = [
            'idproducto', 'nombre', 'descripcion', 'imagen', 'precio'
      ];

      protected $hidden = [];


      public function insertar(){
            $sql = "INSERT INTO productos
                        (nombre,
                        descripcion,
                        imagen,
                        precio)
                        values (?, ?, ?, ?);";
            $result = DB::insert($sql, [              //los valores los tiene que tomar del array indicado en parametros de la funcion insert
                  $this->nombre,
                  $this->descripcion,
                  $this->imagen,
                  $this->precio
            ]);

            return $this->idproducto = DB::getPdo()->lastInsertId();
      }

      public function actualizar(){
            $sql = "UPDATE productos SET
                        nombre = '$this->nombre',
                        descripcion = '$this->descripcion',
                        imagen = '$this->imagen',
                        precio = $this->precio
                  WHERE idproducto=?";
            $affected = DB::update($sql,[$this->idproducto]);
      }

      public function eliminar(){
            $sql = "DELETE FROM productos 
                  WHERE idproducto=?";
            $affected = DB::delete($sql,[$this->idproducto]);      //indica que parametros debe utilizar la eliminacion
      }

      public function obtenerPorId($idProducto){
            $sql = "SELECT
                        idproducto,
                        nombre,
                        descripcion,
                        imagen,
                        precio
                  FROM productos WHERE idproducto = $idProducto";
            $lstRetorno = DB::select($sql);           //obtener el resultado de la consulta
            
            if(count($lstRetorno) > 0){                //si devolvio mas de 1 registro
                  $this->idproducto = $lstRetorno[0]->idproducto;       //se le pone el indice [0] aunque sabemos que va a ser 1 solo registro, el primero = [0]
                  $this->nombre = $lstRetorno[0]->nombre;
                  $this->descripcion = $lstRetorno[0]->descripcion;
                  $this->imagen = $lstRetorno[0]->imagen;
                  $this->precio = $lstRetorno[0]->precio;
                  return $this;
            }

            return null;
      }

      public function obtenerTodos(){
            $sql = "SELECT
                        idproducto,
                        nombre,
                        descripcion,
                        imagen,
                        precio
                  FROM productos ORDER BY nombre";
            $lstRetorno = DB::select($sql);           //obtener el resultado de la consulta
            return $lstRetorno;
      }

      public function cargarDesdeRequest($request){
            $this->idproducto = $request->input("id") != "0" ? $request->input("id") : $this->idproducto;
            $this->nombre = $request->input("txtNombre");
            $this->descripcion = $request->input("txtDescripcion");
            $this->precio = $request->input("nmbPrecio");
      }

      public function obtenerFiltrado()
    {
        $request = $_REQUEST;
        $columns = array(
            0 => 'A.imagen',
            1 => 'A.nombre',
            2 => 'A.descripcion',
            3 => 'A.precio',
        );
        $sql = "SELECT DISTINCT
                    A.idproducto,
                    A.imagen,
                    A.nombre,
                    A.descripcion,
                    A.precio
                    FROM productos A
                WHERE 1=1
                ";

        //Realiza el filtrado
        if (!empty($request['search']['value'])) {
            $sql .= " AND ( A.nombre LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.descripcion LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.precio LIKE '%" . $request['search']['value'] . "%' ";
        }
        $sql .= " ORDER BY " . $columns[$request['order'][0]['column']] . "   " . $request['order'][0]['dir'];

        $lstRetorno = DB::select($sql);

        return $lstRetorno;
    }

    

}