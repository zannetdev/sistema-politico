<?php

class Principal_Model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function get_type_users(){
        $c =  $this->db->query("SELECT * FROM T_TYPEUSERS")->fetchAll(PDO::FETCH_OBJ);
		json_return($c);
    }
}