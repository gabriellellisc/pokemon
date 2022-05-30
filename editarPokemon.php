<?php
include('conexao.php');
$codigo = $_REQUEST['codPokemon'];
try{
    $query = mysqli_query($conexao, "SELECT * FROM pokemon WHERE codPokemon = $codigo");
}catch(\Exception $e){
    echo $e->getMessage(); 
}
$array = mysqli_fetch_array($query);

echo "<form action = editarPokemon2.php method = POST";
echo ("<table border = 1 class = table>
        <tr><input type = hidden name = codPokemon value = ".$array['codPokemon']."></td></tr>
        <tr><td>Nome: </td><td><input type = text name = nomePokemon value = ".$array['nomePokemon']."></td></tr>
        <tr><td>Tipo: </td><td><input type = text name = tipo value = ".$array['tipo']."></td></tr>
        <tr><td>Poder: </td><td><input type = number name = poder value = ".$array['poder']."></td></tr>
        <tr><td colspan = 2><input type = submit>
    </table>
    ");
?>
