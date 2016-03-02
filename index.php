<?php require_once"DB/conexao.php";?>


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