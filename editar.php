<?php
include ("cnx2.php");
$id=$_GET['m'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>cadastro de alunos</title>
</head>
<body>
    <?php
    $exibir=mysqli_query($conexao,"select * from funcionaros where id='$id'");
    while($sql=mysqli_fetch_array($exibir))
    {
        $nome=$sql['nome'];
        $senha=$sql['senha'];
    }
    ?>
    <form method="get" action="editar2.php">
        <h1>Alterar cadastro</h1>
        id: <?php echo$id; ?>
        <br>
        Nome:<input type="text" name="nome" value="<?php echo$nome; ?>">
        <br>
        Email:<input type="text" name="usuario" value="<?php echo$usuario; ?>">
        <br>
        Senha:<input type="text" name="senha" value="<?php echo$senha; ?>">
        <br>
        <input type="hidden" name="id" value="<?php echo$id; ?>">
        <input type="submit" value="Enviar"><a href="visualizar5.php">Voltar</a>
    </form>
    
</body>
</html>