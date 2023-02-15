<?php

namespace App\Controllers;

use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;
use App\Models\Persona;

class PersonController extends BaseController
{   //buscar en la api
    public function searchPerson(Request $request, Response $response)
    {
        if (isset($_GET['CedulaPersona'])) {
            $persona = new Persona();
            $persona->cedula($_GET['CedulaPersona']);
            $personaMatch = $persona->buscarCedula();
            if (count($personaMatch) > 0) {
                $response = $response->withStatus(302);
                return $response->withHeader('Location', '/?persona=' . $personaMatch[0]->IdPersona);
                return $response;
            }
            echo var_dump($personaMatch);
            $response = $response->withStatus(302);
            return $response->withHeader('Location', '/persona/view/create?resolve=warning');
        }
        return $response->withHeader('Location', '/persona/view/create?resolve=warning');
    }
    // crear persona
    public function viewCreatePerson(Request $request, Response $response)
    {
        echo $this->view->render('pages/persona/createPerson');
        return $response;
    }
    //registra persona
    public function registrarPersona(Request $request, Response $response)
    {
        $paramts = $request->getParsedBody();
        $persona = new Persona();
        $persona->cedula($paramts['cedula']);
        $personaMatch = $persona->buscarCedula();
        if (count($personaMatch) > 0) {
            $response = $response->withStatus(302);
            return $response->withHeader('Location', '/persona/view/create?action=warning');
        }
        $persona->idPersona($paramts['cedula'] . date('hsmy'));
        $persona->cedula($paramts['cedula']);
        $persona->nombre($paramts['nombre']);
        $persona->apellido($paramts['apellido']);
        $persona->direccion($paramts['direccion']);
        $persona->numeroTelefono($paramts['telefono']);
        $persona->sexo($paramts['sexo']);
        $persona->create();

        $response = $response->withStatus(302);
        return $response->withHeader('Location', '/?action=warning&persona=' . $persona->getPrimaryKey());
    }
    //ver buscar persona
    public function viewSearchPerson(Request $request, Response $response)
    {
        sessionValidate('auth');
        //closeSesion();

        if (isset($_GET['persona'])) {
            $persona = new Persona();
            $persona->idPersona($_GET['persona']);
            $personaMatch = $persona->find();
            if (count($personaMatch) == 0) {
                $response = $response->withStatus(302);
                return $response->withHeader('Location', '/persona/view/create?resolve=warning');
            }

            echo $this->view->render('pages/Home', ['persona' => $personaMatch[0]]);
            return $response;
        }
        echo $this->view->render('pages/Home');
        return $response;
    }
}
