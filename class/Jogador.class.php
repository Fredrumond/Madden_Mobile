<?php
require_once ('ConDB.class.php');
require_once ('CRUD.class.php');
class Jogador extends CRUD {

    private $id_jogador;
	private $nome_jogador;
	private $posicao;
	private $avg_jogador;
    private $crd;

    public function __construct(){
        $this->crd = new CRUD();
    }	

    public function insereJogador($nome_jogador,$posicao,$avg_jogador){    	
        $this->crd->insert('jogadores','nome_jogador=?,posicao=?,avg_jogador=?',array($nome_jogador,$posicao,$avg_jogador));
    }
    
    public function editaJogador($nome_jogador,$posicao,$avg_jogador,$id_jogador){
    	$this->crd->update('jogadores','nome_jogador=?,posicao=?,avg_jogador=? WHERE id_jogador=?',array($nome_jogador,$posicao,$avg_jogador,$id_jogador));
    }
    
    public function deletaJogador($id_jogador){    	
        $this->crd->delete('jogadores','WHERE id_jogador=?',array($id_jogador));        
    }
}

?>