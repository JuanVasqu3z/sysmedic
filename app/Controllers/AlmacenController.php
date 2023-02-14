<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Models\Almacen;

class AlmacenController extends BaseController
{
    public function guardarAlmacen(Request $request, Response $response)
    {
        $dataPost = $request->getParsedBody();
        // echo var_dump($request->getParsedBody());

        $almacen = new Almacen();
        $almacen->idalmacen($dataPost['idalmacen']);
        $almacen->cantidad($dataPost['cantidad']);
        $almacen->nombre($dataPost['nombre']);
        $almacen->peldanos($dataPost['peldanos']);
        $almacen->create();
        $conection = \App\Core\conection();
         return $response;
    }

    public function listarAlmacen(Request $request,Response $response)
    {
        $almacen = new Almacen();
        $arrayAlmacenes = $almacen->getAll();
        echo $this->view->render('pages/Almacen/AlmacenGestion',['almacenes'=>$arrayAlmacenes]);
        return $response;
    }
}