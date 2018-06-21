<?php
namespace classes\tv;

class TV extends \classes\main\Main implements tvInt
    {
        public $size;

        public function setSize($size)
        {
            $this->size=$size;
            return $this;		
        }

        public function getPrice () {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }