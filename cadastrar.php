<?php
session_start();
include("cnx2.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$sql = "select count(*) as total from funcionarios where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro2.php');
	exit;
}

$sql = "INSERT INTO funcionarios (nome, usuario, senha, ) VALUES ('$nome', '$usuario', '$senha')";

if($conexao->query($sql) === TRUE) {
		$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro2.php ');
exit;

?>