<?php

class Router{

    public static $routes = [
        "GET" => [],
        "POST" => []
    ];

    public static function get($uri, Array $action ){
        return self::$routes['GET'][$uri] = $action;
    }

    public static function post($uri, Array $action){
        return self::$routes['POST'][$uri] = $action;
    }

    public static function callMethod($class, $method){
        $obj = new $class;
        $obj->$method(); 
    }

    public static function direct($uri, $method){
        if(!array_key_exists($uri, self::$routes[$method])){
            print_r('404 Not found');
            
        }
        self::callMethod(self::$routes[$method][$uri][0], self::$routes[$method][$uri][1]);
    }
}