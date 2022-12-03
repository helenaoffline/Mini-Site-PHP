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

<div>
  <H1>Últimos Doadores</H1>
  <?php
    $sql = mysqli_query($conn,"SELECT * FROM doar ORDER BY id");
    while($tabela = mysqli_fetch_array($sql)){
    echo "<h3>-$tabela[nome]</h3>";
    }
    ?>
</div>