<?php
require_once ('ConDB.class.php');
require_once ('CRUD.class.php');
class Time extends CRUD {

    private $id_time;
	private $nome_time;
	private $conferencia;
	private $divisao;
	private $qtd_jogos;
    private $vitoria;
    private $derrota;
    private $pontos_convertidos;
    private $pontos_sofridos;

    public function insereTime($nome_time,$conferencia,$divisao){
    	$crd = new CRUD();
        $crd->insert('times','nome_time=?,conferencia=?,divisao=?',array($nome_time,$conferencia,$divisao));
    	
    }

    #BUGADA
    public function editaTime($nome_time,$conferencia,$divisao,$id_time){
    	$crd = new CRUD();
    	$crd->update('times','nome_time=?,conferencia=?,divisao=? WHERE id_time=?',array($nome_time,$conferencia,$divisao,$id_time));
    }

    #BUGADA
    public function deletaTime(){
    	
    }
}

?>