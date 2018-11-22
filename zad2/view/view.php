<?php

class View
{
	private $controller;
	private $action;
	
	public function __construct($controller, $action)
	{
		$this->controller = $controller;
		$this->action = $action;
		
		if (file_exists(ROOT.DS.'view'.DS.strtolower($controller).'.php'))
		{
			$this->show();
		}
		else
		{
			$this->page404();
		}
	}
	private function page404()
	{
		include_once(ROOT.DS."view".DS."page404.php");
	}
	private function show()
	{
		include_once(ROOT.DS."view".DS."main.php");
	}
}
?>