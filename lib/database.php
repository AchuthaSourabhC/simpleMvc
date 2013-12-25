<?php

class Database extends PDO {
    
    /*
     * initialize and and create a PDO object to use in the models
     * */

	function __construct(){
		try {
    		parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
			
		}catch(PDOException $e) {
    		echo 'Connection failed: ' . $e->getMessage();
		}
	}

}