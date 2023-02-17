<?php
// File: /app/Controllers/HolaController.php
namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use Psr\Container\ContainerInterface;

class HolaController extends BaseController
{
    /**
     * Usando inyección de dependencia se le pasa al constructor
     * el contenedor de la aplicación. Así se dispone de las
     * dependencias establecidas en config/dependencies.php.
     *
     * @param $container \Pimple\Container Contenedor de la aplicación
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);
    }
    /**
     * Acción única de la aplicación que demuestra el paso de argumentos
     * a la platilla.
     *
     * @param $request \Psr\Http\Message\ServerRequestInterface Petición a la
     * que servir.
     * @param $response \Psr\Http\Message\ResponseInterface Respuesta a la
     * petición.
     * @param $array array Contiene cada uno de los parámetros de la petición
     *
     * @return string con la plantilla ya renderizada.
     */
    public function index(Request $request, Response $response, $args)
    {
        // Ejemplo de uso del array $args. El contenido de este array estará
        // disponible en la plantilla en el array $data. 
        //$nombre = $args['nombre'] ?? 'mundo';
        echo $this->view->render('pages/Home');
        return $response;
    }

    public function Login(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/Login');
        return $response;
    }

    //Render Paciente

    public function ListaRegister(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/ListaRegister');
        return $response;
    }

    public function AtencionMedica(Request $request, Response $response, $args)
    {
        sessionValidate('auth');
        echo $this->view->render('pages/Paciente/AtencionMedica');
        return $response;
    }

    public function ControlPaciente(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/Paciente/ControlPaciente');
        return $response;
    }

    public function DetallePaciente(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/Paciente/DetallePaciente');
        return $response;
    }

    public function DetalleDelDetalle(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/Paciente/DetalleDelDetalle');
        return $response;
    }

    //Render Medicamento
    public function RegisterMedicamentos(Request $request, Response $response, $args)
    {
        sessionValidate('auth');
        echo $this->view->render('pages/Medicina/RegisterMedicamentos');
        return $response;
    }

    public function ListaMedicamentos(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/Medicina/ListaMedicamentos');
        return $response;
    }

    public function EntregaMedicamento(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/EntregaMedicamento');
        return $response;
    }

    //Render Almacen

    public function CrearAlmacen(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/Almacen/CrearAlmacen');
        return $response;
    }

    public function AlmacenGestion(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/Almacen/AlmacenGestion');
        return $response;
    }

    public function ControlLotes(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/Almacen/ControlLotes');
        return $response;
    }
    public function RegisterLote(Request $request, Response $response, $args)
    {
        echo $this->view->render('pages/Almacen/RegisterLote');
        return $response;
    }
}
