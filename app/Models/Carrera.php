<?php

namespace App\Models;

class Carrera
{
    private $idCarrera;
    private $nombre;
    private $conection;
    private $table;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Carreras';
    }

    public function idCarrera($value)
    {
        $this->idCarrera = $value;
    }

    public function nombre($value)
    {
        $this->nombre = $value;
    }


    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdCarrera, Nombre) VALUES 
            (
                "' . $this->idCarrera . '",
                "' . $this->nombre . '"
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            Nombre  = "' . $this->nombre . '",
            WHERE IdCarrera = "' . $this->idCarrera . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdCarrera="' . $this->idCarrera . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdCarrera="' . $this->idCarrera . '"'
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
