<?php

namespace App\Models;

class AtencionMedica
{
    private $idatencionmedica;
    private $idatencionp;
    private $idmedico;
    private $diagnostico;
    private $recipe;
    private $indicacciones;
    private $idpersona;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'AtencionesMedicas';
    }

    public function idatencionmedica($value)
    {
        $this->idatencionmedica = $value;
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

    public function idpersona($value)
    {
        $this->idpersona = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (IdAtencionMedica, IdAtencionP, IdMedico, Diagnostico, Recipe, Indicacciones, IdPersona) VALUES 
            (
                "' . $this->idatencionmedica . '",
                "' . $this->idatencionp . '",
                "' . $this->idmedico . '",
                "' . $this->diagnostico . '",
                "' . $this->recipe . '",
                "' . $this->indicacciones . '",
                "' . $this->idpersona . '",
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
            Indicacciones  = "' . $this->indicacciones . '",
            IdPersona  = "' . $this->idpersona . '",
            WHERE IdAtencionMedica = "' . $this->idatencionmedica . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdAtencionMedica="' . $this->idatencionmedica . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdAtencionMedica="' . $this->idatencionmedica . '"'
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
