<?php

header('Access-Control-Allow-Origin: *');
require_once '../negocio/Registro.clase.php';
require_once '../util/funciones/Funciones.clase.php';

try {
    $obj = new Registro();
    $datosDocumento = $obj->cargarTabla();
    
    if ($datosDocumento == true) {
        Funciones::imprimeJSON(200, "Datos del documento", $datosDocumento);
    }
    
} catch (Exception $exc) {
    Funciones::imprimeJSON(500, $exc->getMessage(), "");
}