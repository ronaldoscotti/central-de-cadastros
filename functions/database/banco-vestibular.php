<?php

require_once 'conecta.php';

function insereVestibular($conexao, $cpf, $rg, $nome_candidato, $data_nasc, $orgao_expedidor, $endereco, $numero, $bairro, $cidade, $cep, $uf, $telefone, $celular, $email, $pne, $lingua_estrangeira, $curso_opcao_1, $curso_opcao_2) {
	$query = "INSERT INTO vestibular (cpf, rg, nome_candidato, data_nasc, orgao_expedidor, 
		endereco, numero, bairro, cidade, cep, uf, telefone, celular, email, pne, 
		lingua_estrangeira, curso_opcao_1, curso_opcao_2) VALUES ('{$cpf}','{$rg}',
		'{$nome_candidato}','{$data_nasc}','{$orgao_expedidor}','{$endereco}','{$numero}',
		'{$bairro}','{$cidade}','{$cep}','{$uf}','{$telefone}', '{$celular}','{$email}','{$pne}',
		'{$lingua_estrangeira}','{$curso_opcao_1}','{$curso_opcao_2}')";
return mysqli_query($conexao, $query);
}

function listaVestibular($conexao){
	$alunos = array();
	$query = "select * from vestibular";
	$resultado = mysqli_query($conexao, $query);
	while ($aluno = mysqli_fetch_assoc($resultado)) {
		array_push($alunos, $aluno);
	}
	return $alunos;
}
