<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;
use App\Models\User;
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;
use App\Core\Sesion;

class LoginController extends BaseController
{

    public function initSystem(Request $request, Response $response)
    {
        $user = new User();
        $user->email('admin@sysmedic.com');
        $user->userId('admin-124');
        $user->password(password_hash('12345678', PASSWORD_BCRYPT));
        $user->create();
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
        return $response->withHeader('Location', '/?permise=true');
    }
}
