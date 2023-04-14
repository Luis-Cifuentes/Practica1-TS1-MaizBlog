<?php

require_once __DIR__.'/../models/Maiz.php';

class MaizController {

    private $maiz;

    public function __construct($conn){
        $this->maiz = new Maiz($conn);
    }


    public function index() {
        $datos = $this->maiz->obtenerDatos();
        $json = json_encode($datos);
        require_once __DIR__.'/../../resources/views/maices.php';
       // return $json;
    }
}

?>