<?php

class Router{
    
    public $routes = [];
    
    public function register($routes){
        $this->routes = $routes;
    }

    public static function load($fileName){
        $routers = new Router;
        require $fileName;
        return $routers;
    }

    public function direct($uri){
        if(array_key_exists($uri, $this->routes)){
            return $this->routes[$uri];
        }
    }
}