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

    
    $result = "INSERT INTO delicias(nome, tempo,quant) VALUES ('$nome','$tempo','$quantidade')";
    $resultado = mysqli_query($conn, $result);
    
    if(mysqli_affected_rows($conn) != 0){
                echo "
                    <script type="text/javascript">
                        alert("Usuario cadastrado com Sucesso.");
                    </script>
                ";    
            }else{
                echo "
                    <script type="text/javascript">
                        alert("O Usuario não foi cadastrado com Sucesso.");
                    </script>
                ";    
            }
?>