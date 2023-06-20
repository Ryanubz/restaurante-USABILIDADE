<?php
include("cnx2.php");

$usuario_id=$_GET['m'];

if($excluir=mysqli_query($conexao,"delete from usuario where usuario_id= '$usuario_id'"))
{
	echo "Funcionário excluido com sucesso!";
}
else
{
	echo"Não foi possível excluir o funcionarios!";
}
echo "<br><a href='visualizar5.php'>Voltar</a>";
?>
