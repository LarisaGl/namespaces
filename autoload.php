<?php

function mainAutoload($className)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $className).'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

var_dump($className);
var_dump($filePath);

function carAutoload($className)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $className).'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

var_dump($className);
var_dump($filePath);

spl_autoload_register('mainAutoload');
spl_autoload_register('carAutoload');