<?php
class autoloader
{
	public static function moduleautoloader($class)
	{
		$path = $_SERVER['DOCUMENT_ROOT'] . "/modules/{$class}.php";
		if (is_readable($path)) require $path;
	}
	
	public static function daoautoloader($class)
	{
		$path = $_SERVER['DOCUMENT_ROOT'] . "/dataobjects/{$class}.php";
		if (is_readable($path)) require $path;
	}
	
	public static function includesautoloader($class)
	{
        $path = $_SERVER['DOCUMENT_ROOT'] . "/includes/{$class}.php";
        if (is_readable($path)) require $path;
	}
}
spl_autoload_register('autoloader::includesautoloader');
spl_autoload_register('autoloader::daoautoloader');
spl_autoload_register('autoloader::moduleautoloader');

?>