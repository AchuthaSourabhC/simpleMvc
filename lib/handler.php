<?php

class Handler{

	function __construct(){
		
    // Check the url is set
    
		if(isset($_GET['url'])){
			$url = explode('/', rtrim( $_GET['url'], "/"));
		}else{
			Redirect::to(DEFAULTURL, true, 302);
		}
        
        
        // Check if controller is set
	
		if(isset($url[0])){
			$file = "control/".$url[0].".php";
            //load controller if exists
			if(file_exists($file)){

				require $file;
				$control = new $url[0]();
				$control->loadModel($url[0]);
                
                //call method if set and exists
                
				if(isset($url[1])){

					if(method_exists($control, $url[1])){
                        //use paramter if set
						if(isset($url[2])){
							$control->{$url[1]}($url[2]);
						}else{
                            //no parameter
							$control->{$url[1]}();
						}
					}else{
                        //method doesnt exist
						require "control/error.php";
						$error = new Error();
						$error->index();
					}

				}else{
                    //method ont set
					$control->{DEFAULTPAGE}();
				}
			}else{
                //controller doesnt exist
				require "control/error.php";
				$error = new Error();
				$error->index();
			}
		}else{
            //controller not set
			Redirect::to(DEFAULTURL, true, 302);

		}
	}

}