<?php
session_start();
include_once 'config.php';

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "SELECT usuario_id, usuario FROM usuario WHERE usuario = '{$usuario}' AND senha = MD5('{$senha}')";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row != 0){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: index.php');
    
    exit();
}