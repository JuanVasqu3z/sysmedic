<?php

namespace App\Models;

class Medicamento
{
    private $idMedicamento;
    private $codigo;
    private $nombre;
    private $tipo;
    private $presentacion;
    private $unidad;
    private $cantidad;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Medicamentos';
    }

    public function idMedicamento($value)
    {
        $this->idMedicamento = $value;
    }

    public function codigo($value)
    {
        $this->codigo = $value;
    }

    public function nombre($value)
    {
        $this->nombre = $value;
    }

    public function tipo($value)
    {
        $this->tipo = $value;
    }

    public function presentacion($value)
    {
        $this->presentacion = $value;
    }

    public function unidad($value)
    {
        $this->unidad = $value;
    }

    public function cantidad($value)
    {
        $this->cantidad = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdMedicamento, Codigo, Nombre, Tipo, Presentancion, Unidad, Cantidad) VALUES 
            (
                "' . $this->idMedicamento . '",
                "' . $this->codigo . '",
                "' . $this->nombre . '",
                "' . $this->tipo . '",
                "' . $this->presentacion . '",
                "' . $this->unidad . '",
                "' . $this->cantidad . '"
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            Nombre  = "' . $this->nombre . '",
            Tipo  = "' . $this->tipo . '",
            Presentancion  = "' . $this->presentacion . '",
            Unidad  = "' . $this->unidad . '",
            Cantidad  = "' . $this->cantidad . '",
            WHERE Codigo = "' . $this->codigo . '"
            ');
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdMedicamento="' . $this->idMedicamento . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdMedicamento="' . $this->idMedicamento . '"'
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
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }
}
