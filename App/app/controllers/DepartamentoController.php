<?php

require_once __DIR__.'/../models/Departamento.php';

class DepartamentoController {

    private $departamento;

    public function __construct($conn){
        $this->departamento = new Departamento($conn);
    }


    public function index() {
        $datos = $this->departamento->obtenerDatos();
        $json = json_encode($datos);
        require_once __DIR__.'/../../resources/views/departamentos.php';
        //return $json;
    }
}

?>