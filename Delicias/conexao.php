<?php
    $servidor = "db4free.net";
    $usuario = "igaomen";
    $senha = "ivina123";
    $dbname = "delicia";
    
    //Criar a conexao
    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{
        echo "Conexao realizada com sucesso";
    }  
?>