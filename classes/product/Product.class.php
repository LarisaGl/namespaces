 <?php
namespace classes\product;

class Product extends \classes\main\Main implements prodInt
    {
        public $season;

        public function setSeasons($season)
        {
            $this->season=$season;
            return $season;
        }

        public function getPrice () {
            return round ($this->price - ($this->price * $this->discount / 100));
        }
    }