<?php
session_start();
include("pdo.php");
require_once('pdo_insert.php');

$pdo = $_SESSION['pdo'];
$mensagem = $_SESSION['mensagem'];

if (isset($_POST['Enviar'])) {
    $pdo = $_SESSION['pdo'];
    $nome = $_POST['Nome'];
    $email = $_POST['Email'];

    InserirDados($pdo, $nome, $email);

    echo "<script>alert('$mensagem');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edg  e">
    <title>Crud</title>
</head>

<body>
    <main>
        <form method="post" style="display: flex;flex-direction: column;width: 14%;">
            <h2>Nome</h2>
            <input type="text" name="Nome">
            <h2>Email</h2>
            <input type="text" name="Email">
            <br>
            <input type="submit" name="Enviar" value="Inserir Dados">
        </form>
    </main>
</body>

</html>