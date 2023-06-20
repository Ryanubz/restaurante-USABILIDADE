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
	<a href="cadastromesa.php">Nova Mesa</a>
	<br>
	<form method="get" action="visualizarmesas.php">
		<input type="text" name="campo">
		<select name="filtro">
			<option value="nome">Número</option>
			<option value="espec">Especificação</option>
			<option value="lugares">Lugares</option>
			
		</select>
		<input type="submit" value="Procurar">
	</form>
	<table border="0">
		<tr bgcolor="lightgrey">
			<th>Número</th>
			<th>Especificação</th>
			<th>Lugares</th>
			
			<th colspan="2">Funcoes</th>
		</tr>
<?php
if(empty($_GET['campo']))
{
$visualizar=mysqli_query($conexao,"select * from mesa");
}

else
{
$campo=$_GET['campo'];
$filtro=$_GET['filtro'];
$visualizar=mysqli_query($conexao,"select * from mesa where $filtro like '%$campo%'");
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
	
		$numero=$sql['numero'];
		$espec=$sql['espec'];
		$lugares=$sql['lugares'];
		
		
		

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
		

		<td>
		$numero
		</td>

		<td>
		$espec
		</td>

		<td>
		$lugares
		</td>

		<th>
		<a href='editar.php?m=$numero'><img src='img/edit.png' height='20'></a>
		</th>

		<th>
		<a href='excluir.php?m=$numero'><img src='img/delete.png' height='20'></a>
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