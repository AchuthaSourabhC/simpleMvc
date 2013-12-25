<?php

    /*
     * All controllers extend Control class
     * and must have constructor that calls the parent constructor
     * */

	class Index extends Control{

		function __construct(){
			parent::__construct();
		}

        /*
         * Actions or methods can be specified as shown below
         * /index/index or /index calls index() (since index is default action
         * /index/about calls about()
         * */
         
		public function index(){
			echo $this->twig->render('home/index.html', array());
		}
        
        /*
         * Twig is used and viewing engine here,
         * but you can set and use different engines using composer
         * */

		public function about(){
			echo $this->twig->render('home/about.html', array());
		}

	}