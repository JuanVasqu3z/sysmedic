<?php

namespace App\Models;

class AtencionPrimaria
{
    private $idAtencionp;
    private $idPersona;
    private $idPersonadeApoyo;
    private $fecha;
    private $hora;
    private $motivodeConsulta;
    private $conection;
    private $table;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'AtencionesPrimarias';
    }

    public function idAtencionp($value)
    {
        $this->idAtencionp = $value;
    }

    public function idPersona($value)
    {
        $this->idPersona = $value;
    }

    public function idPersonadeApoyo($value)
    {
        $this->idPersonadeApoyo = $value;
    }

    public function fecha($value)
    {
        $this->fecha = $value;
    }

    public function hora($value)
    {
        $this->hora = $value;
    }

    public function motivodeConsulta($value)
    {
        $this->motivodeConsulta = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdAtencionP, IdPersona, IdPersonalDeApoyo, Fecha, Hora, MotivoDeconsulta) VALUES 
            (
                "' . $this->idAtencionp . '",
                "' . $this->idPersona . '",
                "' . $this->idPersonadeApoyo . '",
                "' . $this->fecha . '",
                "' . $this->hora . '",
                "' . $this->motivodeConsulta . '"
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            IdPersona  = "' . $this->idPersona . '",
            IdPersonalDeApoyo  = "' . $this->idPersonadeApoyo . '",
            Fecha  = "' . $this->fecha . '",
            Hora  = "' . $this->hora . '",
            MotivoDeconsulta  = "' . $this->motivodeConsulta . '",
            WHERE IdAtencionP = "' . $this->idAtencionp . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdAtencionP="' . $this->idAtencionp . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdAtencionP="' . $this->idAtencionp . '"'
        );
        $preparate->execute();
        return $preparate->fetchAll();
    }

    public function getAll()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' INNER JOIN Personas on AtencionesPrimarias.IdPersona=Personas.IdPersona'
        );
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }
}
