<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<div class="container">
    <div class="col-md-4 col-md-offset-4">
        <form method="post" class="form-horizontal" action="register.php" name="registerform">       
            <h3 class="form-signin-heading">Bem vindo!</h3>
            <hr class="colorgraph"><br>

            <label for="login_input_username">Nome de usuário <small>(apenas letras e números)</small></label>
            <input id="login_input_username" class="login_input form-control" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required  autofocus=""/>

            <!-- the email input field uses a HTML5 email type check -->
            <label for="login_input_email">E-mail de usuário</label>
            <input id="login_input_email" class="login_input form-control" type="email" name="user_email" required />

            <label for="login_input_password_new">Senha <small>(min. 6 caracteres)</small></label>
            <input id="login_input_password_new" class="login_input form-control" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

            <label for="login_input_password_repeat">Confirme a senha</label>
            <input id="login_input_password_repeat" class="login_input form-control" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

            <div class="text-center">
                <a href="index.php" class="btn btn-danger">Voltar</a>
                <button type="submit" name="register" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
