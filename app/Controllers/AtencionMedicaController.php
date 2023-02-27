<?php

namespace App\Controllers;

use App\Models\AtencionMedica;
use App\Models\AtencionPrimaria;
use App\Models\Persona;
use App\Core\Sesion;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class AtencionMedicaController extends BaseController
{
    public function saveAtencionMedica(Request $request, Response $response)
    {
        $dataPost = $request->getParsedBody();
        $sesionUser = new Sesion();
        $sesionUser->sessionStart();
        $userCurrent = Auth();

        $atencionMedica = new AtencionMedica();
        $atencionMedica->idatencionmedica('ateme' . date('ydms'));
        $atencionMedica->idatencionp($dataPost['idAtencionPrimaria']);
        $atencionMedica->idmedico($userCurrent->IdMedico);
        $atencionMedica->diagnostico($dataPost['diagnostico']);
        $atencionMedica->recipe($dataPost['recipe']);
        $atencionMedica->indicacciones($dataPost['indicaciones']);
        $atencionMedica->create();

        $atencionPrimaria = new AtencionPrimaria();
        $atencionPrimaria->idAtencionp($dataPost['idAtencionPrimaria']);
        $atencionPrimaria->updateStatus(1, 0);

        $response = $response->withStatus(302);
        return $response->withHeader('Location', '/Paciente/AtencionMedicaCreada/'. $dataPost['idAtencionPrimaria']);
    }

    public function viewControlDePaciente(Request $request, Response $response)
    {
        sessionValidate('auth');
        $atencionMedica = new AtencionMedica();
        $responseAtencionMedica = $atencionMedica->getAll();

        $persona = new Persona();
        $listaDePersona = $persona->getAll();
        echo $this->view->render(
            'pages/Paciente/ControlPaciente',
            ['personas' => $listaDePersona, 'atencionesMedicas' => $responseAtencionMedica]
        );
        return $response;
    }
    public function ViewAtencionMedicaCreada (Request $request, Response $response,$idAtencion)
    {
        $atencionMedica = new AtencionMedica();
        $atencionMedica->idatencionmedica($idAtencion['idAtencion']);
        $resultAtencion = $atencionMedica->find();
        // atencion primaria
        $atencionPrimaria = new AtencionPrimaria();
        $atencionPrimaria->idAtencionp($idAtencion['idAtencion']);
        $atencionPrimariaResultado = $atencionPrimaria->find();
        // atencion medica
        $atencionMedica = new AtencionMedica();
        $responseMedica = $atencionMedica->findPerson($resultAtencion[0]->IdPersona);
        // validacion 
        if (count($resultAtencion) == 0) {
            echo $this->view->render('pages/Paciente/AtencionMedicaCreada', ['atencionPrimaria' => $atencionPrimariaResultado[0],'atencionMedica' => $responseMedica, 'atencionMedicaEspecifica'=>$resultAtencion[0]]);
            return $response;
        }        
        echo $this->view->render('pages/Paciente/AtencionMedicaCreada', ['atencionPrimaria' => $atencionPrimariaResultado[0],'atencionMedica' => $responseMedica, 'atencionMedicaEspecifica'=>$resultAtencion[0]]);
        return $response;
    }
}
