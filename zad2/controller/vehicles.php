<?php

require_once(ROOT.DS.'controller'.DS.'controller.php');
require_once(ROOT.DS.'view'.DS.'view.php');

class Vehicles extends Controller
{
	protected function view()
	{
		$view = new View($this->controller, $this->action);
	}
	protected function edit()
	{
		$view = new View($this->controller, $this->action);
	}
	protected function load()
	{
		$view = new View($this->controller, $this->action);
	}
	protected function save()
	{
		if (isset($_GET['content']))
		{
			file_put_contents(ROOT.DS."view".DS.$this->controller.".php", $_GET['content']);
		}
		header("Location: index.php?controller=".$this->controller."&action=view");
		exit;
	}
}

?>