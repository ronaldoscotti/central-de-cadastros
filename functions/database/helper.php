<?php

function show($var) {
	echo '<pre>';
	echo '\************ Iniciando modo Debug ************/';
	echo '<br/><br/>';
	print_r($var);
	echo '<br/><br/>';
	echo '\****** Script encerrado propositalmente ******/';
	echo '</pre>';
	die();
}

function safe($value) {
	return mysql_real_escape_string($value);
}

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false) {
	$lmin = 'abcdefghijklmnopqrstuvwxyz';
	$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$num = '1234567890';
	$simb = '!@#$%*-';
	$retorno = '';
	$caracteres = '';	
	$caracteres .= $lmin;
	if ($maiusculas) $caracteres .= $lmai;
	if ($numeros) $caracteres .= $num;
	if ($simbolos) $caracteres .= $simb;
	$len = strlen($caracteres);
	for ($n = 1; $n <= $tamanho; $n++) {
		$rand = mt_rand(1, $len);
		$retorno .= $caracteres[$rand-1];
	}
	return $retorno;
}

function dataParaExibir($data){
	$timestamp = strtotime($data);
	return date('d/m/Y', $timestamp);
}

function dataParaMysql($data){
	$data = str_replace('/', '-', $data);
	$timestamp = strtotime($data);
	return date('Y/m/d', $timestamp);
}