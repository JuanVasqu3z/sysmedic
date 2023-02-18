<?php

namespace App\Models;

class AtencionMedica
{
    private $idAtencionMedica;
    private $idatencionp;
    private $idmedico;
    private $diagnostico;
    private $recipe;
    private $indicacciones;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'AtencionesMedicas';
    }

    public function idatencionmedica($value)
    {
        $this->idAtencionMedica = $value;
    }

    public function idatencionp($value)
    {
        $this->idatencionp = $value;
    }

    public function idmedico($value)
    {
        $this->idmedico = $value;
    }

    public function diagnostico($value)
    {
        $this->diagnostico = $value;
    }

    public function recipe($value)
    {
        $this->recipe = $value;
    }

    public function indicacciones($value)
    {
        $this->indicacciones = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdAtencionMedica, IdAtencionP, IdMedico, Diagnostico, Recipe, Indicacciones) VALUES 
            (
                "' . $this->idAtencionMedica . '",
                "' . $this->idatencionp . '",
                "' . $this->idmedico . '",
                "' . $this->diagnostico . '",
                "' . $this->recipe . '",
                "' . $this->indicacciones . '"
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            IdAtencionP  = "' . $this->idatencionp . '",
            IdMedico  = "' . $this->idmedico . '",
            Diagnostico  = "' . $this->diagnostico . '",
            Recipe  = "' . $this->recipe . '",
            Indicacciones  = "' . $this->indicacciones . '"
            WHERE IdAtencionMedica = "' . $this->idAtencionMedica . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdAtencionMedica="' . $this->idAtencionMedica . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdAtencionMedica="' . $this->idAtencionMedica . '"'
        );
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }

    public function findPerson($personId)
    {
        $sql = 'SELECT * FROM ' . $this->table .
            ' INNER JOIN AtencionesPrimarias on AtencionesPrimarias.IdAtencionP=AtencionesMedicas.IdAtencionP 
        INNER JOIN Personas on Personas.IdPersona=AtencionesPrimarias.IdPersona WHERE Personas.IdPersona="' . $personId . '"';
        $preparate = $this->conection->prepare($sql);
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getAll()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' INNER JOIN AtencionesPrimarias on AtencionesPrimarias.IdAtencionP=AtencionesMedicas.IdAtencionP INNER JOIN Personas on Personas.IdPersona=AtencionesPrimarias.IdPersona '
        );
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }
}
