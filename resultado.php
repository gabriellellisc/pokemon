<?php
    $codTreinador = $_REQUEST['batalhaTreinador'];
    $codTreinador2 = $_REQUEST['batalhaTreinador2'];

    include('conexao.php');
    $query = mysqli_query($conexao, "SELECT * FROM pokemon INNER JOIN tbltreinador ON pokemon.treinador = tbltreinador.codTreinador WHERE treinador = $codTreinador");
    $query2 = mysqli_query($conexao, "SELECT * FROM pokemon INNER JOIN tbltreinador ON pokemon.treinador = tbltreinador.codTreinador WHERE treinador = $codTreinador2");

    while($array = mysqli_fetch_assoc($query))
    {
        echo("Pokemon: ".$array['nomePokemon']."<br> Código: " .$array['codPokemon']. " <br>Poder: " .$array['poder']. "<br><br><br>");
        $poder1[] = $array['poder'];
        $treinador1 = $array['nome'];
    }
    while($array = mysqli_fetch_assoc($query2))
    {

        echo("Pokemon: ".$array['nomePokemon']."<br> Código: " .$array['codPokemon']."<br> Poder: " .$array['poder']."<br><br><br>");
        $poder2[] = $array['poder'];
        $treinador2 = $array['nome'];
    }
    $vitoria = 0;
    $vitoria2 = 0;
    for($i = 0; $i < $query->num_rows; $i++)
    {
        for($j = 0; $j < $query2->num_rows; $j++)
        {
            if($poder1[$i] > $poder2[$j])
            {
                $vitoria += 1;
            }else if($poder1[$i] < $poder2[$j])
            {
                $vitoria2 = $vitoria2 +1;
            }
        }
    }
    if($vitoria > $vitoria2)
    {
        echo("Ganhador é: " .$treinador1);
    }else{
        echo("Ganhador é: " .$treinador2);
    }
    echo("<br><a href = index.php> Voltar para as tabelas</a>");
    echo("<br><a href = luta.php> Voltar para a luta</a>");
?>