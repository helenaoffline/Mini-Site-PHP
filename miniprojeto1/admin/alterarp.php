<?php

$id = $_GET['id'];
$sql = "SELECT * FROM produtos WHERE id = $id";
$busca = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form action="?pg=alterarpdb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Nome do produto: </td>
        <td><input name="nome" type="text" value="<?=$dados['nome'];?>"/></td>
    </tr>
    <tr> 
        <td>Valor: </td>
        <td><input name="valor" type="text" value="<?=$dados['valo'];?>"/></td>
    </tr>
    <tr>
        <td>Descrição: </td>
        <td><textarea name="descricao" value="<?=$dados['descricao'];?>"><?=$dados['descricao'];?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Cadastrar Produto</button></td>
    </tr>
</table>
</form>
<?php 
}
?>