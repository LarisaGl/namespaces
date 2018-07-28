<?php
namespace duck; 

class Duck extends \main\Main //implements duckInt
    {
        public $weight;

        public function setWeight($weight)
        {
            $this->weight = $weight;
            return $weight;		
        }
        
        public function getPrice () {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }