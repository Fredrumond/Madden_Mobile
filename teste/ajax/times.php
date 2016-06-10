<?php
require_once ('../../class/ConDB.class.php');
require_once ('../../class/CRUD.class.php');

$times = new CRUD;

$sel=$times->select('adversario,COUNT(adversario) as jogos,
                    SUM(placar_h) as convertidos,
                    SUM(placar_a) as sofridos,
                    SUM(vitoria = 1) as vitorias,
                    SUM(derrota = 1) as derrotas,
                    SUM(casa = 1) as jogos_casa,
                    SUM(fora = 1) as jogos_fora,
                    nome_time,logo',
                    'week',
                    'INNER JOIN times 
                    WHERE week.adversario = times.id_time 
                    GROUP BY adversario 
                    ORDER BY jogos DESC, convertidos DESC ',array());

foreach($sel as $reg){
	$array_times[] = $reg;
}
      
//echo json_encode($array_times);

echo json_encode(array('time' => $array_times));



?> 