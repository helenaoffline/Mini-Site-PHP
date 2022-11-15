<div class="container">
  <h2>Inserir Página</h2> 
  <form  id="contactForm" action="?pg=inserirdb" method="post">
     
	 <label>Nome da Página:</label> 
     <input type="text" class="form-control" name="nome" required="" 
     data-validation-required-message="Please enter your name."><br>
	 Link: <input type="text" class="form-control" name="link" required><br>
	 Descrição:<textarea class="form-control" name="descricao" rows="5" cols="10"
      required></textarea><br>
	 <button type="submit" class="btn btn-primary">Enviar</button>
     <button type="cancel" class="btn btn-primary">Cancelar</button>

  </form>
</div>