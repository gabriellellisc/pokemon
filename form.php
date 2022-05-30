<html>
    <title>Pokemon GameBoy </title>
    <head>
    <link rel="stylesheet" a href="style.css" />
    </head>
    <body>
        <center> <h1> Pokemon GameBoy - Estudo PHP</h1> </center>
        <form action = cadastrar.php method = GET>
            <div class = 'tableTreinador'>
                <section>
                <table class = "treinador">
                    <tr><td colspan=2><center> Treinador 1: </td></tr>
                    <tr><td>Digite o seu nome: </td><td><input type="text" placeholder = 'Digite aqui o seu nome' name = 'nomeTreinador'></td></tr>
                    <tr><td>Digite sua idade: </td><td><input type="number" placeholder = 'Digite aqui o seu nome' name = 'idade'></td></tr>
                    <?php
                        $nomePokemon1 = [];
                        $poder1 = [];
                        $tipo1 = [];
                        for($i = 1; $i < 4; $i++){
                        echo("
                            <tr><td> Digite o nome do pokemon $i:</td><td><input type='text' placeholder = 'Digite aqui o nome do seu pokemon' name = 'nomePokemon1[$i]'></td></tr>
                            <tr><td> Digite o poder do seu pokemon $i: </td><td><input type='number' placeholder = 'Digite aqui o nome do seu pokemon' name = 'poder1[$i]'></td></tr>
                            <tr><td>Escolha o tipo do seu pokemon $i:</td><td><select placeholder = 'Clique aqui para escolher o tipo' name = 'tipo1[$i]'>
                                <option> Fogo </option>
                                <option> Água </option>
                                <option> Grama </option>
                            </td></tr>
                            "); 
                        }?>
                </table>
                </section>
                    <br><br>
            </div>
            <div class = 'tableTreinador'>
                <table border = 1>
                    <tr><td colspan=2><center> Treinador 2: </td></tr>
                    <tr><td>Digite o seu nome: </td><td><input type="text" placeholder = 'Digite aqui o seu nome' name = 'nomeTreinador2'></td></tr>
                    <tr><td>Digite sua idade: </td><td><input type="number" placeholder = 'Digite aqui o seu nome' name = 'idade2'></td></tr>
                    <?php
                        $nomePokemon2 = [];
                        $poder2 = [];
                        $tipo2 = [];
                        for($i = 1; $i < 4; $i++){
                        echo("
                            <tr><td> Digite o nome do pokemon $i:</td><td><input type='text' placeholder = 'Digite aqui o nome do seu pokemon' name = 'nomePokemon2[$i]'></td></tr>
                            <tr><td> Digite o poder do seu pokemon $i: </td><td><input type='number' placeholder = 'Digite aqui o nome do seu pokemon' name = 'poder2[$i]'></td></tr>
                            <tr><td>Escolha o tipo do seu pokemon $i:</td><td><select placeholder = 'Clique aqui para escolher o tipo' name = 'tipo2[$i]'>
                                <option> Fogo </option>
                                <option> Água </option>
                                <option> Grama </option>
                            </td></tr>
                            "); 
    
                        }
                        
                        ?>
                            <tr><td colspan="2"><center><input type=reset></td></tr>
                </table>   
            <input type=submit>
        </form> 
    </div>  
  

        
    </body>
    
</html>