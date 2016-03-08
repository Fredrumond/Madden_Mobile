<?php
require_once ('ConDB.class.php');
require_once ('CRUD.class.php');
class Week extends CRUD {

    private $id_week;
	private $id_season;
	private $week;
	private $id_jogo;
	private $adversario;
    private $placar_h;
    private $placar_a;
    private $fora;
    private $casa;
    private $crd;

    public function __construct(){
        $this->crd = new CRUD();
    }

    public function insereWeek($id_season,$week,$id_jogo,$adversario,$placar_h,$placar_a){    	
    	$this->crd->insert('week','id_season=?,week=?,id_jogo=?,adversario=?,placar_h=?,placar_a=?',array($id_season,$week,$id_jogo,$adversario,$placar_h,$placar_a));
    }
    
    public function editaWeek($id_season,$week,$id_jogo,$adversario,$placar_h,$placar_a,$fora,$casa,$id_week){
    	$this->crd->update('week','id_season=?,week=?,id_jogo=?,adversario=?,placar_h=?,placar_a=?,fora=?,casa=? WHERE id_week=?',array($id_season,$week,$id_jogo,$adversario,$placar_h,$placar_a,$fora,$casa,$id_week));
    }
    
    public function deletaWeek($id_week){    	
        $this->crd->delete('week','WHERE id_week=?',array($id_week));
    }
}

?>