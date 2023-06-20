<?php
include ("cnx.php");

$numero=$_POST['numero'];
$email=$_POST['email'];
$senha=$_POST['senha'];





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


