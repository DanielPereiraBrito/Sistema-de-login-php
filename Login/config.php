<?php

define('HOST', 'db');
define('USUARIO', 'root');
define('SENHA', '190jo2gu@');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

?>