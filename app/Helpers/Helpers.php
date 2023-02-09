<?php

function assets($file)
{
    echo ENV['url_asset'].$file;
}

function sessionValidate($sesion)
{
    $login = new App\Core\Sesion();
    $login->sessionStart();
    if( !$login->verifySession($sesion) ){
        header('Location:/?permise=error'); 
    } 
}

function verifyPermission($namePermision)
{
    $userPermise = new App\Core\Permission();
    $userPermise->verifyPermise($namePermision);
}

function ifPermise($namePermision,$rol=false)
{
    $userPermise = new App\Core\Permission();
    if( $rol != false){
        return $userPermise->returnPermiseRol($namePermision,$rol);
    }else{
        return $userPermise->returnPermise($namePermision);
    }
}

function calculatePorcentaje($global,$especifico)
{
    $globalDivisor = (int)$global;
    $numerado = (int)$especifico; 
    echo round(($numerado*100)/$globalDivisor,1);
}


function historiaIsActived($historias)
{
    $result = false;
    foreach( $historias as $historia ){
        if( $historia['estatus_historia'] == 'on'){
            $result = true;
        }
    }
    return $result;
}

function edadActual($fecha_nacimiento)
{
    $fecha_nacimiento = (int)substr( $fecha_nacimiento,0,4); 
    $fecha_actual = (int)date('Y');
    $result = ($fecha_actual-$fecha_nacimiento);
    return $result;
}

function printSexo($valor)
{
    if($valor == 'M'){
        return 'Masculino';
    }else if($valor == 'F'){
        return 'Femenino';
    }
}

function getMedicamentos($codigoEntrega)
{
    $medicamentos = new App\Models\Medicina();
    return $medicamentos->getMedicamentosEntrega($codigoEntrega);
}

function getTotalMedicamento($arrayMedicamento)
{
    $total = 0;
    foreach($arrayMedicamento as $medicamento){
        $total += (int)$medicamento['cantidad_entregada'];
    }
    return $total;
}

function verificarDias($fecha)
{
    $date1 = new DateTime(date('Y-m-d'));
    $date2 = new DateTime(date('Y-m-d'));
    $diff = $date1->diff($date2);
    return $diff;
}