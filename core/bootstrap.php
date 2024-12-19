<?php

use core\App;


require "functions.php";
require "routes.php";

App::bind('config', require "config.php");
App::bind('database', new QueryBuilder(Connection::make(App::get('config')['database'])));
