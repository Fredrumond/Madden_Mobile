<?php require_once"DB/conexao.php";?>


<form method="POST" action="acoes/inserir_jogo.php">
	Season
	<select name="season" >
		<option>Season</option>
		<?php
			$query = "SELECT * FROM season";
			$result = DBExecute($query); 
			$linha = mysqli_num_rows($result);
			while ($row = mysqli_fetch_array($result)) { ?>
		 		<option value="<?php echo $row['id_season'] ?>"><?php echo $row['nome_season'] ?></option>
		 	<?php }?>					
	</select>
	Week
	<input type="number" id="week" name="week">	
	<select name="tipo_jogo" >
		<option>Tipo de jogo</option>
		<?php
			$query = "SELECT * FROM jogo";
			$result = DBExecute($query); 
			$linha = mysqli_num_rows($result);
			while ($row = mysqli_fetch_array($result)) { ?>
		 		<option value="<?php echo $row['id_jogo'] ?>"><?php echo $row['nome_jogo'] ?></option>
		 	<?php }?>					
	</select>
	Adversario
	<select name="adversario" >
		<option>Adversario</option>
		<?php
			$query = "SELECT * FROM times ORDER BY nome_time ASC";
			$result = DBExecute($query); 
			$linha = mysqli_num_rows($result);
			while ($row = mysqli_fetch_array($result)) { ?>
		 		<option value="<?php echo $row['id_time'] ?>"><?php echo $row['nome_time'] ?></option>
		 	<?php }?>					
	</select>
	Placar 
	<input type="number" id="placar_h" name="placar_h">
	X
	<input type="number" id="placar_a" name="placar_a">			
	
	<!--<button class="btn btn-primary" type="submit" >Limpar</button>-->					
	<button class="btn btn-primary" type="submit" >Inserir</button>
</form>


<form method="POST" action="acoes/visualizar_season.php">
	Season
	<select name="season" >
		<option>Season</option>
		<?php
			$query = "SELECT * FROM season";
			$result = DBExecute($query); 
			$linha = mysqli_num_rows($result);
			while ($row = mysqli_fetch_array($result)) { ?>
		 		<option value="<?php echo $row['id_season'] ?>"><?php echo $row['nome_season'] ?></option>
		 	<?php }?>					
	</select>						
	<button class="btn btn-primary" type="submit" >Visualizar Season</button>
</form>

<form method="POST" action="acoes/inserir_time.php">
	Nome					
	<input type="text" id="nome_time" name="nome_time">
	<select name="conferencia" >
		<option>Conferencia</option>
		<?php
			$query = "SELECT * FROM conferencia";
			$result = DBExecute($query); 
			$linha = mysqli_num_rows($result);
			while ($row = mysqli_fetch_array($result)) { ?>
		 		<option value="<?php echo $row['id_conferencia'] ?>"><?php echo $row['nome_conferencia'] ?></option>
		 	<?php }?>					
	</select>
	<select name="divisao" >
		<option>Divisao</option>
		<?php
			$query = "SELECT * FROM divisao";
			$result = DBExecute($query); 
			$linha = mysqli_num_rows($result);
			while ($row = mysqli_fetch_array($result)) { ?>
		 		<option value="<?php echo $row['id_divisao'] ?>"><?php echo $row['nome_divisao'] ?></option>
		 	<?php }?>					
	</select>			
	
	<!--<button class="btn btn-primary" type="submit" >Limpar</button>-->					
	<button class="btn btn-primary" type="submit" >Salvar</button>
</form>


<table class="table">
	<tr bgcolor="#00afef">					
		<td>Nome</td>
		<td>Conferencia</td>
		<td>Divisao</td>					
	</tr>			
	<?php
		$teste = array();
		$query = "SELECT * FROM times"; /*asc*/
		$result = DBExecute($query); 
		$linha = mysqli_num_rows($result);		
		while ($row = mysqli_fetch_array($result)) 
		{        
    ?>
	<tr>
		<td><?php echo $row['nome_time']?></td>
		<td><?php echo $row['conferencia']?></td>
		<td><?php echo $row['divisao']?></td>			 		        
	</tr>
	<?php
		}	
	?>				
</table>