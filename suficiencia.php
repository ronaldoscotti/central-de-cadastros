<?php 

require_once './header.php';

if ($config[0]['provas_ativas'] == 'SIM') {
	?>

	<?php  
	if (!isset($_SESSION["success"]) && !isset($_SESSION["danger"])) {
		?>

		<div class="container">
			<div class="jumbotron">
				<h2><i class="fa fa-graduation-cap"></i> Cadastro na Prova de Suficiência</h2>
				<p><small>Preencha o formulário abaixo com seus dados para confirmar sua inscrição na prova de suficiencia Unifacvest.</small></p>
				<hr>
				<form class="form-horizontal" action="./functions/envia-suficiencia.php" method="post">
					<fieldset>

						<div class="form-group">
							<label for="inputNome" class="col-lg-2 control-label">Nome</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" name="nome" id="nome" placeholder="Digite Seu Nome Completo" required autofocus="">
							</div>
						</div>

						<div class="form-group">
							<label for="select" class="col-lg-2 control-label">Curso</label>
							<div class="col-lg-6">
								<select class="form-control" name="curso" id="select">
									<?php  
									foreach ($cursos as $curso) {
										?>
										<option value="<?= $curso['curso'] ?>"><?= $curso['curso'] ?></option>
										<?php
									}
									?>
								</select>
							</div>

							<label for="inputNome" class="col-lg-1 control-label">Matricula</label>
							<div class="col-lg-3">
								<input type="text" class="form-control" id="matricula" name="matricula" placeholder="">
							</div>
						</div>    

						<div class="form-group">
							<label for="inputFase" class="col-lg-2 control-label">Fase</label>
							<div class="col-lg-1">
								<input type="text" class="form-control numero" name="fase" id="fase" placeholder="Nº">
							</div>
							<label for="inputNome" class="col-lg-1 control-label">E-mail</label>
							<div class="col-lg-4">
								<input type="email" class="form-control" name="email" id="inputNome" placeholder="Seu e-mail" required>
							</div>
							<label for="inputNome" class="col-lg-1 control-label">Telefone</label>
							<div class="col-lg-3">
								<input type="text" class="form-control" name="telefone" id="telefone" required>
							</div>

						</div>

						<div class="form-group">
							<label for="select" class="col-lg-2 control-label">Prova</label>
							<div class="col-lg-6">
								<select class="form-control" name="tipo_prova" id="tipo_prova">
									<option value="Inglês">Inglês</option>
									<option value="Informática">Informática</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="col-lg-10 col-lg-offset-2">
								<button type="reset" class="btn btn-default">Limpar</button>
								<button type="submit" class="btn btn-success">Enviar</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<?php 
		require_once 'footer.php';
		?>

		<?php 
	}
	else {

		?>
		<div class="col-md-6 col-md-offset-3">
			<?php
			mostraAlerta("success");
			mostraAlerta("danger");
			?>
			<a class="center-block btn btn-primary mb-10" href="./suficiencia.php"><i class="fa fa-refresh"></i> Regarregar</a>
		</div>
		<?php 
	} 
	?>

	<script src="./assets/js/mascaras/jquery.validate.min.js" type="text/javascript"></script>
	<script src="./assets/js/mascaras/jquery.maskedinput.js" type="text/javascript"></script>
	<!-- END PAGE LEVEL SCRIPTS -->

	<script>
		$(document).ready(function() {
            //attach keypress to input
            $('.numero').keydown(function(event) {
                // Allow special chars + arrows 
                if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 
                	|| event.keyCode == 27 || event.keyCode == 13 
                	|| (event.keyCode == 65 && event.ctrlKey === true) 
                	|| (event.keyCode >= 35 && event.keyCode <= 39)){
                	return;
            }else {
                    // If it's not a number stop the keypress
                    if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                    	event.preventDefault(); 
                    }   
                }
            });            
        });

		jQuery(function ($) {
			$("#data").mask("99/99/9999", {placeholder: "dd/mm/aaaa"});
			$("#telefone").mask("(99) 9999-9999?9");
			$("#cpf").mask("999.999.999-99");
			$("#cep").mask("99999-999");
			$("#matricula").mask("99999");
			$("#fase").mask("9?9");
		});
	</script>
	<?php
} else {
	?>
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<div class="space-75"></div>
			<h3 class="text-danger">Desculpe... As provas não estão abertas!</h3>
			<blockquote>
				<p>Mas fique atento, em breve novos editais deverão ser abertos.</p>
				<small>Att <cite title="Source Title"> Direção Unifacvest</cite></small>
			</blockquote>
			<a href="./" class="btn btn-danger btn-sm"><i class="fa fa-chevron-left"></i> Voltar ao inicio</a>
			<hr>
			<div class="text-center">
				<i class="fa fa-5x text-gray fa-frown-o"></i>
			</div>
		</div>
	</div>
	<?php
}
?>