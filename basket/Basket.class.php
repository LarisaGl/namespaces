<?php
namespace basket;

Class Basket implements basketInt
{
    public $items = [];

    //добавляем товар
    public function add($goods) {
    	$goods->quantity = 1;
        if(array_key_exists($goods->name, $this->items)) {
            $this->items[$goods->name]->quantity++;
        }
        else{
            $this->items[$goods->name] = $goods;
        }
    }

    //удалить товар из корзины
    public function deleteProduct($goods) {
        echo 'Товар ' . $this->items[$goods->name]->name . ' удалён из корзины <br>';
        unset($this->items[$goods->name]);
    }

    //показать все товары в корзине
    public function showAllProduct() {
        $resCountProduct = 0;
        echo 'Корзина:' . '<br>';
        foreach($this->items as $key => $value) {
            echo 'Товар ' . $key . ', количество: ' . $value->quantity . '<br>';
            $resCountProduct = $resCountProduct + $value->quantity; 
        }        
        echo 'Общее количество товаров: ' . $resCountProduct;
    }

    //сумма товаров в корзине
    public function sum() {
        $res = 0;        
        foreach($this->items as $key => $value) {
            $res = $res + ($value->getPrice() * $value->quantity);
        }        
        return $res;
    }

    //убрать 1 продукт из корзины
    public function deleteOneProduct($goods){
        if(array_key_exists($goods->name, $this->items)){
            if($this->items[$goods->name]->quantity > 0){
                 $this->items[$goods->name]->quantity--;
                 echo 'Товар ' . $this->items[$goods->name]->name . ' удалён из корзины <br>';
            } 
        }
    }
}