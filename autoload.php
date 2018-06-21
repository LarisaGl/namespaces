<?php

function mainAutoload ($className)
{
	$filePath ='./classes/main/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function carAutoload ($className)
{
	$filePath ='./classes/car/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function tvAutoload ($className)
{
	$filePath ='./classes/tv/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function penAutoload ($className)
{
	$filePath ='./classes/pen/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function duckAutoload ($className)
{
	$filePath ='./classes/duck/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function productAutoload ($className)
{
	$filePath ='./classes/product/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

spl_autoload_register('mainAutoload');
spl_autoload_register('carAutoload');
spl_autoload_register('tvAutoload');
spl_autoload_register('penAutoload');
spl_autoload_register('duckAutoload');
spl_autoload_register('productAutoload');