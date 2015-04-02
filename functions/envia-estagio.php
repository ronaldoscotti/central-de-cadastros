<?php

require_once 'helper.php';

$nome = $_POST['nome'];
$RG = $_POST['RG'];
$DataNascimento = $_POST['DataNascimento'];
$CPF = $_POST['CPF'];
$CarteiraTrabalho = $_POST['CarteiraTrabalho'];
$CarteiraTrabalhoSerie = $_POST['CarteiraTrabalhoSerie'];

$Endereco = $_POST['Endereco'];
$EnderecoNumero = $_POST['EnderecoNumero'];
$Bairro = $_POST['Bairro'];
$CEP = $_POST['CEP'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$Curso = $_POST['Curso'];
$Matricula = $_POST['Matricula'];
$Fase = $_POST['Fase'];
$Seguro = $_POST['Seguro'];
$CENome = $_POST['CENome'];
$UCECNPJ = $_POST['UCECNPJ'];
$UCEEndereco = $_POST['UCEEndereco'];
$UCEDiretor = $_POST['UCEDiretor'];
$UCEConvenio = $_POST['UCEConvenio'];
$NomeOrientador = $_POST['NomeOrientador'];
$OrientadorEmail = $_POST['OrientadorEmail'];
$OrientadorTelefone = $_POST['OrientadorTelefone'];
$OrientadorCelular = $_POST['OrientadorCelular'];


$estagio = $_POST;

show($estagio);

?>