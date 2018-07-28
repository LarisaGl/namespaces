<?php

function mainAutoload($className)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $className).'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function mainintAutoload($intName)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $intName).'Int.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function carAutoload($className)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $className).'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function carintAutoload($intName)
{
	$filePath =str_replace('\\', DIRECTORY_SEPARATOR, $intName).'Int.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

spl_autoload_register('mainAutoload');
spl_autoload_register('mainintAutoload');
spl_autoload_register('carAutoload');
spl_autoload_register('carintAutoload');