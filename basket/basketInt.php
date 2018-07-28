<?php
namespace basket;

interface basketInt {
    	public function add($goods);
    	public function deleteOneProduct($goods);
    	public function showAllProduct();
    	public function sum();
    }