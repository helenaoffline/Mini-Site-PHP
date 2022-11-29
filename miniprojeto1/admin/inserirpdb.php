<?php

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];

   $sql = "INSERT INTO produtos (nome, 
    valor, descricao) 
    VALUES ('$nome','$valor','$descricao')";

    $insert = mysqli_query($conn, $sql);

    if(!$insert){
        echo "Ocorreu um erro ao cadastrar o produto no banco de dados. 
        <a href='?pg=inserir'>Tente Novamente</a>";
    }else{
       echo "<h3>Produto Cadastrada com sucesso!</h3><br>";
       echo "<a href='?pg=inserirp'>
       Cadastrar Novamente</a><br>";
       echo "<a href='?pg=listarp'>;
       Voltar para o Inicio</a><br>";
    }

?>