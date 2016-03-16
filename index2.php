<?php 
require_once"DB/conexao.php";
require_once ('class/ConDB.class.php');
require_once ('class/CRUD.class.php');

?>

<!--Inserir Jogo-->
<form method="POST" action="acoes/inserir_jogo.php">
	Season
	<select name="season" >
		<option>Season</option>
		<?php			
		$crud=new CRUD;
		$sel=$crud->select('*','season','',array());
		foreach($sel as $reg){
			?>
			<option value="<?php print $reg['id_season'] ?>"><?php print $reg['nome_season'] ?></option>
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
			$crud=new CRUD;
			$sel=$crud->select('*','times','ORDER BY nome_time ASC',array());
			foreach($sel as $reg){
				?>
				<option value="<?php print $reg['id_time'] ?>"><?php print $reg['nome_time'] ?></option>
				<?php }?>					
			</select>
			Placar 
			<input type="number" id="placar_h" name="placar_h">
			X
			<input type="number" id="placar_a" name="placar_a">			

			<!--<button class="btn btn-primary" type="submit" >Limpar</button>-->					
			<button class="btn btn-primary" type="submit" >Inserir</button>
		</form>

		<!--Visualizar Season-->
		<form method="POST" action="acoes/visualizar_season.php">
			Season
			<select name="season" >
				<option>Season</option>
				<?php			
				$crud=new CRUD;
				$sel=$crud->select('*','season','',array());
				foreach($sel as $reg){
					?>
					<option value="<?php print $reg['id_season'] ?>"><?php print $reg['nome_season'] ?></option>
					<?php }?>					
				</select>						
				<button class="btn btn-primary" type="submit" >Visualizar Season</button>
			</form>

			<!--Inserir Time-->
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


			<!--Inserir Jogador-->
			<form method="POST" action="acoes/jogador/inserir_jogador.php">
				Nome					
				<input type="text" id="nome_jogador" name="nome_jogador">
				<select name="posicao" >
					<option>Posicao</option>
					<?php
					$query = "SELECT * FROM posicao_jogador";
					$result = DBExecute($query); 
					$linha = mysqli_num_rows($result);
					while ($row = mysqli_fetch_array($result)) { ?>
					<option value="<?php echo $row['id_posicao'] ?>"><?php echo $row['sigla_posicao'] ?></option>
					<?php }?>					
				</select>			
				AVG					
				<input type="number" id="avg_jogador" name="avg_jogador">
				<!--<button class="btn btn-primary" type="submit" >Limpar</button>-->					
				<button class="btn btn-primary" type="submit" >Inserir</button>
			</form>

			<!--Lista Jogadores-->
			<table class="table">
				<tr bgcolor="#00afef">					
					<td>Time Atual</td>							
				</tr>
				<tr bgcolor="#00afef">					
					<td>Nome</td>		
					<td>Posicao</td>		
					<td>AVG</td>					
				</tr>			
				<?php		
				$query = "SELECT nome_jogador,posicao,avg_jogador,nome_posicao,sigla_posicao FROM posicao_jogador INNER JOIN jogadores WHERE jogadores.posicao = posicao_jogador.id_posicao";
				$result = DBExecute($query);		
				$linha = mysqli_num_rows($result);						
				while ($row = mysqli_fetch_array($result)) 
				{        
					?>
					<tr>
						<td><?php echo $row['nome_jogador']?></td>
						<td><?php echo $row['sigla_posicao']?></td>
						<td><?php echo $row['avg_jogador']?></td>

					</tr>
					<?php
				}	
				?>				
			</table>

			<!--Tabela do Historico-->
			<table class="table">
				<tr bgcolor="#00afef">					
					<td>Nome</td>		
					<td>Jogos</td>		
					<td>PC</td>
					<td>PS</td>					
				</tr>			
				<?php
		#SELECT adversario, count(adversario) as adversarioAlias,...
				$query = "SELECT adversario,COUNT(adversario) as adversarioAlias,SUM(placar_h) as convertidos,SUM(placar_a) as sofridos,nome_time  FROM  week INNER JOIN times WHERE week.adversario = times.id_time  GROUP BY adversario;";
				$result = DBExecute($query);		
				$linha = mysqli_num_rows($result);						
				while ($row = mysqli_fetch_array($result)) 
				{        
					?>
					<tr>
						<td><?php echo $row['nome_time']?></td>
						<td><?php echo $row['adversarioAlias']?></td>
						<td><?php echo $row['convertidos']?></td>
						<td><?php echo $row['sofridos']?></td>

					</tr>
					<?php
				}	
				?>				
			</table>