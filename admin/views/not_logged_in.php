<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
  if ($login->errors) {
    foreach ($login->errors as $error) {
      echo $error;
    }
  }
  if ($login->messages) {
    foreach ($login->messages as $message) {
      echo $message;
    }
  }
}
?>

<div class = "container">
  <div class="wrapper">
    <form method="post" action="index.php" name="loginform" class="form-signin">       
      <h3 class="form-signin-heading">Bem vindo!</h3>
      <hr class="colorgraph"><br>

      <input type="text" class="login_input form-control" name="user_name" id="login_input_username" placeholder="Usuário" required="" autofocus="" />
      <input type="password" class="login_input form-control" name="user_password" id="login_input_password" placeholder="Password" required=""/>            

      <button class="btn btn-lg btn-primary btn-block"  name="login" value="Login" type="Submit"><i class="fa fa-chevron-right"></i> Login</button>
      <div class="text-center mt-15">
        <a href="../" title="Inicio" class="text-primary">Voltar ao site</a>           
      </div>
    </form>         
  </div>
</div>