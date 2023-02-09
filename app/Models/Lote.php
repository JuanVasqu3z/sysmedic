<?php

namespace App\Models;

use App\Core\conection;

class Lote
{
    private $idlote;
    private $atencionMedica;
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

    public function atencionMedica($value)
    {
        $this->atencionMedica = $value;
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
            'INSERT INTO ' . $this->table . ' (IdLote, AtencionMedica, FechaIngreso, FechaVencimiento, FechaExpedicion, Total, Codigo, IdAlmacen) VALUES 
            (
                "' . $this->idlote . '",
                "' . $this->atencionMedica . '",
                "' . $this->fechaIngreso . '",
                "' . $this->fechaVencimiento . '",
                "' . $this->fechaExpedicion . '",
                "' . $this->total . '",
                "' . $this->codigo . '",
                "' . $this->idAlmacen . '",
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            AtencionMedica  = "' . $this->atencionMedica . '",
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

    public function getAll()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table
        );
        $preparate->execute();
        return $preparate->fetchAll();
    }
}
