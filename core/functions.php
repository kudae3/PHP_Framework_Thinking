<?php

function dd($data){
    die(var_dump($data));
}

function view(String $name, $data=[]){
    extract($data);
    return require "view/$name.view.php";
}

