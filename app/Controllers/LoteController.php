<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Models\Medicamento;
use App\Models\Almacen;
use App\Models\Lote;

class LoteController extends BaseController
{
    public function viewRegisterLote(Request $request, Response $response)
    {
        sessionValidate('auth');
        $medicamento = new Medicamento();
        $almacen = new Almacen();
        $listaMedicamento = $medicamento->getAll();
        $listaAlmacenes = $almacen->getAll();
        echo $this->view->render('pages/Almacen/RegisterLote', ['medicamentos' => $listaMedicamento, 'almacenes' => $listaAlmacenes]);
        return $response;
    }

    public function saveLote(Request $request, Response $response)
    {
        $paramts = $request->getParsedBody();
        $loteNew = new Lote();
        $loteNew->idLote('lot' . date('ydms'));
        $loteNew->cantidad($paramts['cantidad']);
        $loteNew->fechaIngreso($paramts['date_input']);
        $loteNew->fechaVencimiento($paramts['date_due']);
        $loteNew->total($paramts['total']);
        $loteNew->fechaExpedicion($paramts['date_exp']);
        $loteNew->codigo($paramts['medicamento_id']); // medicamento
        $loteNew->idAlmacen($paramts['almacen_id']);
        $loteNew->create();

        $response = $response->withStatus(302);
        return $response->withHeader('Location', '/Almacen/ControlLotes?action=success');
    }

    public function viewControlLotes(Request $request, Response $response)
    {
        sessionValidate('auth');
        $loteNew = new Lote();
        $listadoLotes = $loteNew->getAll();
        echo $this->view->render('pages/Almacen/ControlLotes', ['lotes' => $listadoLotes]);
        return $response;
    }
}
