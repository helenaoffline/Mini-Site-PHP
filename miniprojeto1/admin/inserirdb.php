<?php

    $nome = $_POST['nome'];
    $link = $_POST['link'];
    $descricao = $_POST['descricao'];

   $sql = "INSERT INTO paginas (titulo, 
    link, descricao) 
    VALUES ('$nome','$link','$descricao')";

    $insert = mysqli_query($conn, $sql);

    if(!$insert){
        echo "Ocorreu um erro ao cadastrar no banco de dados. 
        <a href='?pg=inserir'>Tente Novamente</a>";
    }else{
       echo "<h3>Página Cadastrada com sucesso!</h3><br>";
       echo "<a href='?pg=inserir'>
       Cadastrar Novamente</a><br>";
       echo "<a href='?pg=listar'>;
       Voltar para o Inicio</a><br>";
    }

?>