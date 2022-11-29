<div class="container">
  <h2>Inserir Produto</h2> 
  <form  id="contactForm" action="?pg=inserirpdb" method="post">
     
	 <label>Nome do Produto:</label> 
     <input type="text" class="form-control" name="nome" required="" 
     data-validation-required-message="Please enter your name."><br>
	 Valor: <input type="text" class="form-control" name="valor" required><br>
	 Descrição:<textarea class="form-control" name="descricao" rows="5" cols="10"
      required></textarea><br>
	 <button type="submit" class="btn btn-primary">Enviar</button>
     <button type="cancel" class="btn btn-primary">Cancelar</button>

  </form>
</div>