<?php

namespace App\Models;

class User
{
    private $userId;
    private $email;
    private $password;
    private $rolId;
    private $personId;
    private $table;
    private $conection;

    public function __construct()
    {
        $this->conection = \App\Core\conection();
        $this->table = 'Users';
    }

    public function userId($value)
    {
        $this->userId = $value;
    }

    public function personId($value)
    {
        $this->personId = $value;
    }

    public function email($value)
    {
        $this->email = $value;
    }

    public function password($value)
    {
        $this->password = $value;
    }

    public function rolId($value)
    {
        $this->rolId = $value;
    }

    public function create()
    {
        $preparate = $this->conection->prepare(
            'INSERT INTO ' . $this->table . ' (userId, email,password,rolId,personId) VALUES 
            (
                "' . $this->userId . '",
                "' . $this->email . '",
                "' . $this->password . '",
                "' . $this->rolId . '",
                "' . $this->personId . '"
            )'
        );
        $preparate->execute();
    }

    public function update()
    {
        $preparate = $this->conection->prepare(
            'UPDATE ' . $this->table . ' SET 
            email  = "' . $this->email . '",
            WHERE userId = "' . $this->userId . '"
            '
        );
        $preparate->execute();
    }

    public function delete()
    {
        $preparate = $this->conection->prepare(
            'DELETE FROM ' . $this->table . ' WHERE userId="' . $this->userId . '"'
        );
        $preparate->execute();
    }

    public function find()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . 
            ' INNER JOIN Personas ON Personas.IdPersona=Users.personId 
            INNER JOIN Medicos ON Medicos.IdPersona=Personas.IdPersona 
            INNER JOIN Roles ON Roles.rolId=Users.rolId WHERE Users.userId="' . $this->userId . '"'
        );
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getPermisesRoleUser()
    {
        $preparate = $this->conection->prepare(
            'SELECT Permisos.Nombre,Permisos.IdPermiso FROM '. $this->table .' 
            INNER JOIN Roles ON Roles.rolId=Users.rolId 
            INNER JOIN PermisosRoles ON Roles.rolId=PermisosRoles.rolId
            INNER JOIN Permisos ON Permisos.IdPermiso=PermisosRoles.IdPermiso
             WHERE Users.userId="' . $this->userId . '"'
        );
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
    }

    public function joinFind()
    {
        $user = $this->find();
        $permisos = $this->getPermisesRoleUser();
        return ['user'=>$user[0],'permisos'=> $permisos];
    }

    public function findEmail()
    {
        $preparate = $this->conection->prepare(
            'SELECT * FROM ' . $this->table . ' WHERE email="' . $this->email . '"'
        );
        $preparate->execute();
        return $preparate->fetchAll(\PDO::FETCH_OBJ);
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
