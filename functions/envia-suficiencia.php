<?php

require_once './database/conecta.php';
require_once './database/banco-suficiencia.php';

$nome = ucfirst($_POST['nome']);
$matricula = $_POST['matricula'];
$tipo_prova = $_POST['tipo_prova'];
$curso = $_POST['curso'];
$fase = $_POST['fase'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


if (insereSuficiencia($conexao, $nome, $matricula, $tipo_prova, $curso, $fase, $email, $telefone)) {
	session_start();	
	$_SESSION["success"] = $nome . ", sua vaga foi reservada!";
	header("Location: ../suficiencia.php");
} else {
	$msg = mysqli_error($conexao);
	session_start();
	$_SESSION["danger"] = "Algo deu errado... " . $msg;
	header("Location: ../suficiencia.php");
}

?>