<?php
session_start();
require_once('pdo.php');

function InserirDados($pdo, $nome, $email)
{
    $consulta = "SELECT * FROM usuarios WHERE nome = :nome OR email = :email";
    $stmt = $pdo->prepare($consulta);
    $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();
    
    if ($stmt->rowCount() > 0) {
        $messagem = "Usuário ou email já cadastrados";
        return $messagem;
    } else {
        $sql = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            $messagem = "Cadastrado com sucesso";
            return $messagem;
        } else {
            $messagem = "Erro ao cadastrar";
            return $messagem;
        }
    }
    
    $_SESSION['mensagem'] = $messagem;
    return $messagem;
}
?>