<?php

namespace App\Models;

use App\Core\conection;

class Lote
{
    private $idlote;
    private $cantidad;
    private $fechaIngreso;
    private $fechaVencimiento;
    private $fechaExpedicion;
    private $total;
    private $codigo;
    private $idAlmacen;
    private $conection;
    private $table;

    public function __construct()
    {
        $this->table = 'Lotes';
        $this->conection = \App\Core\conection();
    }

    public function idLote($value)
    {
        $this->idlote = $value;
    }

    public function cantidad($value)
    {
        $this->cantidad = $value;
    }

    public function fechaIngreso($value)
    {
        $this->fechaIngreso = $value;
    }

    public function fechaVencimiento($value)
    {
        $this->fechaVencimiento = $value;
    }

    public function total($value)
    {
        $this->total = $value;
    }

    public function fechaExpedicion($value)
    {
        $this->fechaExpedicion = $value;
    }

    public function codigo($value)
    {
        $this->codigo = $value;
    }

    public function idAlmacen($value)
    {
        $this->idAlmacen = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' ( Cantidad , FechaIngreso, FechaVencimiento, FechaExpedicion, Total, Codigo, IdAlmacen) VALUES 
            (
                "' . $this->cantidad . '",
                "' . $this->fechaIngreso . '",
                "' . $this->fechaVencimiento . '",
                "' . $this->fechaExpedicion . '",
                "' . $this->total . '",
                "' . $this->codigo . '",
                "' . $this->idAlmacen . '"
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            Cantidad  = "' . $this->cantidad . '",
            FechaIngreso  = "' . $this->fechaIngreso . '",
            FechaVencimiento  = "' . $this->fechaVencimiento . '",
            FechaExpedicion  = "' . $this->fechaExpedicion . '",
            Total  = "' . $this->total . '",
            Codigo  = "' . $this->codigo . '",
            IdAlmacen  = "' . $this->idAlmacen . '",
            WHERE IdLote = "' . $this->idlote . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdLote="' . $this->idlote . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdLote="' . $this->idlote . '"'
        );
        $preparate->execute();
        return $preparate->fetchAll();
    }

    public function getAll($fechaVencimiento = false, $cantidadmayor = false)
    {
        $sql =
            'SELECT 
        Lotes.IdLote,
        Lotes.Cantidad,
        Lotes.FechaIngreso,
        Lotes.FechaVencimiento,
        Lotes.FechaExpedicion,
        Lotes.Total,
        Lotes.Codigo,
        Lotes.IdAlmacen,
        Medicamentos.Codigo,
        Medicamentos.Nombre as medicaNombre,
        Medicamentos.Tipo,
        Medicamentos.Presentancion,
        Medicamentos.Unidad,
        Medicamentos.Cantidad,
        Almacenes.IdAlmacen,
        Almacenes.Cantidad,
        Almacenes.Nombre as almacenNombre,
        Almacenes.Peldanos
        FROM ' . $this->table . ' INNER JOIN Medicamentos ON Lotes.Codigo=Medicamentos.Codigo 
        INNER JOIN Almacenes ON Lotes.IdAlmacen=Almacenes.IdAlmacen';

        if ($fechaVencimiento == true || $cantidadmayor == true) {
            $sql = $sql . ' WHERE 1 ';
        }
        if ($fechaVencimiento == true) {
            $sql = $sql . ' AND Lotes.FechaVencimiento>"' . date('Y-m-s') . '"';
        }
        if ($cantidadmayor == true) {
            $slq = $sql . ' AND Lotes.Cantidad>0';
        }
        $preparate = $this->conection->prepare(
            $sql
        );
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }
}
