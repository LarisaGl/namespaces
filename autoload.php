<?php

function mainAutoload($className)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $className).'.class.php';
	if(file_exists($filePath)) {
		include_once "$filePath";
	}
}

function mainintAutoload($intName)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $intName).'.int.php';
	if(file_exists($filePath)) {
		include_once "$filePath";
	}
}

function carAutoload($className)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $className).'.class.php';
	if(file_exists($filePath)) {
		include_once "$filePath";
	}
}

function carintAutoload($intName)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $intName).'.int.php';
	if(file_exists($filePath)) {
		include_once "$filePath";
	}
}

spl_autoload_register('mainAutoload');
spl_autoload_register('mainintAutoload');
spl_autoload_register('carAutoload');
spl_autoload_register('carintAutoload');