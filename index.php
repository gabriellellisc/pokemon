<html>
    <head> <h1>teste</h1>
    <body>
        <?php
            include('conexao.php');
            echo ("
                <table border = 1 class = tabela>
                    <tr><td>Código do treinador </td><td>Nome do treinador </td> <td>Idade </td><td> Editar </td> <td> Excluir </td></tr>
                "); 
            $query = mysqli_query($conexao, "SELECT * FROM tbltreinador");
            while($array = mysqli_fetch_array($query)){
                echo("<tr><td>".$array['codTreinador']."</td> <td>".$array['nome']."</td><td>".$array['idade']."</td><td> <a href = editar.php?codTreinador=$array[codTreinador]> Editar </a></td><td> <a href = delete.php?codigo=$array[codTreinador]> X </a></td></tr>");
            }
            echo "</table>";
            echo ("
                <table border = 1 class = tabela>
                    <tr><td>Código do Pokemon </td><td>Nome do Pokemon </td> <td>Tipo </td><td> Poder</td> <td>Treinador </td> <td>Editar </td><td> Excluir </td></tr>
                "); 
            $query = mysqli_query($conexao, "SELECT * FROM pokemon INNER JOIN tbltreinador ON pokemon.treinador = tbltreinador.codTreinador");
            while($array = mysqli_fetch_array($query)){
                echo("<tr><td>".$array['codPokemon']."</td> <td>".$array['nomePokemon']."</td><td>".$array['tipo']."</td><td>".$array['poder']."</td><td>".$array['nome']."</td><td> <a href = editarPokemon.php?codPokemon=$array[codPokemon]> Editar </a></td><td> <a href = deletePokemon.php?codPokemon=$array[codPokemon]> X </a></td></tr>");
            }
            echo "</table>";


        ?>
        <a href = form.php>Adicionar treinadores e pokemons </a>   <a href = luta.php>Ir para as batalhas pokemons </a>
    </body>
</html>