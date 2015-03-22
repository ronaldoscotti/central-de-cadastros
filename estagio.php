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
    <legend>Requisição de Estagio</legend>
    
    <div class="form-group">
    <label for="inputNome" class="col-lg-2 control-label">Nome</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputNome" placeholder="Digite Seu Nome">
      </div>
      </div>

      <div class="form-group">
        <label for="inputSobreNome" class="col-lg-2 control-label">SobreNome</label>
        <div class="col-lg-10">
        <input type="text" class="form-control" id="inputSobreNome" placeholder="Digite Seu Sobrenome">
        </div>
        </div>
       
      <div class="form-group">    
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
        </div>
    </div>

    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Senha</label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Digite sua Senha">
      </div>
    </div>

 
    <div class="form-group">
      <label for="inputSexo" class="col-lg-2 control-label">Sexo</label>
      <div class="col-lg-10">
        <select name="sexo" class="form-control">
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>
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
      <label for="select" class="col-lg-2 control-label">Selects</label>
      <div class="col-lg-10">
        <select class="form-control" id="select">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        <br>
        <select multiple="" class="form-control">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
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
</html>