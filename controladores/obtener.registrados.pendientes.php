<?php

//header('Access-Control-Allow-Origin: *');
require_once '../negocio/Registro.clase.php';
require_once '../util/funciones/Funciones.clase.php';

try {
    $obj = new Registro();
    $resultado=$obj->cargarDatos();
    
    if ($resultado == true) {
        Funciones::imprimeJSON(200, "registrados", $resultado);
    }
} catch (Exception $exc) {
    Funciones::imprimeJSON(500, $exc->getMessage(), "");
}