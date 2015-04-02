<?php

require_once '../helper.php';

// abaixo versão para localhost
//$conexao = mysqli_connect('localhost', 'root', 'usbw', 'origamiyuri', 3307);

// abaixo versão para servidor externo
$conexao = mysqli_connect('mysql.weblink.com.br', 'usuario', 'senha', 'nome_do_banco');