<?php

/*
 * This is Error Controller , 
 * only sample 404 error method is show, 
 * custom error methods can be added and 
 * called by creating an object of the class 
 * */

class Error extends Control{

	function __construct(){
		parent::__construct();
		
	}

	public function index(){
			echo $this->twig->render('error/404.html', array());
			return false;
	}

}