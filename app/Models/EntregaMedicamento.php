<?php

namespace App\Models;

class EntregaMedicamento
{
    private $idEntregaM;
    private $atencionMedica;
    private $idLote;
    private $cantidad;
    private $fecha;
    private $idPersonalDeApoyo;
    private $idAtencionP;
    private $idMedico;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'EntregaDeMedicamentos';
    }

    public function idEntregaM($value)
    {
        $this->idEntregaM = $value;
    }

    public function atencionMedica($value)
    {
        $this->atencionMedica = $value;
    }

    public function idLote($value)
    {
        $this->idLote = $value;
    }

    public function idMedico($value)
    {
        $this->idMedico = $value;
    }

    public function cantidad($value)
    {
        $this->cantidad = $value;
    }

    public function fecha($value)
    {
        $this->fecha = $value;
    }

    public function idPersonalDeApoyo($value)
    {
        $this->idPersonalDeApoyo = $value;
    }

    public function idAtencionP($value)
    {
        $this->idAtencionP = $value;
    }


    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdEntregaM, AtencionMedica, IdLote, Cantidad, Fecha, IdPersonalDeApoyo, IdMedico, IdAtencionP) VALUES 
            (
                "' . $this->idEntregaM . '",
                "' . $this->atencionMedica . '",
                "' . $this->idLote . '",
                "' . $this->cantidad . '",
                "' . $this->fecha . '",
                "' . $this->idPersonalDeApoyo . '",
                "' . $this->idMedico . '",
                "' . $this->idAtencionP . '",
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            AtencionMedica  = "' . $this->atencionMedica . '",
            IdLote  = "' . $this->idLote . '",
            Cantidad  = "' . $this->cantidad . '",
            Fecha  = "' . $this->fecha . '",
            IdPersonalDeApoyo  = "' . $this->idPersonalDeApoyo . '",
            IdMedico  = "' . $this->idMedico . '",
            IdAtencionP  = "' . $this->idMedico . '",
            WHERE IdEntregaM = "' . $this->idEntregaM . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdEntregaM="' . $this->idEntregaM . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdEntregaM="' . $this->idEntregaM . '"'
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
