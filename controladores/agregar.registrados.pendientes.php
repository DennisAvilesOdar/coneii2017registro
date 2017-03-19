<?php

require_once '../negocio/Registro.clase.php';
require_once '../util/funciones/Funciones.clase.php';

if (!isset($_POST["p_dni"]) && !isset($_POST["p_fecha"]) && !isset($_POST["p_monto"])) {
    Funciones::imprimeJSON(500, "Faltan parametros", "");
    exit();
}

try {
    $obj = new Registro();
    $obj->setDni($_POST["p_dni"]);
    $obj->setFecha_vencimiento($_POST["p_fecha"]);
    $obj->setMonto($_POST["p_monto"]);
    $resultado = $obj->registrar();
} catch (Exception $ex) {
    
}