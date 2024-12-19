<?php

function dd($data){
    die(var_dump($data));
}

function view(String $name, $data=[]){
    extract($data);
    return require "view/$name.view.php";
}

function redirect(String $uri){
    header("Location: $uri");
}

function request($key){
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        return $_POST[$key];
    }
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        return $_GET[$key];
    }
}

