<?php

class Router {

    private $conn;

    private $routes = [
        '/'        => 'HomeController@index',
        '/maices'   => 'MaizController@index',
        '/depts'    => 'DepartamentoController@index',
        '/tipos'    => 'TipoController@index',
        '/origin'   => 'OrigenController@index'
    ];

    public function dispatch($url) {
        $controllerAction = $this->routes[$url] ?? $this->routes['/'];
        if ($url !== '/' && !array_key_exists($url, $this->routes)) {
            header("Location: ./");
            exit;
        }
        $controller = explode('@', $controllerAction)[0];
        $action = explode('@', $controllerAction)[1];
        $params = [];
        require_once __DIR__.'/../app/controllers/' . $controller . '.php';
        $controllerInstance = new $controller($this->conn);
        call_user_func_array([$controllerInstance, $action], $params);
    }
    
    public function setConnection($conn) {
        $this->conn = $conn;
    }


}

?>