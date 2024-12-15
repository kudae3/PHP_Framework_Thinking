<?php

class Connection{
    static function make($database){
        $dsn = "{$database['host']};dbname={$database['dbname']}";
        $username = $database['username'];
        $password = $database['password'];

        return new PDO($dsn, $username, $password);
    }
}
