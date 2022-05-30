<html>
    <head> Escolha o treinador para batalhar </head>
    <body>
        
        <?php
            include('conexao.php');
            $query = mysqli_query($conexao, "SELECT codTreinador, nome FROM tbltreinador");
        ?>

        <form action = "resultado.php" method = GET>    
            <?php 
                
                echo "Treinador 1: <select name = 'batalhaTreinador'>";
                while($array = mysqli_fetch_assoc($query))
                {
                    echo "<option value = ".$array['codTreinador'].">". $array['nome']."</option>"; 
                }
                echo "</select> <br>"; 
                
            ?>     

            <?php   
                $query = mysqli_query($conexao, "SELECT codTreinador, nome FROM tbltreinador");
                echo "Treinador 2: <select name = 'batalhaTreinador2'>";
            
                
                while($array2 = mysqli_fetch_assoc($query))
                {
                    echo "<option value = ".$array2['codTreinador'].">". $array2['nome']."</option>";
                }
                echo "</select><br>
                    <input type = submit>
                "; 

                /*foreach($array as $key => $value)
                    {
                        echo("<tr><td><input type = checkbox name = codTreinador> </td><td> $value </td></tr>");
                    }
                }*/
            ?> 
        </form>  
    </body>
</html>

