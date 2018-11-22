<?php

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)).DS.'zad2');

function __autoload($classname)
{
	if (file_exists(ROOT.DS.'controller'.DS.strtolower($classname).'.php'))
	{
		require_once(ROOT.DS.'controller'.DS.strtolower($classname).'.php');
	}
}

$url = $_SERVER['QUERY_STRING'];

if (strlen($url) > 0)
{
	if (isset($_GET['controller']) && class_exists($_GET['controller']))
	{
		$myController = eval("new ".ucfirst(strtolower($_GET['controller']))."();");
	}
	else
	{
		require_once(ROOT.DS.'view'.DS.'view.php');
		$view = new View("error", "404");
	}
}
else
{
	header("Location: ".$url."?controller=home&action=view");
	exit;
}

?>