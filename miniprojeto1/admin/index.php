<html>
<head>
    <title>Ilhadamacaca.com</title>
    <link rel="stylesheet" type="text/css" 
          href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/novocss.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css2/desingpag.css">

</head>
<body>
	<?php
    	include("../config.inc.php");

		require_once("valida_cookies.php");

		//include_once('../topo.php');
	?>
    <h2 class="page-header">Bem-vindo ao Painel Admin | 
		<a href="?pg=logout" class="btn btn-primary">
        SAIR</a></h2>

	<div class='container'>
    <p>
        <a href="?pg=inserir" class="btn btn-primary">
        Inserir Nova Página</a>
    </p>

	<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "listar.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>
	<br>
	<br>
	<div class='container'>
    <p>
        <a href="?pg=inserirp" class="btn btn-primary">
        Inserir Novo Produto</a>
    </p>

	<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "listarp.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>

</body>
</html>