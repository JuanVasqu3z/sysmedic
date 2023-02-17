<?php

namespace App\Controllers;

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\AtencionPrimaria;
use App\Core\Sesion;

class AtencionPrimariaController extends BaseController
{
    public function saveAtencionPrimaria(Request $request, Response $response)
    {
        $userCurrent = Auth();
        if (is_null($userCurrent)) {
            $sesionUser = new Sesion();
            $sesionUser->sessionStart();
            if ($sesionUser->verifySession('auth')) {
                $sesionUser->destroySession();
            }
            $response = $response->withStatus(302);
            return $response->withHeader('Location', '/login?permise=true');
        }
        $paramts = $request->getParsedBody();
        $atencionPrimaria = new AtencionPrimaria();
        $atencionPrimaria->idAtencionp($paramts['persona_id'] . date('1'));
        $atencionPrimaria->idPersona($paramts['persona_id']);
        $atencionPrimaria->idPersonadeApoyo('2825006009220223'); // mira sin venguenza esto es estatico
        $atencionPrimaria->fecha($paramts['date']);
        $atencionPrimaria->hora($paramts['time']);
        $atencionPrimaria->motivodeConsulta($paramts['description']);
        $atencionPrimaria->medicoId($userCurrent->IdPersona);
        $atencionPrimaria->create();

        $response = $response->withStatus(302);
        return $response->withHeader('Location', '/?action=success&persona=' . $paramts['persona_id']);
    }

    public function listaEspera(Request $request, Response $response)
    {
        sessionValidate('auth');
        $atencionPrimaria = new AtencionPrimaria();
        $listaEspera = $atencionPrimaria->getAll();
        echo $this->view->render('pages/ListaRegister', ['listaEspera' => $listaEspera]);
        return $response;
    }
}
