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
<br>

<hr id=linha>
<?php
	$sql = mysqli_query($conn,"SELECT * FROM doar ORDER BY id");
	while($tabela = mysqli_fetch_array($sql)){
	echo "<h2>$tabela[nome]</h2>";
    echo "<h3>$tabela[email]</h3>";
	echo "<h3>R$ $tabela[valor]</h3>";
	}
	?>
<hr>