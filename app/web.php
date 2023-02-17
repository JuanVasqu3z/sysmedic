<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', 'App\Controllers\PersonController:viewSearchPerson');

//routes of Paciente
$app->get('/Paciente/AtencionMedica', 'App\Controllers\HolaController:AtencionMedica');
$app->get('/Paciente/Control', 'App\Controllers\HolaController:ControlPaciente');
$app->get('/Paciente/Detalle', 'App\Controllers\HolaController:DetallePaciente');
$app->get('/Paciente/Detalle/Detalle', 'App\Controllers\HolaController:DetalleDelDetalle');

//routes of medicina
$app->get('/Medicina/Register', 'App\Controllers\HolaController:RegisterMedicamentos');
$app->get('/Medicina/Entrega', 'App\Controllers\HolaController:EntregaMedicamento');
$app->get('/Medicina/Lista', 'App\Controllers\MedicineController:listarMedicinas');

// routes of Almacen
$app->get('/Almacen/Register', 'App\Controllers\LoteController:viewRegisterLote');
$app->get('/Almacen/ControlLotes', 'App\Controllers\HolaController:ControlLotes');
$app->get('/Almacen/AlmacenGestion', 'App\Controllers\AlmacenController:listarAlmacen');
$app->get('/Almacen/Crear', 'App\Controllers\HolaController:CrearAlmacen');

$app->get('/foo', function (Request $request, Response $response, $args) {
    $myService = $this->get('template');
    //echo var_dump($myService);
    $myService->setFileExtension(null);
    echo $myService->render('components/index.php');
    return $response;
});

$app->get('/hola', 'App\Controllers\HolaController:index');

// login 
$app->get('/login', 'App\Controllers\HolaController:Login');
$app->post('/start/singin', 'App\Controllers\LoginController:validateUser');
$app->get('/end-session', 'App\Controllers\LoginController:endSession');

// esta es para iniciar el super user
$app->get('/init-system', 'App\Controllers\LoginController:initSystem');

// rutas post (para guardar o actualizar o borrar)\
// medicina
$app->post('/medicine/save', 'App\Controllers\MedicineController:guardarMedicina');


//Almacen
$app->post('/almacen/save', 'App\Controllers\AlmacenController:guardarAlmacen');

// personas
$app->get('/persona/search', 'App\Controllers\PersonController:searchPerson');
$app->post('/persona/save', 'App\Controllers\PersonController:registrarPersona');
// ----- 
$app->get('/persona/view/create', 'App\Controllers\PersonController:viewCreatePerson');

// atencion primaria
$app->post('/atencion-primaria/save', 'App\Controllers\AtencionPrimariaController:saveAtencionPrimaria');
$app->get('/ListaRegistro', 'App\Controllers\AtencionPrimariaController:listaEspera');
