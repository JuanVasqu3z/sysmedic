<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Models\Medicamento;
use App\Models\Almacen;

class LoteController extends BaseController
{
    public function viewRegisterLote(Request $request, Response $response, $args)
    {
        sessionValidate('auth');
        $medicamento = new Medicamento();
        $almacen = new Almacen();
        $listaMedicamento = $medicamento->getAll();
        $listaAlmacenes = $almacen->getAll();
        echo $this->view->render('pages/Almacen/RegisterLote', ['medicamentos' => $listaMedicamento, 'almacenes' => $listaAlmacenes]);
        return $response;
    }
}
