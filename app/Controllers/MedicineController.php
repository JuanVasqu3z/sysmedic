<?php

namespace App\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use App\Models\Medicamento;

class MedicineController extends BaseController
{
    public function guardarMedicina(Request $request, Response $response)
    {
        $dataPost = $request->getParsedBody();
        echo var_dump($request->getParsedBody());

        $medicamento = new Medicamento();
        $medicamento->codigo($dataPost['codigo']);
        $medicamento->nombre($dataPost['nombre']);
        $medicamento->tipo($dataPost['tipo']);
        $medicamento->presentacion($dataPost['presentacion']);
        $medicamento->unidad($dataPost['unidad']);
        $medicamento->cantidad($dataPost['cantidad']);
        $medicamento->create();
        /*$conection = \App\Core\conection();
        $execute = $conection->prepare("INSERT INTO `Medicamentos` (`Codigo`, `Nombre`, `Tipo`, `Presentancion`, `Unidad`, `Cantidad`) 
             VALUES ('".$dataPost['codigo']."', 'Loperan', 'Analgesico', 'tableta', '15', '2')");
        $execute->execute();*/
        return $response;
    }

    public function listarMedicinas(Request $request,Response $response)
    {
        $medicamento = new Medicamento();
        $arrayMedicamentos = $medicamento->getAll();
        echo $this->view->render('pages/Medicina/ListaMedicamentos',['medicamentos'=>$arrayMedicamentos]);
        return $response;
    }
}