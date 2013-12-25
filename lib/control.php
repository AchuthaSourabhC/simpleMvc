<?php

class Control {
    
    /*
     * Initialize Twig
     * */

	function __construct($subview = ""){
		$path = VIEWS."/".$subview;

		$this->loader = new Twig_Loader_Filesystem($path);
		$this->twig = new Twig_Environment($this->loader, array(
		    'cache' => CACHE."/view",'auto_reload' => true,
		));
 
	}
    
    /*
     * load model for controller $name
     * */

	function loadModel($name){

		$filename = 'model/'.$name.'_model.php';

		if(file_exists($filename)){
			require $filename;
			$modelName = $name.'_Model';
			$this->model = new $modelName(); 

		}

	}

}
