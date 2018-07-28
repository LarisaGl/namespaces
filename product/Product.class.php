<?php
namespace product;

class Product extends \main\Main //implements productInt
    {
        public $season;

        public function setSeasons($season)
        {
            $this->season = $season;
            return $season;
        }

        public function getPrice () {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }