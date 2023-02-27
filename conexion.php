<?php
require 'vendor/autoload.php';

//Cargar .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeload();
$client = $_ENV['CONNECT_REDIS'];

//Conexion con redis cloud
$redis = new Predis\Client($client);
?>