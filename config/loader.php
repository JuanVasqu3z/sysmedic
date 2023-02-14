<?php

require_once __DIR__ . '/setting.php';
require_once __DIR__ . '/../app/core/sesion.php';
require_once __DIR__ . '/../app/Helpers/Helpers.php';
require_once __DIR__ . '/../app/Core/conection.php';

// models
require_once __DIR__ . '/../app/Models/Almacen.php';
require_once __DIR__ . '/../app/Models/AtencionMedica.php';
require_once __DIR__ . '/../app/Models/AtencionPrimaria.php';
require_once __DIR__ . '/../app/Models/Cargos.php';
require_once __DIR__ . '/../app/Models/Carrera.php';
require_once __DIR__ . '/../app/Models/Departamento.php';
require_once __DIR__ . '/../app/Models/Empleado.php';
require_once __DIR__ . '/../app/Models/EntregaMedicamento.php';
require_once __DIR__ . '/../app/Models/Estudiante.php';
require_once __DIR__ . '/../app/Models/Lote.php';
require_once __DIR__ . '/../app/Models/Medicamento.php';
require_once __DIR__ . '/../app/Models/Medico.php';
require_once __DIR__ . '/../app/Models/Persona.php';
require_once __DIR__ . '/../app/Models/PersonalDeApoyo.php';
require_once __DIR__ . '/../app/Models/Sede.php';
require_once __DIR__ . '/../app/Models/User.php';

// controllers 
require_once __DIR__ . '/../app/Controllers/BaseController.php';
require_once __DIR__ . '/../app/Controllers/HolaController.php';
require_once __DIR__ . '/../app/Controllers/LoginController.php';
require_once __DIR__ . '/../app/Controllers/MedicineController.php';
require_once __DIR__ . '/../app/Controllers/AlmacenController.php';
require_once __DIR__ . '/../app/Controllers/PersonController.php';
require_once __DIR__ . '/../app/Controllers/AtencionPrimariaController.php';
