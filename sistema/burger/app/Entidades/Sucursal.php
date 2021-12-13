<?php

namespace App\Entidades;

use DB;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';
    public $timestamps = false;

    protected $fillable = [
        'idsucursal', 'nombre', 'domicilio', 'telefono', 'link_mapa',
    ];

    public function cargarDesdeRequest($request)
    {
        $this->idsucursal = $request->input('id') != "0" ? $request->input('id') : $this->idsucursal;
        $this->nombre = $request->input('txtNombre');
        $this->domicilio = $request->input('txtDomicilio');
        $this->telefono = $request->input('txtTel');
        $this->link_mapa = $request->input('txtMapa');

    }

    public function insertar()
    {
        $sql = "INSERT INTO sucursales 
        (        nombre,
                domicilio,
                telefono,
                link_mapa

            ) VALUES (?, ?, ?, ? );";
        $result = DB::insert($sql, array(
            $this->nombre,
            $this->domicilio,
            $this->telefono,
            $this->link_mapa

        ));
        return $this->idsucursal = DB::getPdo()->lastInsertId();
    }

    public function actualizar()
    {
        $sql = "UPDATE sucursales SET
          nombre='$this->nombre',
          domicilio='$this->domicilio',
          telefono=$this->telefono,
          link_mapa='$this->link_mapa'
            WHERE idsucursal=?";
        $affected = DB::update($sql, [$this->idsucursal]);
    }

    public function eliminar()
    {
        $sql = "DELETE FROM sucursales WHERE
            idsucursal=?";
        $affected = DB::delete($sql, [$this->idsucursal]);
    }

    public function obtenerTodos()
    {
        $sql = "SELECT
            idsucursal,
            nombre,
            domicilio,
            telefono,
            link_mapa
            FROM sucursales WHERE idsucursal = idsucursal";
        $lstRetorno = DB::select($sql);
        return $lstRetorno;
    }
    public function obtenerPorId($idsucursal)
    {
        $sql = "SELECT
            idsucursal,
            nombre,
            domicilio,
            telefono,
            link_mapa

            FROM  sucursales WHERE idsucursal = $idsucursal";
        $lstRetorno = DB::select($sql);

        if (count($lstRetorno) > 0) {
            $this->idsucursal = $lstRetorno[0]->idsucursal;
            $this->nombre = $lstRetorno[0]->nombre;
            $this->domicilio = $lstRetorno[0]->domicilio;
            $this->telefono = $lstRetorno[0]->telefono;
            $this->link_mapa = $lstRetorno[0]->link_mapa;

            return $this;
        }
        return null;
    }

    public function obtenerFiltrado()
    {
        $request = $_REQUEST;
        $columns = array(
            0 => 'A.nombre',
            1 => 'A.domicilio',
            2 => 'A.telefono',
            3 => 'A.link_mapa',
        );
        $sql = "SELECT DISTINCT
                    A.idsucursal,
                    A.nombre,
                    A.domicilio,
                    A.telefono,
                    A.link_mapa
                    FROM sucursales A
                WHERE 1=1
                ";

        //Realiza el filtrado
        if (!empty($request['search']['value'])) {
            $sql .= " AND ( A.nombre LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.domicilio LIKE '%" . $request['search']['value'] . "%' ";
            $sql .= " OR A.telefono LIKE '%" . $request['search']['value'] . "%' )";
            $sql .= " OR A.link_mapa LIKE '%" . $request['search']['value'] . "%' )";
          
        }
        $sql .= " ORDER BY " . $columns[$request['order'][0]['column']] . "   " . $request['order'][0]['dir'];

        $lstRetorno = DB::select($sql);

        return $lstRetorno;
    }

}
