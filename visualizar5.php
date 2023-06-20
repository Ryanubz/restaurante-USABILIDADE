<?php
include ("cnx2.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Visualizar</title>
</head>
<body>
<center>
	<a href="cadastro2.php">Novo Funcionáro</a>
	<br>
	<form method="get" action="visualizar5.php">
		<input type="text" name="campo">
		<select name="filtro">
			<option value="nome">Nome</option>
			<option value="usuario">Usuario</option>
			<option value="id">Id</option>
			
		</select>
		<input type="submit" value="Procurar">
	</form>
	<table border="0">
		<tr bgcolor="lightgrey">
			<th>id</th>
			<th>Nome</th>
			<th>Usuário</th>
			<th>senha</th>
			<th colspan="2">Funcoes</th>
		</tr>
<?php
if(empty($_GET['campo']))
{
$visualizar=mysqli_query($conexao,"select * from funcionarios");
}

else
{
$campo=$_GET['campo'];
$filtro=$_GET['filtro'];
$visualizar=mysqli_query($conexao,"select * from funcionarios where $filtro like '%$campo%'");
}

$cont=0;
	
	if(mysqli_num_rows($visualizar)==0)
	{
		echo"<tr><th colspan='5'>Nenhum registro encontrado</th></tr>";
	}
	else
	{

	while($sql=mysqli_fetch_array($visualizar))
	{
	
		$id=$sql['id'];
		$senha=$sql['senha'];
		$usuario=$sql['usuario'];
		$nome=$sql['nome'];
		
		

		if($cont==0)
		{
			$cor="white";
			$cont++;
		}
		else
		{
			$cor="lightblue";
			$cont--;
		}


		echo"
		<tr bgcolor='$cor'>
		<td>
		$id
		</td>

		<td>
		<a href='perfil.php?nome=$nome'>$nome</a>
		</td>

		<td>
		$usuario
		</td>

		<td>
		$senha
		</td>

		<th>
		<a href='editar.php?m=$id'><img src='img/edit.png' height='20'></a>
		</th>

		<th>
		<a href='excluir.php?m=$id'><img src='img/delete.png' height='20'></a>
		</th>
		</tr>
		";
	}
}

?>
	</table>
	<a href="gerente.html">Voltar</a>
</center>
</body>
</html>