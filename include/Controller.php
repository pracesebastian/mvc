<?php

class Controller {

	function __construct() {
		//echo 'Main controller<br />';
		$this->view = new View();
	}
	
	public function load_model($name){
		
		$path = 'include/model/'.$name.'_model.php';

			if(file_exists($path))
				require $path;

		$model_name = $name.'_model';
		$this->model = new $model_name;
	}

}