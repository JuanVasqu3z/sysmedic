<?php

namespace App\Models;

class Almacen
{
    private $idalmacen;
    private $cantidad;
    private $nombre;
    private $peldanos;
    private $conection;
    private $table;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Almacenes';
    }

    public function idalmacen($value)
    {
        $this->idalmacen = $value;
    }

    public function cantidad($value)
    {
        $this->cantidad = $value;
    }

    public function nombre($value)
    {
        $this->nombre = $value;
    }

    public function peldanos($value)
    {
        $this->peldanos = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            "INSERT INTO " . $this->table . " ( `Cantidad`, `Nombre`, `Peldanos`) VALUES 
            (
                '" . $this->cantidad . "', 
                '" . $this->nombre . "', 
                '" . $this->peldanos . "');"
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            Cantidad  = "' . $this->cantidad . '",
            Nombre  = "' . $this->nombre . '",
            Peldaños  = "' . $this->peldanos . '",
            WHERE IdAlmacen = "' . $this->idalmacen . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE IdAlmacen="' . $this->idalmacen . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE IdAlmacen="' . $this->idalmacen . '"'
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
}
