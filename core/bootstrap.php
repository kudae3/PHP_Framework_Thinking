<?php

require "functions.php";
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
require "Router.php";
require "core/request.php";
require "routes.php";
require "App.php";

App::bind('config', require "config.php");
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));
