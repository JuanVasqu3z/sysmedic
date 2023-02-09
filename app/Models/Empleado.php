<?php

namespace App\Models;

class Empleado
{
    private $idEmpleado;
    private $idCargo;
    private $idDepa;
    private $idSede;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Empleados';
    }

    public function idEmpleado($value)
    {
        $this->idEmpleado = $value;
    }

    public function idCargo($value)
    {
        $this->idCargo = $value;
    }

    public function idDepa($value)
    {
        $this->idDepa = $value;
    }

    public function idSede($value)
    {
        $this->idSede = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdEmpleados, IdCargo, IdDepa, IdSede) VALUES 
            (
                "' . $this->idEmpleado . '",
                "' . $this->idCargo . '",
                "' . $this->idDepa . '",
                "' . $this->idSede . '",
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            IdCargo  = "' . $this->idCargo . '",
            IdDepa  = "' . $this->idDepa . '",
            IdSede  = "' . $this->idSede . '",
            WHERE IdEmpleados = "' . $this->idEmpleado . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdEmpleados="' . $this->idEmpleado . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdEmpleados="' . $this->idEmpleado . '"'
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
