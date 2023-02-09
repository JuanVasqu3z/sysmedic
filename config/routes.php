<?php
// File: /config/routes.php
$app->get('/hola/{nombre}', '\MiWeb\Controllers\HolaController:index');
$app->get('/', '\MiWeb\Controllers\HolaController:index');