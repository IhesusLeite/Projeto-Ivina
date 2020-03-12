<?php 
	include_once 'conexao.php';
	$cod = $_GET['id'];
	$sql = "delete from tbpedidos where ID =$cod";
	$r = mysqli_query($con , $sql);
	if ($r) {
		header('location:Listar.php');
	}
 ?>