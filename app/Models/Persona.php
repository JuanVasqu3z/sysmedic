<?php

namespace App\Models;

class Persona
{
    private $idPersona;
    private $cedula;
    private $nombre;
    private $apellido;
    private $direccion;
    private $numeroTelefono;
    private $sexo;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Cargos';
    }

    public function idPersona($value)
    {
        $this->idPersona = $value;
    }

    public function cedula($value)
    {
        $this->cedula = $value;
    }

    public function nombre($value)
    {
        $this->nombre = $value;
    }

    public function apellido($value)
    {
        $this->apellido = $value;
    }

    public function direccion($value)
    {
        $this->direccion = $value;
    }

    public function numeroTelefono($value)
    {
        $this->numeroTelefono = $value;
    }

    public function sexo($value)
    {
        $this->sexo = $value;
    }


    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdPersona, Cedula, Nombre, Apellido, Direccion, NumeroTelefono, Sexo) VALUES 
            (
                "' . $this->idPersona . '",
                "' . $this->cedula . '",
                "' . $this->nombre . '",
                "' . $this->apellido . '",
                "' . $this->direccion . '",
                "' . $this->numeroTelefono . '",
                "' . $this->sexo . '"
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            Cedula  = "' . $this->cedula . '",
            Nombre  = "' . $this->nombre . '",
            Apellido  = "' . $this->apellido . '",
            Direccion  = "' . $this->direccion . '",
            NumeroTelefono  = "' . $this->numeroTelefono . '",
            Sexo  = "' . $this->sexo . '",
            WHERE IdPersona = "' . $this->idPersona . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdPersona="' . $this->idPersona . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdPersona="' . $this->idPersona . '"'
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
