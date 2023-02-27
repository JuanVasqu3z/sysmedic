<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Persona;
use App\Models\Medico;
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;
use App\Core\Sesion;

class LoginController extends BaseController
{
    public function initSystem(Request $request, Response $response)
    {
        $person = new Persona();
        $person->idPersona('origin-321');
        $person->cedula('123');
        $person->nombre('Luis Jose');
        $person->apellido('Grau');
        $person->direccion('Cancamure');
        $person->numeroTelefono('412198');
        $person->sexo('Masculino');
        $person->create();
        // user admin
        $user = new User();
        $user->email('admin@sysmedic.com');
        $user->userId('admin-124');
        $user->password(password_hash('12345678', PASSWORD_BCRYPT));
        $user->rolId('123-admin');
        $user->personId('origin-321');
        $user->create();
        // medico 
        $medico = new Medico();
        $medico->idMedico('medico-321');
        $medico->idPersona('origin-321');
        $medico->numeroDeColegio('1232');
        $medico->create();

        return $response;
    }

    public function createAsistente(Request $request, Response $response)
    {
        $person = new Persona();
        $person->idPersona('asistente-123');
        $person->cedula('431');
        $person->nombre('Sherman');
        $person->apellido('Santa Cruz');
        $person->direccion('Cancamure');
        $person->numeroTelefono('412198');
        $person->sexo('Masculino');
        $person->create();
        // user admin
        $user = new User();
        $user->email('asistente@sysmedic.com');
        $user->userId('asistente-124');
        $user->password(password_hash('12345678', PASSWORD_BCRYPT));
        $user->rolId('123-personal-apoyo');
        $user->personId('asistente-123');
        $user->create();
        // medico 
        $medico = new Medico();
        $medico->idMedico('medico-2424');
        $medico->idPersona('asistente-123');
        $medico->numeroDeColegio('1232');
        $medico->create();

        return $response;
    }

    public function validateUser(Request $request, Response $response)
    {
        $paramts = $request->getParsedBody();
        $user = new User();
        $user->email($paramts['email']);
        $result = $user->findEmail();
        $response = $response->withStatus(302);
        if (count($result) > 0) {
            if (password_verify($paramts['password'], $result[0]->password)) {
                $sesionUser = new Sesion();
                $sesionUser->createSession('auth', ['user' => $result[0]->userId, 'status' => 'active']);
                $_SESSION['globalUser'] = $result[0]->userId;
                return $response->withHeader('Location', '/');
            }
            return $response->withHeader('Location', '/login?permise=true'); //->withStatus(302);
        } else {
            return $response->withHeader('Location', '/?permise=true');
        }
        return $response->withHeader('Locaorigintion', '/?permise=true');
    }

    public function endSession(Request $request, Response $response)
    {
        $sesionUser = new Sesion();
        $sesionUser->sessionStart();
        if ($sesionUser->verifySession('auth')) {
            $sesionUser->destroySession();
        }
        $response = $response->withStatus(302);
        return $response->withHeader('Location', '/login');
    }
}
