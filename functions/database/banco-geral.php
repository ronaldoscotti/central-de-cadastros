<?php

require_once 'conecta.php';

function buscaConfig($conexao){
	$configuracoes = array();
	$query = "select * from configuracoes";
	$resultado = mysqli_query($conexao, $query);
	while ($config = mysqli_fetch_assoc($resultado)) {
		array_push($configuracoes, $config);
	}
	return $configuracoes;
}

function buscaCursos($conexao){
	$cursos = array();
	$query = "select * from cursos";
	$resultado = mysqli_query($conexao, $query);
	while ($curso = mysqli_fetch_assoc($resultado)) {
		array_push($cursos, $curso);
	}
	return $cursos;
}