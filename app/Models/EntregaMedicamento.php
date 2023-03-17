<?php

namespace App\Models;

class EntregaMedicamento
{
    private $idEntregaM;
    private $atencionMedica;
    private $idLote;
    private $cantidad;
    private $fecha;
    private $idPersona;
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

    public function idPersona($value)
    {
        $this->idPersona = $value;
    }

    public function idAtencionP($value)
    {
        $this->idAtencionP = $value;
    }


    public function create()
    {
        $sql = 'INSERT INTO ' . $this->table . ' ( IdAtencionMedica, IdLote, Cantidad, Fecha, IdPersona, IdMedico, IdAtencionP) VALUES 
        (
            "' . $this->atencionMedica . '",
            ' . $this->idLote . ',
            ' . $this->cantidad . ',
            "' . $this->fecha . '",
            "' . $this->idPersona . '",
            "' . $this->idMedico . '",
            1
        )'; 
        $preparate = $this->conection->prepare(
           $sql 
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
            IdPersonalDeApoyo  = "' . $this->idPersona . '",
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
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }

    public function findAll()
    {
        $sql =
        'SELECT
        Personas.Nombre,
        Personas.Apellido,
        Personas.Cedula,
        EntregaDeMedicamentos.IdEntrega,
        EntregaDeMedicamentos.IdLote, 
        EntregaDeMedicamentos.Cantidad, 
        EntregaDeMedicamentos.Fecha as FechaEntrega, 
        EntregaDeMedicamentos.IdPersona, 
        EntregaDeMedicamentos.IdMedico, 
        AtencionesMedicas.IdAtencionMedica, 
        AtencionesMedicas.IdMedico, 
        Lotes.IdMedicamento,
        Medicamentos.Nombre as NombreMedicamento,
        Medicamentos.Presentancion,
        Medicamentos.Cantidad as CantidadMedicamento,
        PersonaMedico.Nombre as NombreMedico,
        PersonaMedico.Apellido as ApellidoMedico
  
        FROM EntregaDeMedicamentos 
        INNER JOIN AtencionesMedicas ON EntregaDeMedicamentos.IdAtencionMedica = AtencionesMedicas.IdAtencionMedica
        INNER JOIN Personas ON Personas.IdPersona = EntregaDeMedicamentos.IdPersona
        INNER JOIN Lotes ON EntregaDeMedicamentos.IdLote = Lotes.IdLote
        INNER JOIN Medicamentos ON Lotes.IdMedicamento = Medicamentos.IdMedicamento
        INNER JOIN Medicos ON Medicos.IdMedico = EntregaDeMedicamentos.IdMedico
        INNER JOIN Personas AS PersonaMedico ON PersonaMedico.IdPersona = Medicos.IdPersona
        WHERE EntregaDeMedicamentos.IdAtencionMedica = AtencionesMedicas.IdAtencionMedica
        AND Lotes.IdLote = EntregaDeMedicamentos.IdLote';
        
        $preparate = $this->conection->prepare(
            $sql
        );
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);

    }
}
