<?php
include ("cnx.php");

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$celular=$_POST['celular'];
$cpf=$_POST['cpf'];




if($inserir=mysqli_query($cnx,"insert into funcionarios (nome, email, senha, celular, cpf) values('$nome','$email','$senha', '$celular', '$cpf')"))
{
	echo "Dados inseridos com sucesso";
	echo "<br><a href='visualizar5.php'>Visualizar Funcionários</a>";
	echo "<br><a href='registro.php'>Resgistrar Outro Funcionário</a>";
}	
else
{
	echo "não foi possivel cadastrar";
}





?>


