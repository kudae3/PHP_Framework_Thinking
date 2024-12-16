<?php

require "functions.php";
require "core/database/Connection.php";
require "core/database/QueryBuilder.php";
require "Router.php";
require "core/request.php";
require "routes.php";

$config = require "config.php";
$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);