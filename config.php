<?php
$host = '127.0.0.1';
$dbname = 'universal';
$user = 'root';
$pass = '';

try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    echo $e->getMessage();
    exit();
}

$DBH->exec("set names utf8");




