<?php

error_reporting(E_ALL ^ E_NOTICE);
// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
	exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
	require_once("libraries/password_compatibility_library.php");
}

require_once("config/db.php");
require_once("classes/Login.php");

$login = new Login();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastros Unifacvest</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png">

	<script src="../assets/js/jquery-2.1.3.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
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
					<a class="navbar-brand" href="./"><img src="../assets/img/logo.png" alt="Central de Cadastros"></a>
				</div>
				<?php
				if ($login->isUserLoggedIn() == true) {
					?>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
						<ul class="nav navbar-nav">
							<li><a href="./cursos.php"><i class="fa fa-graduation-cap"></i> Cursos <span class="sr-only">(current)</span></a></li>
							<li><a href="./suficiencia.php"><i class="fa fa-file-text-o"></i> Provas de Suficiência</a></li>
							<li><a href="./vestibular.php"><i class="fa fa-university"></i> Vestibular</a></li>
							<li><a href="./configuracoes.php"><i class="fa fa-cogs"></i> Configurações</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> <?= $_SESSION['user_name'] ?> <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="register.php"><i class="fa fa-user-plus"></i> Novo Usuário</a></li>
									<li><a href="index.php?logout"><i class="fa fa-sign-out"></i> Sair</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<?php 
				} ?>
			</div>

		</div>
	</nav>
	<div class="container">
