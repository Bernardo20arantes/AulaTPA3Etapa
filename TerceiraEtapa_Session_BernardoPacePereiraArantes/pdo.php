<?php
session_start();
ini_set('default_charset', 'UTF-8');

$host = 'localhost';
$dbname = 'aula_pdo';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado com sucesso ao Banco";
} catch (PDOException $e) {
    die("Conexão Erro: " . $e->getMessage());
}

$_SESSION['pdo'] = $pdo;
?>