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
    private $medicoId;
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

    public function medicoId($value)
    {
        $this->medicoId = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdAtencionP, IdPersona, medicoId, Fecha, Hora, MotivoDeconsulta) VALUES 
            (
                "' . $this->idAtencionp . '",
                "' . $this->idPersona . '",
                "' . $this->medicoId . '",
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
            Fecha  = "' . $this->fecha . '",
            Hora  = "' . $this->hora . '",
            MotivoDeconsulta  = "' . $this->motivodeConsulta . '",
            WHERE IdAtencionP = "' . $this->idAtencionp . '"'
        );
        $preparate->execute();
    }

    public function updateStatus($atendido, $espera)
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            atendido  = "' . $atendido . '",
            enEspera  = "' . $espera . '"
            WHERE IdAtencionP = "' . $this->idAtencionp . '"'
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
        $sql = 'SELECT * FROM ' . $this->table .
            ' INNER JOIN Personas on AtencionesPrimarias.IdPersona=Personas.IdPersona WHERE IdAtencionP="' . $this->idAtencionp .
            '"';
        $preparate = $this->conection->prepare($sql);
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getPerson($idPersona, $espera = false)
    {
        $sql = 'SELECT * FROM ' . $this->table
            . ' INNER JOIN Personas on AtencionesPrimarias.IdPersona=Personas.IdPersona 
            WHERE Personas.IdPersona="' . $idPersona . '"';
        if ($espera == true) {
            $sql = $sql . ' AND AtencionesPrimarias.enEspera=1 ';
        }
        $preparate = $this->conection->prepare($sql);
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getAll($atendido = false, $espera = false, $date = false)
    {
        $sql = 'SELECT * FROM ' . $this->table
            . ' INNER JOIN Personas on AtencionesPrimarias.IdPersona=Personas.IdPersona';
        if($atendido == true || $espera == true || $date == true){
            $sql = $sql. ' WHERE 1';
        }
        if ($atendido == true) {
            $sql = $sql . ' AND AtencionesPrimarias.atendido=1 ';
        }
        if ($espera == true) {
            $sql = $sql . ' AND AtencionesPrimarias.enEspera=1 ';
        }
        if ($date != false ){
            $sql = $sql . ' AND Fecha="'.$date.'"';
        }
        $preparate = $this->conection->prepare($sql);
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }
}
