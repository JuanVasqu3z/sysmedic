<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', 'App\Controllers\PersonController:viewSearchPerson');

//routes of Paciente
$app->get('/Paciente/AtencionMedica/{idAtencion}', 'App\Controllers\AtencionPrimariaController:viewHacerAtencionMedica');
$app->get('/Paciente/AtencionMedicaCreada/{idAtencion}', 'App\Controllers\AtencionMedicaController:ViewAtencionMedicaCreada');
$app->get('/Paciente/Control', 'App\Controllers\AtencionMedicaController:viewControlDePaciente');
$app->get('/Paciente/Detalle/{idPersona}', 'App\Controllers\PersonController:viewDetallePaciente');
$app->get('/Paciente/Detail/{idAtencion}', 'App\Controllers\AtencionMedicaController:ViewDetalleMedico');

//routes of medicina
$app->get('/Medicina/Register', 'App\Controllers\HolaController:RegisterMedicamentos');
$app->get('/Medicina/Entrega/{idAtencion}', 'App\Controllers\LoteController:EntregaMedicina');
$app->get('/Medicina/Lista', 'App\Controllers\MedicineController:listarMedicinas');
$app->get('/Medicina/Historial', 'App\Controllers\LoteController:viewEntregaMedicamento');

// routes of Almacen
$app->get('/Almacen/Register', 'App\Controllers\LoteController:viewRegisterLote');
$app->get('/Almacen/ControlLotes', 'App\Controllers\LoteController:viewControlLotes');
$app->get('/Almacen/AlmacenGestion', 'App\Controllers\AlmacenController:listarAlmacen');
$app->get('/Almacen/Crear', 'App\Controllers\HolaController:CrearAlmacen');


$app->get('/foo', function (Request $request, Response $response, $args) {
    $myService = $this->get('template');
    //echo var_dump($myService);
    $myService->setFileExtension(null);
    echo $myService->render('components/index.php');
    return $response;
});

// $app->get('/hola', 'App\Controllers\HolaController:index');

// login 
$app->get('/login', 'App\Controllers\HolaController:Login');
$app->post('/start/singin', 'App\Controllers\LoginController:validateUser');
$app->get('/end-session', 'App\Controllers\LoginController:endSession');

// esta es para iniciar el super user
$app->get('/init-system', 'App\Controllers\LoginController:initSystem');
$app->get('/init-asistente', 'App\Controllers\LoginController:createAsistente');

// rutas post (para guardar o actualizar o borrar)\
// medicina
$app->post('/medicine/save', 'App\Controllers\MedicineController:guardarMedicina');

//Almacen
$app->post('/almacen/save', 'App\Controllers\AlmacenController:guardarAlmacen');

// personas
$app->get('/persona/search', 'App\Controllers\PersonController:searchPerson');
$app->post('/persona/save', 'App\Controllers\PersonController:registrarPersona');
$app->get('/persona/api/save', 'App\Controllers\PersonController:createPersonApi');
// ----- 
$app->get('/persona/view/create', 'App\Controllers\PersonController:viewCreatePerson');

// atencion primaria
$app->post('/atencion-primaria/save', 'App\Controllers\AtencionPrimariaController:saveAtencionPrimaria');
$app->get('/ListaRegistro', 'App\Controllers\AtencionPrimariaController:listaEspera');

// atencion medica 
$app->post('/atencion-medica/save', 'App\Controllers\AtencionMedicaController:saveAtencionMedica');

// lotes
$app->post('/lote/save', 'App\Controllers\LoteController:saveLote');

// generate pdf
$app->get('/exportar-recipe','App\Controllers\HolaController:exportar');

//entrega Medicamento
$app->post('/entrega/save', 'App\Controllers\LoteController:saveEntrega');