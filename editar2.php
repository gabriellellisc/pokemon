<?php
    include('conexao.php');
    print_r($_REQUEST);
    $idade = $_REQUEST['idade'];
    $nome = $_REQUEST['nomeTreinador'];
    $codTreinador = $_REQUEST['codTreinador'];
    try{
        $query = mysqli_query($conexao, "UPDATE tbltreinador SET idade = $idade, nome = '$nome' WHERE codTreinador = $codTreinador");
    }catch(\Exception $e){
        echo $e->getMessage(); 
    }
    
    header("location: index.php");
    ?>