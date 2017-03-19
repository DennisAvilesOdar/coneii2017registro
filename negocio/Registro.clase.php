<?php

require_once '../datos/Conexion.clase.php';
date_default_timezone_set("America/Lima");

class Registro extends Conexion {
    private $dni;
    private $fecha_vencimiento;
    private $monto;
    
    function getDni() {
        return $this->dni;
    }

    function getFecha_vencimiento() {
        return $this->fecha_vencimiento;
    }

    function getMonto() {
        return $this->monto;
    }

    function setDni($dni) {
        $this->dni = $dni;
    }

    function setFecha_vencimiento($fecha_vencimiento) {
        $this->fecha_vencimiento = $fecha_vencimiento;
    }

    function setMonto($monto) {
        $this->monto = $monto;
    }
    
    public function cargarDatos() { //lista o carga todos los documentos
        try {
            $sql = "select * from registrados_pendientes";
            $sentencia = $this->dblink->prepare($sql);
            $sentencia->execute();
            $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } catch (Exception $exc) {
            throw $exc;
        }
    }
    
}