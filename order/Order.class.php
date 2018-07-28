<?php
namespace order;

 class Order extends \basket\Basket
    {
        public function showAll() {
            echo 'Ваш заказ:' . '<br>';
            return $this->showAllProduct(new \basket\Basket);
        }

        public function sumAll() {
            echo 'Сумма заказа:' . '<br>';
            return $this->sum(new \basket\Basket);
        }
    }