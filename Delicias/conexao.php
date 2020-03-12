<?php
    $servidor = "db4free.net";
    $usuario = "iguinmala";
    $senha = "jp123456";
    $dbname = "doces_ivina";
    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        echo "Conexao realizada com sucesso";
    }  
?>