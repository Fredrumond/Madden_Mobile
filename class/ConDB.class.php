<?php
function __autoload($class){require_once"{$class}.class.php";}

abstract class ConDB
{
	private static $cnx;
	private function setConn(){
		return
		is_null(self::$cnx)?
		self::$cnx=new PDO("mysql:host=localhost;dbname=madden","root",""):
		self::$cnx;
	}
	public function getConn(){
		return $this->setConn();
	}
}

#$crud=new CRUD;
#$sel=$crud->select('*','teste','',array());
#foreach($sel as $reg){
	#var_dump($reg);
#	print $reg['id_test']."\t";
#	print $reg['nome']."\n";
#}

#$upd=$crud->update('user','user=?,email=? WHERE id=?',array('jose','agulhas@j',1));
#$crud->delete('user','WHERE id=?',array(1));
#$crud->delete('season','WHERE id=?',array(2));

