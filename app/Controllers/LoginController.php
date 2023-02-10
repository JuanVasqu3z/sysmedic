<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;
use App\Models\User;
use \Psr\Http\Message\ResponseInterface as Response;
use \Psr\Http\Message\ServerRequestInterface as Request;

class LoginController extends BaseController
{

    public function initSystem()
    {
        $user = new User();
        $user->email('admin@sysmedic.com');
        $user->userId('admin-124');
        $user->password(password_hash('12345678', PASSWORD_BCRYPT));
        $user->create();

        ///return $response;
    }

    public function validateUser(Request $request, Response $response)
    {
        $paramts = $request->getParsedBody();
        $user = new User();
        $user->email($paramts['email']);
        $result = $user->findEmail();
        if (count($result) > 0) {
            if (password_verify($paramts['password'], $result[0]->password)) {
                echo 'entro';
                return $response->withHeader('Location', './hola');
            }
            echo 'entro 0';
            return $response->withHeader('Location', '/hola'); //->withStatus(302);
        } else {
            return $response->withHeader('Location', './?action=warning');
        }
        return $response->withHeader('Location', './?action=warning');
    }
}
