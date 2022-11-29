<div class="container">
  <h2>REALIZAR DOAÇÕES</h2> 
  <form  id="contactForm" action="?pg=doardb" method="post">
     
	 <label>Nome:</label> <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name.">
	 E-mail: <input type="email" class="form-control" name="email"/>
	 Valor: <input type="text" class="form-control" name="valor"/><br>
	 <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<h1 id=subtitulo2>Doadores</h1>

<?php

$sql = "SELECT * FROM doar WHERE id=1";

$todos = mysqli_query($conn, $sql);

while ($dados=mysqli_fetch_array($todos)) {?>

<h2>Nome: <?=$dados['nome'];?></h2>
<div>
    <p>Valor: 
    <?=$dados['valor'];?>
    </p>
</div>

<?php } ?>

<?php

$sql = "SELECT * FROM doar WHERE id=2";

$todos = mysqli_query($conn, $sql);

while ($dados=mysqli_fetch_array($todos)) {?>

<h2>Nome: <?=$dados['nome'];?></h2>
<div>
    <p>valor: 
    <?=$dados['valor'];?>
    </p>
</div>

<?php } ?>
<?php

$sql = "SELECT * FROM doar WHERE id=3";

$todos = mysqli_query($conn, $sql);

while ($dados=mysqli_fetch_array($todos)) {?>

<h2><?=$dados['nome'];?></h2>
<div>
    <p>
    <?=$dados['valor'];?>
    </p>
</div>

<?php } ?>