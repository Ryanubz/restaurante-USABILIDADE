<?php
include('verifica_login.php');
?>
 

<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #582f0e;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home"><?php echo $_SESSION['nome'];?></a></li>
  
  <li><a href="logout.php">Sair</a></li>

</ul>























</body>
</html>
</main>
 </body>
 </html>