<?php

$driver = 'mysql';
$config = http_build_query(data: [
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'phpiggy'
], arg_separator: ';');

$dsn = "{$driver}:{$config}";
$usernmae = 'root';
$password = '';

$db = new PDO($dsn, $username, $password);
