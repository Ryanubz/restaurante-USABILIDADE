<?php
session_start();

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
 


if ($usuario=='admin'){
	
header('Location: gerente.html');
}

else{

header('Location: logingerente.php?erro=1');

}



?>
