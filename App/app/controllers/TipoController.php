<?php

require_once __DIR__.'/../models/Tipo.php';

class TipoController {

    private $tipo;

    public function __construct($conn){
        $this->tipo = new Tipo($conn);
    }


    public function index() {
        $datos = $this->tipo->obtenerDatos();
        $json = json_encode($datos);
        require_once __DIR__.'/../../resources/views/tipos.php';
    }
}

?>