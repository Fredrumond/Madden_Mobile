<?php
require_once ('ConDB.class.php');
require_once ('CRUD.class.php');
class Season extends CRUD {

	private $id_season;
	private $nome_season;
	private $data_inicio;
	private $data_final;

    public function insereSeason($nome_season,$data_inicio,$data_final){
    	$crd = new CRUD();
    	$crd->insert('season','nome_season=?,data_inicio=?,data_final=?',array($nome_season,$data_inicio,$data_final));
    }

    public function editaSeason($id_season,$nome_season,$data_inicio,$data_final){
    	$crd = new CRUD();
    	$crd->update('season','nome_season=?,data_inicio=?,data_final=? WHERE id_season=?',array($nome_season,$data_inicio,$data_final,$id_season));
    }

    #BUGADA
    public function deletaSeason($id_season){
    	$crd = new CRUD();
    	$crd->delete('season','WHERE id=?',array($id_season));
    }
}

?>