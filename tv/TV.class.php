<?php
namespace tv;

class TV extends \main\Main implements tvInt
    {
        public $size;

        public function setSize($size)
        {
            $this->size = $size;
            return $this;		
        }

        public function getPrice () {
            return round ($this->price - ($this->price * $this->discount / 100));
        }

        public function description()
        {
        return $this->name . ' размером ' . $this->size . ' дюймов без учета скидки стоит ' . $this->price . ' рублей, с учетом скидки ' . $this->getPrice();
        }
    }