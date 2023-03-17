<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Models\Medicamento;
use App\Models\Almacen;
use App\Models\Lote;
use App\Models\AtencionMedica;
use App\Models\EntregaMedicamento;

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
        sessionValidate('auth');
        $paramts = $request->getParsedBody();
        $loteNew = new Lote();
        $loteNew->idLote('lot' . date('ydms'));
        $loteNew->fechaIngreso($paramts['date_input']);
        $loteNew->fechaVencimiento($paramts['date_due']);
        $loteNew->fechaExpedicion($paramts['date_exp']);
        $loteNew->total($paramts['cantidad'] * 10);
        $loteNew->idMedicamento($paramts['medicamento_id']); // medicamento
        $loteNew->cantidad($paramts['cantidad']);
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

    public function EntregaMedicina(Request $request, Response $response,$idAtencion)
    {
        sessionValidate('auth');
        $atencionMedica = new AtencionMedica();
        $atencionMedica->idatencionmedica($idAtencion['idAtencion']);
        $responseAtencionMedica = $atencionMedica->find();

        $loteNew = new Lote();
        $listadoLotes = $loteNew->getAll(false,true);
        echo $this->view->render('pages/EntregaMedicamento', 
        [   
            'lotes' => $listadoLotes,
            'atencionMedica' => $responseAtencionMedica[0]
        ]);
        return $response;
    }

    public function saveEntrega(Request $request, Response $response,)
    {
        sessionValidate('auth');
        $response = $response->withStatus(302);
        $paramts = $request->getParsedBody();
        // nuevo lote
        $loteNew = new Lote();
        $result = $loteNew->updateCantidad($paramts['lote-id'],(int)$paramts['cantidad'] );
        if($result == false){
            return $response->withHeader('Location', '/Medicina/Entrega/'. $paramts['IdAtencionP'].'?error=true');    
        }
        // create entrega medicamento
        $entrega = new EntregaMedicamento();
        $entrega->idLote($paramts['lote-id']);
        $entrega->cantidad($paramts['cantidad']);
        $entrega->atencionMedica($paramts['idAtencionPrimaria']);
        $entrega->idPersona($paramts['IdPersona']);
        $entrega->Fecha(date('Y-m-d'));
        $entrega->idMedico($paramts['idMedico']);
        $entrega->idAtencionP($paramts['IdAtencionP']);
        $entrega->create();

        return $response->withHeader('Location', '/Paciente/AtencionMedicaCreada/'. $paramts['IdAtencionP']);
    }

    public function viewEntregaMedicamento(Request $request, Response $response)
    {
        sessionValidate('auth');
        $entregas = new EntregaMedicamento();
        $listadoEntrega = $entregas->findAll();
        echo $this->view->render('pages/Medicina/HistorialdeEntrega', ['entregas' => $listadoEntrega]);
        return $response;
    }
}
