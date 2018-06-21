<?php
namespace classes\pen;

class Pen extends \classes\main\Main implements penInt
    {
        public $color;

        public function setColor($color)
        {
            $this->color=$color;
            return $this;		
        }

        public function getPrice () {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }