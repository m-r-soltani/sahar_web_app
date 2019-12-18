<?php defined('__ROOT__') OR exit('No direct script access allowed');

class View
{

	public function render($viewPath, $layout = null,$js1= false,$js2=false)
	{
		if ($layout === null) {
			$this->view = $viewPath;

		}
		else if ($layout === false) {
			require('Views/' . $viewPath . '.php');			
		}
		else {
			$this->view = $viewPath;
			if ($js1){
			    $this->js1=$js1;
            }
            if ($js2){
			    $this->js2=$js2;
            }
            require("views/$layout.php");
			//require("Views/$layout.php");
			//require("Views/$layout.php");
		}
	}

}
