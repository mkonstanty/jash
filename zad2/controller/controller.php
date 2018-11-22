<?php

abstract class Controller
{
	protected $controller;
	protected $action;
	
	public function __construct()
	{
		$this->controller = $_GET['controller'];
		if (isset($_GET['action']) && method_exists($this, $_GET['action']))
		{
			$this->action = $_GET['action'];
			eval('$this->'.$this->action.'();');
		}
		else
		{
			require_once(ROOT.DS.'view'.DS.'view.php');
			$view = new View($this->controller, "page404");
		}
	}
}

?>