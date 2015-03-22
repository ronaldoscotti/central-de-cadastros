<!DOCTYPE html>
<html>
<head>
  <title>Cadastros Unifacvest</title>
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <meta charset=utf-8>
  <meta name=description content="">
  <meta name=viewport content="width=device-width, initial-scale=1">
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
          <a class="navbar-brand" href="index.php">Inicio</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Estágios <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Provas de Suficiência</a></li>
            <li><a href="#">Vestibular</a></li>
          </ul>
        </div>
      </div>

    </div>
  </nav>

  <div class="container">
    <div class="jumbotron">
      <h1>
        <span><i class="fa fa-user"></i></span>
        <form class="form-horizontal">
          <fieldset>
            <legend>Estagiário</legend>

            <div class="form-group">
              <label for="inputNome" class="col-lg-2 control-label">Nome</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputNome" placeholder="Digite Seu Nome Completo">
              </div>
            </div>

            <div class="form-group">
              <label for="inputCarteiraDeIdentidade" class="col-lg-2 control-label">Carteira de Identidade</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputCarteiraDeIdentidade" placeholder="Uasr Mascara">
              </div>
            </div>

            <div class="form-group">
              <label for="inputDataNascimento" class="col-lg-2 control-label">Data de Nascimento</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputDataNascimento" placeholder="USAR MASCARA">
              </div>
            </div>

            <div class="form-group">
              <label for="inputCPF" class="col-lg-2 control-label">CPF</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputCPF" placeholder="USAR MASCARA">
              </div>
            </div>

            <div class="form-group">
              <label for="inputNome" class="col-lg-2 control-label">Carteira Profissional Nº</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputNome" placeholder="USAR MASCARA">
              </div>
            </div>



            <div class="form-group">    
              <label for="inputEmail" class="col-lg-2 control-label">Endereço</label>
              <div class="col-lg-5">
                <input type="text" class="form-control" id="inputEmail" placeholder="Logradouro, CEP">
              </div>
            </div>

            <div class="form-group">
              <label for="inputNome" class="col-lg-2 control-label">Nº</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" id="inputNumero" placeholder="Nº">
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
                <input type="text" class="form-control" id="inputCEP" placeholder="CEP">
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
                <br>
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
                <input type="text" class="form-control" id="inputNome" placeholder="Nº">
              </div>
            </div>

            <div class="form-group">
              <label for="inputFase" class="col-lg-2 control-label">Fase</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" id="inputFase" placeholder="Nº">
              </div>
            </div>

            <div class="form-group">
              <label for="inputFase" class="col-lg-2 control-label">Seguro Nº</label>
              <div class="col-lg-2">
                <input type="text" class="form-control" id="inputFase" placeholder="Nº">
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
      </body>
      <script src="js/jquery-2.1.3.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="http://origamiyuri.com/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
      <script src="http://origamiyuri.com/assets/painel/layout/scripts/jquery.maskedinput.js" type="text/javascript"></script>
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