<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $valor = $_POST['valor'];
    

   $sql = "INSERT INTO doar (nome, 
    email, valor) 
    VALUES ('$nome','$email','$valor')";

    $insert = mysqli_query($conn, $sql);

    if(!$insert){
        echo "Não foi possivel realizar a doação. 
        <a href='?pg=faleconosco'>Tente Novamente</a>";
    }else{
       echo "<h2>Doação realizada!</h2>";
       echo "<h3>Obrigada!</h3><br>";
       echo "<a href='?pg=doar'>
       Doar Novamente</a><br>";
    }

?>