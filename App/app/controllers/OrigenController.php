<?php

require_once __DIR__.'/../models/Origen.php';

class OrigenController {

    private $origen;

    public function __construct($conn){
        $this->origen = new Origen($conn);
    }


    public function index() {
        $datos = $this->origen->obtenerDatos();
        $json = json_encode($datos);
        require_once __DIR__.'/../../resources/views/origenes.php';
    }
}

?>