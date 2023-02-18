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
        return $response->withHeader('Location', '/Paciente/Control?action=success&type=create-medica-atencion');
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
}
