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
    private $crd;

    public function __construct(){
        $this->crd = new CRUD();
    }

    public function insereTime($nome_time,$conferencia,$divisao){    	
        $this->crd->insert('times','nome_time=?,conferencia=?,divisao=?',array($nome_time,$conferencia,$divisao));    	
    }

    public function editaTime($nome_time,$conferencia,$divisao,$id_time){    	
    	$this->crd->update('times','nome_time=?,conferencia=?,divisao=? WHERE id_time=?',array($nome_time,$conferencia,$divisao,$id_time));
    }
    
    public function deletaTime($id_time){    	
        $this->crd->delete('times','WHERE id_time=?',array($id_time));
    }
}

?>