<?php
    include('conexao.php');
    try{
        mysqli_query($conexao, "DELETE FROM pokemon WHERE Treinador = $_REQUEST[codigo]");
        mysqli_query($conexao, "DELETE FROM tbltreinador WHERE codTreinador = $_REQUEST[codigo]");
    }catch(\Exception $e){
        echo $e->getMessage();
    }
    
?>