<?php
require_once '../vendor/autoload.php';

$database = new Medoo\Medoo([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);

//dump($database);