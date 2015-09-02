<?php 
require_once './functions/mostra-alerta.php';
require_once './functions/database/banco-geral.php';

$config = buscaConfig($conexao);
$cursos = buscaCursos($conexao);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Cadastros Unifacvest</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./assets/css/custom.css">
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/png" href="./assets/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="./assets/css/responsiveslides.css">

	<script src="./assets/js/jquery-2.1.3.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/responsiveslides.min.js"></script>

	<script>
		$(function() {
			$(".rslides").responsiveSlides({
				pager: false,
				timeout: 8000,
				speed: 600
			});
		});
	</script>
	
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./"><img src="./assets/img/logo.png" alt="Central de Cadastros"></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
					<ul class="nav navbar-nav">
						<li><a href="estagio.php">Estágios <span class="sr-only">(current)</span></a></li>						
						<li><a href="./suficiencia.php">Provas de Suficiência</a></li>
						<li><a href="./vestibular.php">Vestibular</a></li>
						<li><a href="" data-toggle="modal" data-target="#sobre">Sobre</a></li>
					</ul>
				</div>
			</div>

		</div>
	</nav>

	<!-- Modal -->
	<div class="modal fade" id="sobre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header primary">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
					<h4 class="modal-title"><i class="fa fa-info-circle"></i> Sobre</h4>
				</div>
				<div class="modal-body">
					<h3>Bem vindo a Central de Cadastros.</h3>
					<p>
						Este sistema foi desenvolvido durante a disciplina de Fábrica de Software I, 
						ministrada pelo Professor Márcio Sembay, Msc. no Centro Universitário Catarinense - Unifacvest.
					</p>
					<hr>

					<h3>Design Templates</h3>

					<p>Está sendo utilizado como base o framework <a target="_blank" href="http://getbootstrap.com">Bootstrap</a>, com o tema <a target="_blank" href="https://bootswatch.com/sandstone/">Sandstone</a>.</p>

					<hr>

					<h3>Autores</h3>

					<p>
						Trabalho desenvolvido por 
						<a target="_blank" href="https://www.facebook.com/profile.php?id=100003816651048&amp;fref=ts">Fabio Gonçalves Vieira</a>, 
						<a target="_blank" href="https://www.facebook.com/FrancoFoscarini">Franco Foscarini</a>, 
						<a target="_blank" href="https://www.facebook.com/barti.novack">Kelvin Novack</a>, 
						<a target="_blank" href="https://www.facebook.com/pablo.hearthbreaker?fref=ts">Pablo Azevedo</a>, 
						<a target="_blank" href="https://www.facebook.com/rglourenco2?fref=ts">Richard Lourenço</a> e 
						<a target="_blank" href="https://www.facebook.com/ronaldoscottis">Ronaldo Scotti Dos Santos</a>.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>
