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

    public function insereWeek($id_season,$week,$id_jogo,$adversario,$placar_h,$placar_a,$fora,$casa){
    	$crd = new CRUD();
    	$crd->insert('week','id_season=?,week=?,id_jogo=?,adversario=?,placar_h=?,placar_a=?,fora=?,casa=?',array($id_season,$week,$id_jogo,$adversario,$placar_h,$placar_a,$fora,$casa));
    }

    #BUGADA
    public function editaWeek($id_season,$week,$id_jogo,$adversario,$placar_h,$placar_a,$fora,$casa,$id_week){
    	$crd = new CRUD();
    	$crd->update('id_season=?,week=?,id_jogo=?,adversario=?,placar_h=?,placar_a=?,fora=?,casa=? WHERE id_week=?',array($id_season,$week,$id_jogo,$adversario,$placar_h,$placar_a,$fora,$casa,$id_week));
    }

    #BUGADA
    public function deletaWeek(){
    	
    }
}

?>