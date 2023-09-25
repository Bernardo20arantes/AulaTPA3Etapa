<?php
session_start();
ini_set('default_charset', 'UTF-8');
$nome = "Bernardo Pace";
echo "Olá usuário " . $nome . " Seja bem vindo!<br>";
$_SESSION['nome'] = $nome;
echo '<a href="aula_sessoes_segura.php">Ir para página segura</a>';