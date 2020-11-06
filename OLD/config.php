<?php

$dbname = 'redecom';
$host = 'localhost';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:dbname={$dbname};host={$host}",$user,$pass);
} catch(Exception $e) {
    echo "ERRO: ".$e->getMessage();
}