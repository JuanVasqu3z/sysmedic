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
