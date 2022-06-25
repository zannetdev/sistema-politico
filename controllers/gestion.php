<?php

class Gestion extends Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {
		header('Location: ' . URL . 'gestion/menu');
	}
	function menu(){
		$this->view->js = array('gestion/js/all_menu.js');
		$this->view->render('gestion/index', false);
	}
	function distritos(){
		$this->view->js = array('gestion/js/all_distritos.js');
		$this->view->render('gestion/distritos', false);
	}
	function manzanas(){
		$this->view->js = array('gestion/js/all_manzanas.js');
		$this->view->render('gestion/manzanas', false);
	}
	function zonas(){
		$this->view->js = array('gestion/js/all_zonas.js');
		$this->view->render('gestion/zonas', false);
	}
}