<div id=produtos>

	<?php
	$sql = mysqli_query($conn,"SELECT * FROM produtos ORDER BY id");
	while($tabela = mysqli_fetch_array($sql)){
	echo "<h1>$tabela[nome]</h1>";
	echo "<h3>R$ $tabela[valor]</h3>";
	echo "<h4>$tabela[descricao]</h4>";
	}
	?>
</div>