<?php 
require_once 'header.php';
?>

<!-- Código para buscar as cidades e estados -->
<meta http-equiv="Content-Type" content="text/html" charset="ISO-8859-1" />
<script type="text/javascript" src="./functions/libraries/cidades-estados-v0.2.js" charset="ISO-8859-1">
</script>
<script type="text/javascript">
  window.onload = function() {
   new dgCidadesEstados(document.getElementById('estado'), document.getElementById('cidade'), true);}
 </script>


 <title>Cadastro Estagio</title>

 <div class="container">
  <div class="jumbotron">
    <h1>
      <span><i class="fa fa-user"></i></span>
      <form class="form-horizontal" action="./functions/envia-estagio.php" method="post">
        <fieldset>
          <legend>Estagiário</legend>

          <div class="form-group">
            <label for="inputNome" class="col-lg-2 control-label">Nome</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Digite Seu Nome Completo">
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputRG" class="col-lg-2 control-label">Carteira de Identidade</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="RG" id="inputRG" placeholder="Insira seu RG">
            </div>
            <label for="inputDataNascimento" class="col-lg-2 control-label">Data de Nascimento</label>
            <div class="col-lg-3">
              <input type="date" class="form-control" name="DataNascimento" id="inputDataNascimento" placeholder="">
            </div>
            <label for="inputCPF" class="col-lg-1 control-label">CPF</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" name="CPF" id="inputCPF" placeholder="Insira seu CPF">
            </div>
          </div>

          <div class="form-group">
            <label for="inputCarteiraTrabalho" class="col-lg-2 control-label">Carteira Profissional N°</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" name="CarteiraTrabalho" id="inputCarteiraTrabalho" placeholder="">
            </div>
            <label for="inputCarteiraTrabalhoSerie" class="col-lg-1 control-label">Série</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" name="CarteiraTrabalhoSerie" id="inputCarteiraTrabalhoSerie" placeholder="">
            </div>
          </div>

          <h4>Endereço</h4>
          <hr>

          <div class="form-group">    
            <label for="inputEndereco" class="col-lg-2 control-label">Endereço</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" name="Endereco" id="inputEndereco" placeholder="Digite seu endereço completo">
            </div>
            <label for="inputEnderecoNumero" class="col-lg-1 control-label">Nº</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" name="EnderecoNumero" id="inputEnderecoNumero" placeholder="Nº">
            </div>
          </div>

          <div class="form-group">
            <label for="inputBairro" class="col-lg-2 control-label">Bairro</label>
            <div class="col-lg-7">
              <input type="text" class="form-control" name="Bairro" id="inputBairro" placeholder="Digite o seu Bairro">
            </div>

            <label for="inputCEP" class="col-lg-1 control-label">CEP</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="CEP" id="inputCEP" placeholder="CEP">
            </div>
          </div>

          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Logradouro</label>      
            <div class="col-lg-6">
              <select class="form-control" id="estado" name="estado">
              </select>
            </div>
            <div class="col-lg-4">
              <select class="form-control" id="cidade" name="cidade">
              </select>
            </div>
          </div>

          <h4>Curso</h4>
          <hr>

          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Curso</label>
            <div class="col-lg-6">
              <select class="form-control" name="Curso" id="select">
                <option>Administração</option>
                <option>Arquitetura e Urbanismo</option>
                <option>Biologia</option>
                <option>Biomedicina</option>
                <option>Ciência da Computação</option>
                <option>Ciências Contábeis</option>
                <option>Direito</option>
                <option>Educação Física – Licenciatura</option>
                <option>Educação Física – Bacharelado</option>
                <option>Enfermagem</option>
                <option>Engenharia Civil</option>
                <option>Engenharia de Alimentos</option>
                <option>Engenharia de Produção</option>
                <option>Engenharia Elétrica</option>
                <option>Engenharia Mecânica</option>
                <option>Engenharia Química</option>
                <option>Farmácia</option>
                <option>Fisioterapia</option>
                <option>Fotografia</option>
                <option>História</option>
                <option>Jornalismo</option>
                <option>Letras – Espanhol</option>
                <option>Letras – Inglês</option>
                <option>Letras – Português</option>
                <option>Medicina Veterinária</option>
                <option>Matemática</option>
                <option>Odontologia</option>
                <option>Pedagogia</option>
                <option>Psicologia</option>
                <option>Publicidade e Propaganda</option>
                <option>Radiologia</option>
              </select>
            </div>
            <label for="inputMatricula" class="col-lg-1 control-label">Matricula</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" name="Matricula" id="inputMatricula" placeholder="Nº">
            </div>
          </div>    

          <div class="form-group">
            <label for="inputFase" class="col-lg-2 control-label">Fase</label>
            <div class="col-lg-1">
              <input type="text" class="form-control numero"name="Fase" id="inputFase" placeholder="Nº">
            </div>
            <label for="inputSeguro" class="col-lg-1 control-label">Seguro</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" name="Seguro"  id="inputSeguro" placeholder="Nº">
            </div>
          </div>

          <h4>UCE</h4>
          <hr>

          <div class="form-group">
            <label for="inputUCENome" class="col-lg-2 control-label">Razão Social</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="CENome" id="inputUCENome" placeholder="Digite Seu Nome Completo" >
            </div>
          </div>

          <div class="form-group">
            <label for="inputUCECNPJ" class="col-lg-2 control-label">CNPJ</label>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="UCECNPJ" id="inputUCECNPJ" placeholder="CNPJ">
            </div>
            <label for="inputUCEEndereco" class="col-lg-1 control-label">Endereço</label>
            <div class="col-lg-6">
              <input type="text" class="form-control" name="UCEEndereco" id="inputUCEEndereco" placeholder="Insira o Endereco da UCE">
            </div>
          </div>

          <div class="form-group">
            <label for="inputUCEDiretor" class="col-lg-2 control-label">Diretor ou Presidente da Unidade</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="UCEDiretor" id="inputUCEDiretor" placeholder="Insira o Nome Completo" >
            </div>
          </div>

          <div class="form-group">
            <label for="inputUCEConvenio" class="col-lg-2 control-label">Termo de Convênio Nº </label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="UCEConvenio" id="inputUCEConvenio" placeholder="N° Termo de Convênio" >
            </div>
          </div>

          <h4>Orientador</h4>
          <hr>

          <div class="form-group">
            <label for="inputNomeOrientador" class="col-lg-2 control-label">Nome</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="NomeOrientador" id="inputNomeOrientador" placeholder="Digite Seu Nome Completo" >
            </div>
          </div>
          <div class="form-group">
            <label for="inputOrientadorEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-4">
              <input type="text" class="form-control" name="OrientadorEmail" id="inputOrientadorEmail" placeholder="Digite o Nome completo de seu Orientador" >
            </div>
            <label for="inputOrientadorTelefone" class="col-lg-1 control-label">Telefone</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="OrientadorTelefone" id="inputOrientadorTelefone" placeholder="N°" >
            </div>
            <label for="inputOrientadorCelular" class="col-lg-1 control-label">Celular</label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="OrientadorCelular" id="inputOrientadorCelular" placeholder="Digite Seu Nome Completo" >
            </div>
          </div>

          <h4>Supervisor Técnico</h4>
          <hr>

          <div class="form-group">
            <div class="col-lg-5 col-lg-offset-5">
              <button type="reset" class="btn btn-default">Cancelar</button>
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
          </div>
        </fieldset>
      </form>
      

      <?php 
      require_once 'footer.php';
      ?>

      <script type="text/javascript" src="js/mascaras/jquery.validate.min.js"></script>
      <script src="js/mascaras/jquery.maskedinput.js" type="text/javascript"></script>
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

          $("#telefone").mask("(99) 9999-9999?9");
          $("#inputCPF").mask("999.999.999-99");
          $("#inputCEP").mask("99999-999");

          $("#inputRG").mask("99.999.999-9");
          $("#inputCarteiraTrabalho").mask("9999999");
          $("#inputCarteiraTrabalhoSerie").mask("9999-9");
          $("#inputEnderecoNumero").mask("999999");
          $("#inputMatricula").mask("999999");
          $("#inputFase").mask("99");
          $("#inputSeguro").mask("999999");
          $("#inputUCECNPJ").mask("999.999.999/9999-99");
          $("#inputUCEConvenio").mask("99999/9999")
          $("#inputOrientadorCelular").mask("(99) 9999-9999?9");
          $("#inputOrientadorTelefone").mask("(99) 9999-9999?9");


        });
      </script>
      </html>