<?php

require_once 'conecta.php';

function insereSuficiencia($conexao, $nome, $matricula, $tipo_prova, $curso, $fase, $email, $telefone) {
	$query = "INSERT INTO suficiencia (nome, matricula, tipo_prova, curso, fase, email, telefone, data) 
	VALUES ('{$nome}','{$matricula}','{$tipo_prova}','{$curso}','{$fase}','{$email}','{$telefone}',now())";
	return mysqli_query($conexao, $query);
}

function listaSuficiencia($conexao){
	$alunos = array();
	$query = "select * from suficiencia";
	$resultado = mysqli_query($conexao, $query);
	while ($aluno = mysqli_fetch_assoc($resultado)) {
		array_push($alunos, $aluno);
	}
	return $alunos;
}
