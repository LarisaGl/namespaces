<?php

abstract class Main
{
	public $name;
	public $price;

	public function __construct($name)
	{
		$this->name=$name;
	}
	abstract public function getPrice();
}

function carAutoload ($className)
{
	$filePath ='./car/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function tvAutoload ($className)
{
	$filePath ='./tv/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function penAutoload ($className)
{
	$filePath ='./pen/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

function duckAutoload ($className)
{
	$filePath ='./duck/'.$className.'.class.php';
	if(file_exists($filePath)) {
		include "$filePath";
	}
}

spl_autoload_register('carAutoload');
spl_autoload_register('tvAutoload');
spl_autoload_register('penAutoload');
spl_autoload_register('duckAutoload');

$bmw = new Car ();
$mazda = new Car ();

$lg = new TV ();
$samsung = new TV ();

$colop = new Pen ();
$parker = new Pen ();

$one = new Duck ();
$two = new Duck ();