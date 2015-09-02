<?php

require_once 'banco-usuario.php';
require_once '../logica-usuario.php';
require_once '../upload-imagem.php';

verificaUsuario();

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cargo = $_POST['cargo'];

$telefone = $_POST['telefone'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];

if (isset($_FILES['foto']['name']) && $_FILES["foto"]["error"] == 0) {
    $foto = uploadImagem('foto', 'imagens/perfil/');
} else {
    $foto = "../assets/painel/layout/img/usuario-sem-imagem.png";
}

if ($foto == 'erro') {
    $_SESSION["danger"] = "Tem algo errado com a imagem que você enviou.";
    header("Location: ../../usuario.php");
    die();
}

if (insereUsuario($conexao, $nome, $sobrenome, $cargo, $telefone, $email, $login, $senha, $foto)) {
    $_SESSION["success"] = "Usuário " . $nome . " " . $sobrenome . " adicionado!";
    header("Location: ../../usuario.php");
} else {
    $msg = mysqli_error($conexao);
    $_SESSION["danger"] = "Algo deu errado...";
    header("Location: ../../usuario.php");
}

