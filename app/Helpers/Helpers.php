<?php

function assets($file)
{
    echo ENV['url_asset'] . $file;
}

function sessionValidate($sesion)
{
    $login = new App\Core\Sesion();
    $login->sessionStart();
    if (!$login->verifySession($sesion)) {
        header('Location:/login?permise=error');
    }
}

function closeSesion()
{
    $login = new App\Core\Sesion();
    $login->sessionStart();
    $login->destroySession();
}

function Auth()
{
    $login = new App\Core\Sesion();
    if (isset($_SESSION['globalUser'])) {
        if (!session_status() == 1) {
            $login->sessionStart();
        }
        if ($login->verifySession('auth')) {
            $user = new App\Models\User();
            $user->userId($_SESSION['globalUser']);
            $userCurrent = $user->find();
            return $userCurrent[0];
        }
    }
    return null;
}


function calculateVisitas($cedula, $arrayDeAtenciones)
{
    $cuenta = 0;
    foreach ($arrayDeAtenciones as $atenciones) {
        if ($cedula == $atenciones->Cedula) {
            $cuenta++;
        }
    }
    return $cuenta;
}
