<?php

namespace App\Models;

class Cargos
{
    private $idCargo;
    private $nombre;
    private $tipo;
    private $conection;
    private $table;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Cargos';
    }

    public function idCargo($value)
    {
        $this->idCargo = $value;
    }

    public function nombre($value)
    {
        $this->nombre = $value;
    }

    public function tipo($value)
    {
        $this->tipo = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdCargo, Nombre, Tipo) VALUES 
            (
                "' . $this->idCargo . '",
                "' . $this->nombre . '",
                "' . $this->tipo . '",
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
            WHERE IdCargo = "' . $this->idCargo . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdCargo="' . $this->idCargo . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdCargo="' . $this->idCargo . '"'
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
