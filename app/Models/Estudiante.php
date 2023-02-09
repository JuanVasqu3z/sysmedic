<?php

namespace App\Models;

class Estudiante
{
    private $idEstudiante;
    private $idCarrera;
    private $idSede;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Estudiantes';
    }

    public function idEstudiante($value)
    {
        $this->idEstudiante = $value;
    }

    public function idCarrera($value)
    {
        $this->idCarrera = $value;
    }

    public function idSede($value)
    {
        $this->idSede = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdEstudiantes, IdCarrera, IdSede) VALUES 
            (
                "' . $this->idEstudiante . '",
                "' . $this->idCarrera . '",
                "' . $this->idSede . '",
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            IdCarrera  = "' . $this->idCarrera . '",
            IdSede  = "' . $this->idSede . '",
            WHERE IdEstudiantes = "' . $this->idEstudiante . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdEstudiantes="' . $this->idEstudiante . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdEstudiantes="' . $this->idEstudiante . '"'
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
