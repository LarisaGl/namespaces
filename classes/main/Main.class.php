<?php
namespace classes\main; 

abstract class Main //implements mainInt//
{
	public $name;
	public $price;
	public $discount;

	public function  __construct($name, $price, $discount)
        {
            $this->name=$name;
            $this->price=$price;
            $this->discount=$discount;
        }

	abstract public function getPrice();
}