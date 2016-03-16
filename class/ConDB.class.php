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

?>