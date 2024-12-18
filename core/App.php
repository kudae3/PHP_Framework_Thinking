<?php

class App{
    public static $datas = [];
    public static function bind(String $key, $value){
        return self::$datas[$key] = $value;
    } 

    public static function get(String $key){
        return self::$datas[$key];
    }
}