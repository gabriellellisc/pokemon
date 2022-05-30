 <?php
    include('conexao.php');
    $codigo = $_REQUEST['codTreinador'];
    try{
        $query = mysqli_query($conexao, "SELECT * FROM tbltreinador WHERE codTreinador = $codigo");
    }catch(\Exception $e){
        echo $e->getMessage(); 
    }
    $array = mysqli_fetch_array($query);

    echo "<form action = editar2.php method = POST";
    echo ("<table border = 1 class = table>
            <tr><input type = hidden name = codTreinador value = ".$array['codTreinador']." hidden></td></tr>
            <tr><td>Nome: </td><td><input type = text name = nomeTreinador value = ".$array['nome']."></td></tr>
            <tr><td>Idade: </td><td><input type = number name = idade value = ".$array['idade']."></td></tr>
            <tr><td colspan = 2><input type = submit>
        </table>
        ");
?>
