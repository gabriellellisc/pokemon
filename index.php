<html>
    <head>
        <link rel = "stylesheet" href="css/style.css">
        <link rel = "stylesheet" href="css/menu.css">
        <script type="text/javascript" src="main.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
        
        
    </head>
    <body>
        <div class = "main">
            <div id = "menu"></div>
            <div class = "conteudo">
                <div id = "titulo">Dashboard Pokemon</div>
                <div class  = "dados">
                    <?php
                        include('conexao.php');
                        
                        echo ('
                                <div class = "table-dados treinador">
                                    <h2> Treinadores: </h2>
                                    <table>
                                        <tr>
                                            <td> Código do treinador </td>
                                            <td> Nome do treinador </td>
                                            <td>Idade </td>
                                            <td> Editar </td>
                                            <td> Excluir </td>
                                        </tr> 
                                    
                        '); 

                        $query = mysqli_query($conexao, "SELECT * FROM tbltreinador");

                        while ($array = mysqli_fetch_array($query)) {
                            echo("
                                    <tr>
                                        <td>".$array['codTreinador']."</td> 
                                        <td>".$array['nome']."</td>
                                        <td>".$array['idade']."</td>
                                        <td> <a href = editar.php?codTreinador=$array[codTreinador]> Editar </a></td>
                                        <td> <a href = delete.php?codigo=$array[codTreinador]> X </a></td>
                                    </tr>"
                            );
                        }
                        echo('</table>');

                        echo ('  </div>'
                        );
                        echo ('
                                <div class = "table-dados pokemon">
                                    <h2> Pokemons: </h2>
                                    <table>
                                    <tr>
                                        <td>Código do Pokemon </td>
                                        <td>Nome do Pokemon </td>
                                        <td>Tipo </td>
                                        <td> Poder</td>
                                        <td>Treinador </td>
                                        <td>Editar </td>
                                        <td> Excluir </td>
                                    </tr>         
                        '); 

                        $query = mysqli_query($conexao, "SELECT * FROM pokemon INNER JOIN tbltreinador ON pokemon.treinador = tbltreinador.codTreinador");

                            while($array = mysqli_fetch_array($query)){
                                echo("<tr>
                                        <td>".$array['codPokemon']."</td>
                                        <td>".$array['nomePokemon']."</td>
                                        <td>".$array['tipo']."</td>
                                        <td>".$array['poder']."</td>
                                        <td>".$array['nome']."</td>
                                        <td> <a href = editarPokemon.php?codPokemon=$array[codPokemon]> Editar </a></td>
                                        <td> <a href = deletePokemon.php?codPokemon=$array[codPokemon]> X </a></td>
                                        </tr>
                                        
                                    ");
                            }
                        echo ('
                                </table>
                                </div>');           
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>