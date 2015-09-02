<?php 
require_once './header.php';

if ($config[0]['vestibular_ativo'] == 'SIM') {

	if (!isset($_SESSION["success"]) && !isset($_SESSION["danger"])) {
		?>

		<div class="container">
			<div class="jumbotron">
				<h2><i class="fa fa-graduation-cap"></i> Cadastro no Vestibular</h2>
				<p><small>Preencha o formulário abaixo com seus dados para confirmar sua inscrição no vestibular Unifacvest.</small></p>
				<hr>
				<form class="form-horizontal" action="./functions/envia-vestibular.php" method="post">
					<fieldset>
						<fieldset>
							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<legend><i class="fa fa-user text-gray"></i> Dados Pessoais</legend>
								</div>
							</div>

							<div class="form-group">
								<label for="inputNome" class="col-lg-2 control-label">Nome</label>
								<div class="col-lg-10">
									<input type="text" class="form-control" name="nome_candidato" id="inputNome" placeholder="Digite Seu Nome Completo" required autofocus="">
								</div>
							</div>
							<div class="form-group">
								<label for="inputDataNascimento" class="col-lg-2 control-label">Data de Nascimento</label>
								<div class="col-lg-2">
									<input type="text" class="form-control" name="data_nasc" id="data">
								</div>
								<label for="inputCPF" class="col-lg-1 control-label">CPF</label>
								<div class="col-lg-2">
									<input type="text" class="form-control numero" name="cpf" id="cpf">
								</div>
								<label for="inputRG" class="col-lg-2 control-label">Carteira de Identidade</label>
								<div class="col-lg-3">
									<input type="text" class="form-control" name="rg" id="rg">
								</div>
							</div>

							<div class="form-group">
								<label for="inputRG" class="col-lg-2 control-label">Orgão Expeditor</label>
								<div class="col-lg-3">
									<input type="text" class="form-control numero" name="orgao_expedidor" id="orgao_expedidor">
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-10 col-lg-offset-2">
									<legend><i class="fa fa-home text-gray"></i> Informações de Endereço</legend>
								</div>
							</div>

							<div class="form-group">    
								<label for="inputEmail" class="col-lg-2 control-label">Rua</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="endereco" placeholder="Nome da rua">
								</div>

								<label for="inputNome" class="col-lg-1 control-label">Nº</label>
								<div class="col-lg-2">
									<input type="text" class="form-control numero" id="numero" name="numero" placeholder="Nº">
								</div>
							</div>



							<div class="form-group">
								<label for="inputBairro" class="col-lg-2 control-label">Bairro</label>
								<div class="col-lg-7">
									<input type="text" class="form-control" name="bairro" id="inputBairro" placeholder="Digite o seu Bairro">
								</div>

								<label for="inputCEP" class="col-lg-1 control-label">CEP</label>
								<div class="col-lg-2">
									<input type="text" class="form-control" name="cep" id="cep" placeholder="CEP">
								</div>
							</div>

							<div class="form-group">
								<label for="select" class="col-lg-2 control-label">Estado</label>      
								<script type="text/javascript" src="./functions/libraries/cidades-estados-v0.2.js" charset="utf-8">
								</script>
								<script type="text/javascript">
									window.onload = function() {
										new dgCidadesEstados(document.getElementById('estado'), document.getElementById('cidade'), true);}
									</script>
									<div class="col-lg-5">
										<select class="form-control" id="estado" name="uf">
										</select>
									</div>
									<div class="col-lg-5">
										<select class="form-control" id="cidade" name="cidade">
										</select>

									</div>


								</div>

								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2">
										<legend><i class="fa fa-book text-gray"></i> Opções de Curso</legend>
									</div>
								</div>

								<div class="form-group">
									<label for="select" class="col-lg-2 control-label">1ª Opção</label>
									<div class="col-lg-4">
										<select class="form-control" id="select" name="curso_opcao_1">
											<?php  
											foreach ($cursos as $curso) {
												?>
												<option value="<?= $curso['curso'] ?>"><?= $curso['curso'] ?></option>
												<?php
											}
											?>
										</select>
									</div>
									<label for="select" class="col-lg-2 control-label">2ª Opção</label>
									<div class="col-lg-4">
										<select class="form-control" id="select" name="curso_opcao_2">
											<?php  
											foreach ($cursos as $curso) {
												?>
												<option value="<?= $curso['curso'] ?>"><?= $curso['curso'] ?></option>
												<?php
											}
											?>
										</select>
									</div>
								</div>    


								<div class="form-group">
									<label for="inputFase" class="col-lg-2 control-label">Lingua Estrangeira</label>
									<div class="col-lg-2">
										<select class="form-control" id="select" name="lingua_estrangeira">
											<option>Inglês</option>
											<option>Espanhol</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputFase" class="col-lg-2 control-label">PNE</label>
									<div class="col-lg-2">
										<input type="text" class="form-control numero" id="inputFase" name="pne" placeholder="PNE">
									</div>
								</div>


								<div class="form-group">
									<div class="col-lg-10 col-lg-offset-2">
										<legend><i class="fa fa-envelope-o text-gray"></i> Informações de Contato</legend>
									</div>
								</div>

								<div class="form-group">
									<label for="inputNome" class="col-lg-2 control-label">E-mail</label>
									<div class="col-lg-4">
										<input type="text" class="form-control" name="email" placeholder="Seu e-mail" required>
									</div>
									<label for="inputNome" class="col-lg-1 control-label">Telefone</label>
									<div class="col-lg-2">
										<input type="text" class="form-control" name="telefone" id="telefone" required>
									</div>
									<label for="inputNome" class="col-lg-1 control-label">Celular</label>
									<div class="col-lg-2">
										<input type="text" class="form-control" name="celular" id="celular" required>
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
				<div class="col-md-4 col-md-offset-4">
					<?php
					mostraAlerta("success");
					mostraAlerta("danger");
					$nome = $_GET['nome'];
					$cpf = $_GET['cpf'];
					?>
					
					<div class="space-75"></div>

					<a class="center-block btn btn-primary mb-10" href="./functions/boleto_cef_sigcb.php?nome=<?=$nome?>&cpf=<?=$cpf?>" target="_blank" style="margin-bottom: 8px;">
						<i class="fa fa-barcode"></i> 
						Gerar Boleto
					</a>
					<a class="center-block btn btn-danger mb-10" href="./suficiencia.php"><i class="fa fa-refresh"></i> Regarregar</a>
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
					$("#celular").mask("(99) 9999-9999?9");
					$("#cpf").mask("999.999.999-99");
					$("#cnpj").mask("9999.9999.99/9999");
					$("#rg").mask("9.999.999");
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