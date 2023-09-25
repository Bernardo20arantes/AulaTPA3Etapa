<?php
session_start();    
ini_set('default_charset', 'UTF-8');

//$user = $_SESSION["user"];
//echo $user;


if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] !== 1) {
    echo "Sem permissão para acesso a página<br>";
    echo '<a href="logout.php">Ir para página inicial</a>';
    exit;
} else
{
    $nome = $_SESSION['nome'];
    echo "Seja bem vindo usuário: $nome <br>";
    echo '<a href="gera_pdf.php" target="_blank">Criar Relatório</a> <br>';
    echo '<a href="gera_tabela.php" target="_blank">Criar Tabela</a> <br>';
    echo '<a href="pdo_crud.php">Crud</a> <br>';
    echo '<a href="logout.php">Ir para página inicial</a>';
    exit;
}