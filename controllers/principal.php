<?php
check_session();
class Principal extends Controller {
	function __construct() {
		parent::__construct();	
	}
	function index(){
		$this->view->js = array('principal/js/all_principal.js');
        $this->view->render('principal/index', false);
    }
	function get_usuarios_tipo(){
		$this->model->get_type_users();
	}
   
}