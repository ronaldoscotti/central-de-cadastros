<?php 
require_once 'header.php';
?>

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
              <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Digite Seu Nome Completo" required>
            </div>
          </div>

          <div class="form-group">
            <label for="inputCarteiraDeIdentidade" class="col-lg-2 control-label">Carteira de Identidade</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="rg" id="inputCarteiraDeIdentidade" placeholder="Uasr Mascara">
            </div>
          </div>

          <div class="form-group">
            <label for="inputDataNascimento" class="col-lg-2 control-label">Data de Nascimento</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="data_nasc" id="inputDataNascimento data" placeholder="USAR MASCARA">
            </div>
          </div>

          <div class="form-group">
            <label for="inputCPF" class="col-lg-2 control-label">CPF</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" name="cpf" id="inputCPF cpf" placeholder="USAR MASCARA">
            </div>
          </div>

          <div class="form-group">
            <label for="inputNome" class="col-lg-2 control-label">Carteira Profissional Nº</label>
            <div class="col-lg-10">
              <input type="text" class="form-control numero" name="" id="inputNome" placeholder="USAR MASCARA">
            </div>
          </div>

          <h4>Endereço</h4>
          <hr>

          <div class="form-group">    
            <label for="inputEmail" class="col-lg-2 control-label">Endereço</label>
            <div class="col-lg-5">
              <input type="text" class="form-control" id="inputEmail" placeholder="Logradouro, CEP">
            </div>

            <label for="inputNome" class="col-lg-1 control-label">Nº</label>
            <div class="col-lg-3">
              <input type="text" class="form-control numero" id="inputNumero" placeholder="Nº">
            </div>
          </div>



          <div class="form-group">
            <label for="inputBairro" class="col-lg-2 control-label">Bairro</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputBairro" placeholder="Digite o seu Bairro">
            </div>
          </div>

          <div class="form-group">
            <label for="inputCidade" class="col-lg-2 control-label">Cidade</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputNome" placeholder="Digite Sua Cidade">
            </div>
          </div>

          <div class="form-group">
            <label for="inputCEP" class="col-lg-2 control-label">CEP</label>
            <div class="col-lg-10">
              <input type="text" class="form-control" id="inputCEP cep" placeholder="CEP">
            </div>
          </div>

          <div class="form-group">
            <label for="select" class="col-lg-2 control-label">Curso</label>
            <div class="col-lg-5">
              <select class="form-control" id="select">
                <option>Administração</option>
                <option>Arquitetura e Urbanismo</option>
                <option>Biologia</option>
                <option>Biomedicina</option>
                <option>Ciência da Computação</option>
                <option>Ciências Contábeis</option>
                <option>Direito</option>
                <option>Educação Física</option>
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
                <option>Letras</option>
                <option>Medicina Veterinária</option>
                <option>Matemática</option>
                <option>Odontologia</option>
                <option>Pedagogia</option>
                <option>Psicologia</option>
                <option>Publicidade e Propaganda</option>
                <option>Radiologia</option>
              </select>
            </div>

            <div class="col-md-5">
              <select multiple="" class="form-control">
                <option>Bacharelado</option>
                <option>Tecnólogo</option>
                <option>Engenharia</option>
                <option>Licenciatura</option>
              </select>
            </div>
          </div>


          <div class="form-group">
            <label for="inputNome" class="col-lg-2 control-label">Matricula</label>
            <div class="col-lg-10">
              <input type="text" class="form-control numero" id="inputNome" placeholder="Nº">
            </div>
          </div>

          <div class="form-group">
            <label for="inputFase" class="col-lg-2 control-label">Fase</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" id="inputFase" placeholder="Nº">
            </div>
          </div>

          <div class="form-group">
            <label for="inputFase" class="col-lg-2 control-label">Seguro Nº</label>
            <div class="col-lg-2">
              <input type="text" class="form-control numero" id="inputFase" placeholder="Nº">
            </div>
          </div>

          <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Textarea</label>
            <div class="col-lg-10">
              <textarea class="form-control" rows="3" id="textArea"></textarea>
              <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
          </div>


          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
              <button type="reset" class="btn btn-default">Cancel</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </fieldset>
      </form>

      <?php 
      require_once 'footer.php';
      ?>

      <script type="text/javascript" src="js/mascaras/jquery.validate.min.js"></script>
      <script src="js/mascaras/jquery.maskedinput.js" type="text/javascript"></script>
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
        });
      </script>

      </html>