<?php

    require "core/bootstrap.php";
    require Router::direct(Request::uri(), $_SERVER['REQUEST_METHOD']);

?>

