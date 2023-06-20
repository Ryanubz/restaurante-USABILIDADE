<?php
$id=$_GET['m'];
echo "<center>";
echo "Você realmente deseja excluir esse funcionário?<br>";
echo "<a href='excluir2.php?m=$id'>Sim </a>";
echo "<a href='visualizar5.php'>Não </a>";
echo "</center>";
?>