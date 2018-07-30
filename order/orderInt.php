<?php
namespace order;

interface orderInt {
        public function setBasket($basket);
        public function printOrder();
        public function sumOrder();
    }