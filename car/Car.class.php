<?php
namespace car; 

 class Car extends \main\Main implements carInt
    {
        public $country;
        public $speed;

        public function setCountry($country)
        {
            $this->country=$country;
            return $this;		
        }

        public function setSpeed($speed)
        {
            $this->speed=$speed;
            return $this;
        }

        public function getPrice () {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }