<?php

require_once './database/conecta.php';
require_once './database/banco-vestibular.php';

$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nome_candidato = $_POST['nome_candidato']; 
$data_nasc = $_POST['data_nasc'];
$orgao_expedidor = $_POST['orgao_expedidor'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$uf = $_POST['uf'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$pne = $_POST['pne'];
$lingua_estrangeira = $_POST['lingua_estrangeira']; 
$curso_opcao_1 = $_POST['curso_opcao_1'];
$curso_opcao_2 = $_POST['curso_opcao_2'];

if (insereVestibular($conexao, $cpf, $rg, $nome_candidato, $data_nasc, $orgao_expedidor, $endereco, $numero, $bairro, $cidade, $cep, $uf, $telefone, $celular, $email, $pne, $lingua_estrangeira, $curso_opcao_1, $curso_opcao_2)) {
	session_start();	
	$_SESSION["success"] = $nome_candidato . ", sua inscrição foi confirmada! Clique no botão abaixo para gerar o boleto.";
	header("Location: ../vestibular.php?nome={$nome_candidato}&cpf={$cpf}");
} else {
	$msg = mysqli_error($conexao);
	session_start();
	$_SESSION["danger"] = "Algo deu errado... " . $msg;
	header("Location: ../vestibular.php");
}

?>