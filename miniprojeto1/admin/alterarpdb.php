<?php

$id =      $_POST['id'];
$nome =    $_POST['titulo'];
$valor =    $_POST['link'];
$descricao = $_POST['descricao'];

$sql2 = mysqli_query($conn, "SELECT * FROM produtos 
WHERE id='$id'");

$sql = "UPDATE produtos SET titulo='$nome', valor='$valor', 
descricao='$descricao' WHERE id=$id";
$altera = mysqli_query($conn, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar o produto no banco de dados. <br>
    <a href='?pg=listarp'>Voltar</a>";
}else{
   echo "<h3>Alterado com sucesso!</h3>
<a href='?pg=listarp'>Voltar</a>";
}
?>