<?php 
session_start();




if($_SERVER["REQUEST_METHOD"]=='POST')
{
	
	if(isset($_POST['Add_To_Cart']))
	{
		if(isset($_SESSION['cart']))
		{
			$myitems=array_column($_SESSION['cart'], 'Nome_do_Item');
			if(in_array($_POST['Nome_do_Item'],$myitems)) 
			{
				echo "<script>
				alert('O item já foi adicionado');
				window.location.href='index.php';
				</script>";
			}
			else{
			$count=count($_SESSION['cart']);
			$_SESSION['cart'][$count]=array('Nome_do_Item'=>$_POST['Nome_do_Item'],'Price'=>$_POST['Price'],'Quantity'=>1);
			echo "<script>
				alert('O item foi adicionado');
				window.location.href='index.php';
				</script>";
			}
		}
		else
		{
			$_SESSION['cart'][0]=array('Nome_do_Item'=>$_POST['Nome_do_Item'],'Price'=>$_POST['Price'],'Quantity'=>1);
			echo "<script>
				alert('O item foi adicionado');
				window.location.href='index.php';
				</script>";


		}
	}
	if(isset($_POST['Remove_Item']))
	{
		foreach($_SESSION['cart'] as $key => $value)
		{
			if($value['Nome_do_Item']==$_POST['Nome_do_Item'])
			{
				unset($_SESSION['cart'][$key]);
				$_SESSION['cart']=array_values($_SESSION['cart']);
				echo "<script>
				alert('Item Removido');
				window.location.href='carrinho.php';
				</script>";
			}
			
		}

	}



}






?>