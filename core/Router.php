<?php

class Router{
    
    public static $routes = [
        "GET" => [],
        "POST" => []
    ];

    public static function get($uri, $controller){
        return self::$routes['GET'][$uri] = $controller;
    }

    public static function post($uri, $controller){
        return self::$routes['POST'][$uri] = $controller;
    }

    public static function direct($uri, $method){
        if(array_key_exists($uri, self::$routes[$method])){
            return self::$routes[$method][$uri];
        }
        else{
            print_r('404 Not found');
        }
    }
}