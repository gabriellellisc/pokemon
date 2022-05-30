<?php
    include('conexao.php');
    $poder = $_REQUEST['poder'];
    $nomePokemon = $_REQUEST['nomePokemon'];
    $codPokemon = $_REQUEST['codPokemon'];
    $tipo = $_REQUEST['tipo'];
    try{
        $query = mysqli_query($conexao, "UPDATE pokemon SET poder = $poder, nomePokemon = '$nomePokemon', tipo = '$tipo' WHERE codPokemon = $codPokemon");
    }catch(\Exception $e){
        echo $e->getMessage(); 
    }
    
    //header("location: index.php");
    ?>