<?php
    require "vendor/autoload.php";
    require "core/bootstrap.php";
    Router::direct(Request::uri(), $_SERVER['REQUEST_METHOD']);

?>

