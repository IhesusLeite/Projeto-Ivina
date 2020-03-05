<?php
    include_once("conexao.php");
    
    $cliente = $_POST['nomecliente'];
    $pedido = $_POST['nomepedidido'];
    $sabor = $_POST['sabor'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $quantidade = $_POST['quant'];
    $bairro = $_POST['nomebairro'];
    $rua = $_POST['nomerua'];
    $numero = $_POST['numero'];
    $telefone = $_POST['telefone'];
    $opcao = $_POST['opcao'];

    $result = "INSERT INTO `tbpedidos`(`CLIENTE`, `PEDIDO`, `SABOR`, `DATA`, `QUANTIDADE`, `LOCALIZACAO`, `OPCAO`, `HORARIO`)VALUES ('$cliente',$pedido,$sabor,'$data',$quantidade,'$bairro',$opcao,'$hora');
    $resultado = mysqli_query($conn, $result);
    
    if(mysqli_affected_rows($conn) != 0){
        header('location:index.html')  ; 
            }else{
                header('location:index.html')  ; 
            }
?>