
<?php
include ("cnx2.php");

$usuario_id=$_GET['id'];
$nome=$_GET['nome'];
$senha=$_GET['senha'];


if(mysqli_query($conexao,"update usuario set funcionario= '$nome', senha='$senha' where idid='$id'"))
{
    echo "Dados alterados com sucesso!<br><a href='visualizar5.php'>Voltar</a>";
}
else
{
 echo mysqli_error($conexao);
}
?>