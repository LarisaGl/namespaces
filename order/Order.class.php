<?php
namespace order;

 class Order
    {
        public function setOrder($ord)
        {
            $this->ord=$ord;
            return $this;
        }

        public function print()
        {
            $this->basket->showAllProduct();
        }
    }