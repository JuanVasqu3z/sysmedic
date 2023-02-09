<?php

namespace App\Models;

class PersonalDeApoyo
{
    private $idPersonalDeApoyo;
    private $IdPersona;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'PersonalDeApoyo';
    }

    public function idPersonalDeApoyo($value)
    {
        $this->idPersonalDeApoyo = $value;
    }

    public function IdPersona($value)
    {
        $this->IdPersona = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdPersonalDeApoyo, IdPersona) VALUES 
            (
                "' . $this->idPersonalDeApoyo . '",
                "' . $this->IdPersona . '",
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            IdPersona  = "' . $this->IdPersona . '",
            WHERE IdPersonalDeApoyo = "' . $this->idPersonalDeApoyo . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdPersonalDeApoyo="' . $this->idPersonalDeApoyo . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdPersonalDeApoyo="' . $this->idPersonalDeApoyo . '"'
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
