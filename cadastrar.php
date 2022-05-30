<?php
    include('conexao.php');

// Setando váriaveis treinador 1
    $nomeTreinador1 = $_REQUEST["nomeTreinador"];
    $idade1 = $_REQUEST["idade"];

    for($i = 1; $i < 4; $i++){
        $nomePokemon1[] = $_REQUEST["nomePokemon1"][$i];
        $poder1[] = $_REQUEST["poder1"][$i];
        $tipo1[] = $_REQUEST["tipo1"][$i];
    }

// Setando váriaveis treinador 2
    $nomeTreinador2 = $_REQUEST["nomeTreinador2"];
    $idade2 = $_REQUEST["idade2"];
   for($i = 1; $i < 4; $i++){
        $nomePokemon2[] = $_REQUEST["nomePokemon2"][$i];
        $poder2[] = $_REQUEST["poder2"][$i];
        $tipo2[] = $_REQUEST["tipo2"][$i];
    }


    try {
        mysqli_query($conexao, "INSERT INTO tbltreinador(idade, nome) VALUES ('$idade1','$nomeTreinador1')");
        $idTreinador = mysqli_insert_id($conexao);
        mysqli_query($conexao, "INSERT INTO tbltreinador(idade, nome) VALUES ('$idade2','$nomeTreinador2')");
        $idTreinador2 = mysqli_insert_id($conexao);

    }catch(\Exception $e){
        echo $e->getMessage(); 
    }

    $query = "INSERT INTO pokemon(nomePokemon, tipo, poder, treinador) VALUES ";
    for($i = 0; $i < 3; $i++){
        $query = $query."('".$nomePokemon1[$i]."','" .$tipo1[$i]."'," .$poder1[$i]."," .$idTreinador."),";
       
    }
    for($i = 0; $i < 3; $i++){
        $query = $query."('".$nomePokemon2[$i]."','" .$tipo2[$i]."'," .$poder2[$i].", " .$idTreinador2. "),";
    }
    $query = substr($query, 0, -1);

    try {
        mysqli_query($conexao, $query);
    }catch(\Exception $e){
        echo $e->getMessage(); 
    }
    header("location: index.php");
    

?>