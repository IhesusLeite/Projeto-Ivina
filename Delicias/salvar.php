<?php
    include_once 'conexao.php';
   $cliente = $_POST['nomecliente'];
   $pedido = $_POST['nomepedido'];
   $sabor = $_POST['sabor'];
   $data = $_POST['data'];
   $hora = $_POST['hora'];
   $quantidade = $_POST['quant'];
   $bairro = $_POST['nomebairro'];
   $rua = $_POST['nomerua'];
   $numero = $_POST['numero'];
   $telefone = $_POST['telefone'];
   $opcao = $_POST['opcao'];
   
   $sql = "INSERT INTO tbPedidos(CLIENTE, PEDIDO, SABOR, DATA, QUANTIDADE ,LOCALIZACAO, OPCAO, HORARIO,TELEFONE) VALUES ( '$cliente',$pedido,$sabor,'$data',$quantidade,'$bairro',$opcao,'$hora', '$telefone')";
   $resultado = mysqli_query($conn, $sql);

   if($resultado){
       echo "<h1>Deu certo</h1>";
   }else{
    echo "<h1>Deu errado</h1>";
   }
?>