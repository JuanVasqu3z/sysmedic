<?php

namespace App\Core;

/**
 * manejador de sesiones del sistema
 */
class Sesion
{

    public function createSession($name, $value)
    {
        session_start();
        $_SESSION[$name] = $name;
    }

    public function destroySession()
    {
        session_destroy();
    }

    public function sessionStart()
    {
        session_start();
    }

    public function verifySession($name)
    {
        return (isset($_SESSION[$name])) ? true : false;
    }
}
