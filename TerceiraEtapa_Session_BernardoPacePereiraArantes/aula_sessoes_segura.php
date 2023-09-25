<?php
session_start();
ini_set('default_charset', 'UTF-8');

$nome = $_SESSION['nome'];
echo $nome."<br>";

echo '<a href="aula_sessoes.php">Ir para página segura</a>';