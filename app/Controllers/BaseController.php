<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;

/**
* Controlador base del que deben heredar todos los controladores de la
* aplicación. De esta manera, se asegura que los controladores tengan acceso a
* unos atributos mínimos para poder funcionar.
*/
class BaseController
{
    /** @var \League\Plates\Engine Acceso al motor de plantillas */
    protected $container;
    /**
    * Usando inyección de dependencia se le pasa al constructor
    * el contenedor de la aplicación. Así se dispone de las
    * dependencias establecidas en config/dependencies.php.
    *
    * @param $container \Pimple\Container Contenedor de la aplicación
    */
    public function __construct(ContainerInterface $container)
    { 
        $this->container = $container;
    }
}