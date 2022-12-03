<center>
    <?php

    $sql = "SELECT * FROM paginas WHERE id=1";

    $todos = mysqli_query($conn, $sql);

    while ($dados=mysqli_fetch_array($todos)) {?>

    <h2><?=$dados['titulo'];?></h2>
    <div>
        <p>
        <?=$dados['descricao'];?>
        </p>
    </div>

    <?php } ?>
</center>