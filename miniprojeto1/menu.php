<!--nav class="navbar-center">
  <div class="container">
    <div class="navbar-header">
      <ul class="nav nav-justified">
        <li><a href="?pg=principal">Home</a></li>
    		<li><a href="?pg=quemsomos">Quem Somos</a></li>
    		<li><a href="?pg=produtos">Produtos</a></li>
    		<li><a href="?pg=servicos">Serviços</a></li>
    		<li><a href="?pg=faleconosco">Fale conosco</a></li>
      </ul>
    </div>
  </div>
</nav-->

<div class="container1">
        <li><a href="?pg=principal" class="links">Home</a></li>
        <?php
          $sql = mysqli_query($conn,"SELECT titulo,link FROM paginas ORDER BY id");
          while($tabela = mysqli_fetch_array($sql)){
        echo "<li><a href=?pg=$tabela[link]>$tabela[titulo]</a></li>";
      }
        ?>
        <li><a href="?pg=quemsomos" class="links">Quem Somos</a></li>
    		<li><a href="?pg=produtos" class="links">Produtos</a></li>
    		<li><a href="?pg=servicos" class="links">Serviços</a></li>
        <li><a href="?pg=faleconosco" class="links">Fale conosco</a></li>       
</div>

