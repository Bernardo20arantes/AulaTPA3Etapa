<?php
//session_destroy();


session_start();
ini_set('default_charset', 'UTF-8');

/*if (isset($_POST["Enviar"])) {
    $nome2 = $_POST["nome"];
    //$senha2 = $_POST["senha"];
    $_SESSION["user"] = $nome2;
    //if ($nome == $nome2 &&  $senha == $senha2) {
    header("Location: dashboard.php");
    // } else {
    // echo '<script>alert ("Erro Nome e senha diferente")</script>';
    //}
}
*/
if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit;
}
$user_principal = "Bernardo";
$senha_principal = "1234";

if (isset($_POST['Enviar'])) {
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];

    if (empty($nome) || empty($senha)) {
        echo '<script>alert("Nome e senha vazios")</script>';
    } else {
        if ($nome == $user_principal && $senha == $senha_principal) {
            $_SESSION['user_id'] = 1;
            $_SESSION['nome'] = $nome;
        } else {
            $_SESSION['user_id'] = 2;
        }
        header("Location: dashboard.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <form method="post">
        <h1>Login</h1>
        <p>Usuário</p>
        <input type="text" name="nome">
        <p>Senha</p>
        <input type="password" name="senha">
        <br> <br>
        <input type="submit" name="Enviar" value="Enviar">
    </form>
</body>

</html>