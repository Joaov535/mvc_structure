<?php
require 'environment.php';

$config = array();

if( ENVIRONMENT == "development") {
    define("BASE_URL", "http://localhost/mvc_structure/");
    $config['db_name'] = 'test';
    $config['db_user'] = 'root';
    $config['db_host'] = 'localhost';
    $config['db_pass'] = '';
} else {
 // Conexão da Hospedagem
}

try {
    $pdo = new PDO('mysql:dbname='.$config['db_name'].";host=".$config['db_host'], $config['db_user'], $config['db_pass']);
} catch (Exception $e) {
    echo "Erro: ". $e->getMessage();
    exit;
}