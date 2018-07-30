<?php
namespace order;

 class Order implements orderInt
    {
        private $basket;

        public function setBasket($basket)
        {
            $this->basket = $basket;
            return $this;
        }

        public function printOrder()
        {
            $this->basket->showAllProduct();
        }

        public function sumOrder()
        {
           return $this->basket->sum();
        }
    }