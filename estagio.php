<?php 
require_once 'header.php';
?>

<div class="container">
  <div class="jumbotron">
    <h2><i class="fa fa-file-pdf-o"></i> Solicitação de Documentos de Estágio</h2>
    <p><small>Preencha o formulário abaixo com seus dados para confirmar fazer download de seus documentos.</small></p>
    <hr>
    <form class="form-horizontal" action="./functions/gera-pdf.php" method="post">
      <fieldset>
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <legend><i class="fa fa-user text-gray"></i> Informações Pessoais</legend>
          </div>
        </div>

        <div class="form-group">
          <label for="inputNome" class="col-lg-2 control-label">Nome</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="Nome" id="inputNome" placeholder="Digite Seu Nome Completo" required autofocus="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputRG" class="col-lg-2 control-label">Carteira de Identidade</label>
          <div class="col-lg-3">
            <input type="text" class="form-control" name="RG" id="rg">
          </div>
          <label for="inputDataNascimento" class="col-lg-2 control-label">Data de Nascimento</label>
          <div class="col-lg-2">
            <input type="text" class="form-control" name="DataNascimento" id="data">
          </div>
          <label for="inputCPF" class="col-lg-1 control-label">CPF</label>
          <div class="col-lg-2">
            <input type="text" class="form-control numero" name="CPF" id="cpf">
          </div>
        </div>

        <div class="form-group">
          <label for="inputRG" class="col-lg-2 control-label">Carteira Profissional Nº</label>
          <div class="col-lg-3">
            <input type="text" class="form-control numero" name="PIS" id="pis" placeholder="Digite seu PIS">
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <legend><i class="fa fa-home text-gray"></i> Informações de Endereço</legend>
          </div>
        </div>

        <div class="form-group">    
          <label for="inputEmail" class="col-lg-2 control-label">Endereço</label>
          <div class="col-lg-7">
            <input type="text" class="form-control" placeholder="Sua rua" name="Endereco">
          </div>

          <label for="inputNome" class="col-lg-1 control-label">Nº</label>
          <div class="col-lg-2">
            <input type="text" class="form-control numero" placeholder="Nº" name="EnderecoNumero">
          </div>
        </div>



        <div class="form-group">
          <label for="inputBairro" class="col-lg-2 control-label">Bairro</label>
          <div class="col-lg-7">
            <input type="text" class="form-control" name="Bairro" placeholder="Digite o seu Bairro">
          </div>

          <label for="inputCEP" class="col-lg-1 control-label">CEP</label>
          <div class="col-lg-2">
            <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
          </div>
        </div>



        <div class="form-group">
          <label for="select" class="col-lg-2 control-label">Estado</label>      
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js">
          </script>
          <script type="text/javascript">
            window.onload = function() {
             new dgCidadesEstados(document.getElementById('estado'), document.getElementById('cidade'), true);}
           </script>
           <div class="col-lg-6">
            <select class="form-control" id="estado" name="estado">
            </select>
          </div>
          <div class="col-lg-4">
            <select class="form-control" id="cidade" name="cidade">
            </select>

          </div>


        </div>

        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <legend><i class="fa fa-book text-gray"></i> Dados de Matricula</legend>
          </div>
        </div>


        <div class="form-group">
          <label for="select" class="col-lg-2 control-label">Curso</label>
          <div class="col-lg-6">
            <select class="form-control" id="select" name="Curso">
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
              <input type="text" class="form-control numero" name="Matricula" id="matricula">
            </div>
          </div>    

          <div class="form-group">
            <label for="inputFase" class="col-lg-2 control-label">Fase</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" id="fase" name="Fase">
            </div>
            <label for="inputFase" class="col-lg-1 control-label">Seguro Nº</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" name="Seguro">
            </div>
          </div>

          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <legend><i class="fa fa-institution text-gray"></i> Dados da UCE</legend>
            </div>
          </div>

          <div class="form-group">
            <label for="inputNome" class="col-lg-2 control-label">Razão Social</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="CENome" placeholder="Razão social da empresa" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputNome" class="col-lg-2 control-label">CNPJ</label>
            <div class="col-lg-3">
              <input type="text" class="form-control" name="UCECNPJ" id="cnpj" required>
            </div>
            <label for="inputEmail" class="col-lg-1 control-label">Endereço</label>
            <div class="col-lg-6">
              <input type="text" class="form-control" name="UCEEndereco" placeholder="Endereço da empresa">
            </div>
          </div>

          <div class="form-group">
            <label for="inputNome" class="col-lg-2 control-label">Diretor ou Presidente da Unidade</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="UCEDiretor" placeholder="Nome do responsável pela empresa" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputNome" class="col-lg-2 control-label">Termo de Convênio Nº </label>
            <div class="col-lg-2">
              <input type="text" class="form-control" name="UCEConvenio" id="termo" placeholder="Termo de Convênio " required>
            </div>
          </div>
<!--
        <div class="form-group">
          <div class="col-lg-10 col-lg-offset-2">
            <legend><i class="fa fa-male text-gray"></i> Supervisor Técnico</legend>
          </div>
        </div>

        <div class="form-group">
          <label for="inputNome" class="col-lg-2 control-label">Nome</label>
          <div class="col-lg-10">
            <input type="text" class="form-control" name="Nome" placeholder="Nome do supervisor" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputNome" class="col-lg-2 control-label">E-mail</label>
          <div class="col-lg-4">
            <input type="email" class="form-control" name="Nome" id="inputNome" required>
          </div>
          <label for="inputNome" class="col-lg-1 control-label">Telefone</label>
          <div class="col-lg-2">
            <input type="text" class="form-control" name="Nome" id="telefone" required>
          </div>
          <label for="inputNome" class="col-lg-1 control-label">Celular</label>
          <div class="col-lg-2">
          <input type="text" class="form-control" name="Nome" id="telefone" required>
          </div>
        </div>
      -->

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

<script src="./assets/js/mascaras/jquery.validate.min.js"></script>
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
    $("#cnpj").mask("9999.9999.99/9999");
    $("#rg").mask("9.999.999");
    $("#cep").mask("99999-999");
    $("#matricula").mask("99999");
    $("#fase").mask("9?9");
  });
</script>
</html>