<?php
require_once ('ConDB.class.php');
require_once ('CRUD.class.php');
class Jogador extends CRUD {

    private $id_jogador;
	private $nome_jogador;
	private $posicao;
	private $avg_jogador;	

    public function insereJogador($nome_jogador,$posicao,$avg_jogador){
    	$crd = new CRUD();
        $crd->insert('jogadores','nome_jogador=?,posicao=?,avg_jogador=?',array($nome_jogador,$posicao,$avg_jogador));
    }

    #BUGADA
    public function editaJogador($nome_jogador,$posicao,$avg_jogador,$id_jogador){
    	$crd = new CRUD();
    	$crd->update('jogadores','nome_jogador=?,posicao=?,avg_jogador=? WHERE id_jogador=?',array($nome_jogador,$posicao,$avg_jogador,$id_jogador));
    }

    #BUGADA
    public function deletaJogador($id_jogador){
    	$crd = new CRUD();
        $crd->delete('jogadores','WHERE id_jogador=?',array($id_jogador));
        #$crud->delete('user','WHERE id=?',array(1));
    }
}

?>