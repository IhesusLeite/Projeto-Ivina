<?php
    include_once("conexao.php");
    $nome = $_POST['nome'];
    $data = $_POST['tempo'];
    $quantidade = $_POST['quant'];
    
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