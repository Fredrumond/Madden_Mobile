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


<table class="table">	
	<?php		
		$query = "SELECT * FROM season";
		$query2 = "SELECT week,adversario,placar_h,placar_a,casa,fora,nome_time FROM  week INNER JOIN times 
		WHERE week.adversario = times.id_time";
		$result = DBExecute($query);
		$result2 = DBExecute($query2);  
		$linha = mysqli_num_rows($result);
		$linha2 = mysqli_num_rows($result2);			
		while ($row = mysqli_fetch_array($result)) 
		{        
    ?>
    <tr bgcolor="#00afef">					
		<td><?php echo $row['nome_season']?></td>						
	</tr>
	<tr bgcolor="#f33f00">					
		<td>Data Inicio: <?php echo $row['data_inicio']?></td>					
	</tr>
	<tr bgcolor="#f33f00">					
		<td>Data Final: <?php echo $row['data_final']?></td>					
	</tr>

	<tr bgcolor="#00afef">					
		<td>Temporada Regular</td>					
	</tr>

	<tr bgcolor="#00afef">					
		<td>Week</td>
		<td>Adversario</td>
		<td></td>
		<td>X</td>
		<td></td>
		<td>Fora</td>
		<td>Casa</td>					
	</tr>
		<?php
		while ($row = mysqli_fetch_array($result2)) 
			{ 
		?>			
		<tr bgcolor="#808080">		
			<td><?php echo $row['week']?></td>
			<td><?php echo $row['nome_time']?></td>
			<td><?php echo $row['placar_h']?></td>
			<td>X</td>
			<td><?php echo $row['placar_a']?></td>
			<td><?php echo $row['fora']?></td>
			<td><?php echo $row['casa']?></td>								 		        
		</tr>
		<?php
			}	
		?>
	<?php
		}			
	?>				
</table>