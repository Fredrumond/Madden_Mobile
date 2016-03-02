<?php require_once"../DB/conexao.php";?>


<table class="table">	
	<?php
		$season = DBEscape($_POST['season']);		
		$query = "SELECT * FROM season WHERE id_season = $season;";
		$query2 = "SELECT id_season,week,adversario,placar_h,placar_a,casa,fora,nome_time FROM week 
		INNER JOIN times WHERE week.adversario = times.id_time and id_season = $season;";
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