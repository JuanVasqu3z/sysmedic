<?php

namespace App\Models;

class Medico
{
    private $idMedico;
    private $idPersona;
    private $numeroDeColegio;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Cargos';
    }

    public function idMedico($value)
    {
        $this->idMedico = $value;
    }

    public function idPersona($value)
    {
        $this->idPersona = $value;
    }

    public function numeroDeColegio($value)
    {
        $this->numeroDeColegio = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdMedico, IdPersona, NumeroDeColegio) VALUES 
            (
                "' . $this->idMedico . '",
                "' . $this->idPersona . '",
                "' . $this->numeroDeColegio . '",
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            IdPersona  = "' . $this->idPersona . '",
            NumeroDeColegio  = "' . $this->numeroDeColegio . '",
            WHERE IdMedico = "' . $this->idMedico . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdMedico="' . $this->idMedico . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdMedico="' . $this->idMedico . '"'
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
