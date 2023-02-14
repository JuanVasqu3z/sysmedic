<?php 

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ServerRequestInterface as Response;
use App\Models\Paciente;

class PacienteController extends BaseController
{
    public function guardarPaciente(Request $request, Response $response)
    {
        $dataPost = $request->getParsedBody();
        echo var_dump($request->getParsedBody());

        $paciente = new Almacen();
    }
}