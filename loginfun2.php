<?php
session_start();
include('cnx2.php');
 
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
   header('Location: index2.php');
   exit();
}
 
$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
 
$query = "select nome from funcionarios where usuario = '{$usuario}' and senha = ('{$senha}')";
 
$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

 
if($row == 1) {
   $usuario_bd = mysqli_fetch_assoc($result);
   $_SESSION['nome'] = $usuario_bd['nome'];
   header('Location: mesas.php');
   exit();
} else {
   $_SESSION['nao_autenticado'] = true;
   header('Location: index2.php?erro=1');
   exit();
}