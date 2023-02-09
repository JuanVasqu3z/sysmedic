<?php

namespace App\Models;

class Sede
{
    private $idSede;
    private $nombre;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Cargos';
    }

    public function idSede($value)
    {
        $this->idSede = $value;
    }

    public function nombre($value)
    {
        $this->nombre = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdSede, Nombre) VALUES 
            (
                "' . $this->idSede . '",
                "' . $this->nombre . '",
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            Nombre  = "' . $this->nombre . '",
            WHERE IdSede = "' . $this->idSede . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdSede="' . $this->idSede . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdCargo="' . $this->idSede . '"'
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
