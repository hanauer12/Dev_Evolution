<?php

class MySQL
{
	const HOST = 'localhost';
	const USER = 'root';
	const PASS = 'IXCSoft6001';
	const DATABASE = 'projeto_evolution';


	public function connectDB(){
		return new mysqli(self::HOST, self::USER, self::PASS, self::DATABASE);
	
	}
	public function getALL($DB,$tabela){
		return $DB->query("SELECT * FROM $tabela");
	}

	public function getOneByKey($DB, $campos, $tabela, $id)
    {
        return $DB->query("SELECT $campos FROM $tabela WHERE id = $id");
    }
	
	public function deletedByID($DB,$tabela,$id)
	{
		return $DB->query("DELETE FROM $tabela WHERE id = $id");
	}
}	

