<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Models\Medicamento;

class MedicineController extends BaseController
{
    public function guardarMedicina(Request $request, Response $response)
    {
        $dataPost = $request->getParsedBody();

        $medicamento = new Medicamento();
        $medicamento->idMedicamento($dataPost['codigo'] . date('hsmy'));
        $medicamento->codigo($dataPost['codigo']);
        $medicamento->nombre($dataPost['nombre']);
        $medicamento->tipo($dataPost['tipo']);
        $medicamento->presentacion($dataPost['presentacion']);
        $medicamento->unidad($dataPost['unidad']);
        $medicamento->cantidad($dataPost['cantidad']);
        $medicamento->create();


        $response = $response->withStatus(302);
        return $response->withHeader('Location', '/Medicina/Lista');
    }

    public function listarMedicinas(Request $request, Response $response)
    {
        sessionValidate('auth');
        $medicamento = new Medicamento();
        $arrayMedicamentos = $medicamento->getAll();
        echo $this->view->render('pages/Medicina/ListaMedicamentos', ['medicamentos' => $arrayMedicamentos]);
        return $response;
    }
}

