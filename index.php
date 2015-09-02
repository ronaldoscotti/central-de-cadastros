<?php 
require_once 'header.php';
?>

<div class="container">

	<ul class="rslides">
		<li><a href="./vestibular.php" title="Vestibular"><img src="./assets/img/vestibular.jpg"/></a></li>
		<li><a href="./suficiencia.php" title="Suficiência"><img src="./assets/img/suficiencia.jpg"/></a></li>
		<li><a href="./estagio.php" title="Estágios"><img src="./assets/img/estagio.jpg"/></a></li>
	</ul>

	<div class="col-md-4">
		<h3>Estágios</h3>
		<p>
			Este módulo permite que você preencha seus dados, e obtenha o <b>Termo de compromisso</b> 
			já preenchido e pronto para impressão. Após isso, basta recolher as assinaturas
			e entrega-lo na central do aluno.
		</p>
		<a href="./estagio.php" class="btn btn-danger">Ver mais <i class="fa fa-chevron-right"></i></a>
	</div>
	<div class="col-md-4">
		<h3>Provas de Suficiência</h3>
		<p>
			Aqui você pode fazer seu cadastro para as provas de suficiência, caso tenham editais abertos.
			Assim, você prova seu conhecimento nas matérias de informática ou inglês, e não precisa fazê-las
			durante a graduação!
		</p>
		<a href="./suficiencia.php" class="btn btn-danger">Ver mais <i class="fa fa-chevron-right"></i></a>
	</div>
	<div class="col-md-4">
		<h3>Vestibular</h3>
		<p>
			Neste módulo é feito o cadastros de novos alunos que querem ingressar na Unifacvest, reservando
			suas vagas no vestibular. Foi feito para ser o menos burocrático possível.
		</p>
		<a href="./vestibular.php" class="btn btn-danger">Ver mais <i class="fa fa-chevron-right"></i></a>
	</div>
</div>

<?php 
require_once 'footer.php';
?>