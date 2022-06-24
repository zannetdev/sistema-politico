<?php

class Authentication_model extends Model
{
	public function __construct()
	{
		parent::__construct();
	}
    public function auth_login($req){
        $user = sanitize($req['user'], STRING);
        $pwd = sanitize($req['password'], STRING);
        if(!empty($user) && !empty($pwd)){
            $stm = $this->db->prepare("SELECT id_customer,password, flag_state FROM T_CUSTOMERS WHERE user = :user");
            $stm->bindParam(':user', $user, PDO::PARAM_STR);
            $stm->execute();
            $c = $stm->fetch(PDO::FETCH_OBJ);
            if($c){
                if($c->flag_state == '01'){
                    if(password_verify($pwd,$c->password)){
                        $user_data = $this->db->query("SELECT id_customer, dni, 
                        description, user, id_update, date_update 
                        FROM T_CUSTOMERS WHERE id_customer = {$c->id_customer}")->fetch(PDO::FETCH_OBJ);
                        Session::set('loggedIn', true);
                        Session::set('usuid', $user_data->id_customer);
                        Session::set('dni', $user_data->dni);
                        Session::set('description', $user_data->description);
                        Session::set('user', $user_data->user);
                        Session::set('id_update', $user_data->id_update);
                        Session::set('date_update', $user_data->date_update);
                        response_function("Bienvenido de nuevo " . strtolower($user_data->description), FUNCTION_RESPONSE_SUCCESS);
                    }else{
                        response_function('Usuario o contraseña inválidos.', FUNCTION_RESPONSE_ERROR);
                    }
                }else{
                    response_function('La cuenta ingresada está deshabilitada, contáctate con el administrador', FUNCTION_RESPONSE_ERROR);
                }
            }else{
                response_function('Usuario o contraseña inválidos.', FUNCTION_RESPONSE_ERROR);
            }
        }else{
            response_function('Datos ingresados no válidos.', FUNCTION_RESPONSE_ERROR);
        }
    }
 
	
}