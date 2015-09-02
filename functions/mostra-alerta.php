<?php
session_start();

function mostraAlerta($tipo) {
    if (isset($_SESSION[$tipo])) {
        ?>
        <div class="alert alert-<?= $tipo ?> alert-dismissable fade in">
            <button type="button" class="close" data-dismiss="alert" 
                    aria-hidden="true">
                &times;
            </button>
            <p class="text-center"><?= $_SESSION[$tipo] ?></p>
        </div>
        <?php
        unset($_SESSION[$tipo]);
    }
}
