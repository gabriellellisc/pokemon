<?php
    header("location: index.php");
    include('conexao.php');
    try{
        mysqli_query($conexao, "DELETE FROM pokemon WHERE codPokemon = $_REQUEST[codPokemon]");
    }catch(\Exception $e){
        echo $e->getMessage();
    }
    
?>