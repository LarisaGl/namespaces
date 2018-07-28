<?php
require_once 'autoload.php';

    $bmw = new \car\Car ('BMW M3', 7000000, 10);
    $bmw->setCountry('German')->setSpeed(350);
    echo "<pre>";
    print_r($bmw);
    echo "</pre>";
    echo "Ваша цена:".$bmw->getPrice();

    $mazda = new \car\Car ('Mazda 3',  1500000, 15);
    $mazda->setCountry('Japan')->setSpeed(220);
    echo "<pre>";
    print_r($mazda);
    echo "</pre>";
    echo "Ваша цена:".$mazda->getPrice();

    $lg = new \tv\TV ('LG', 35000, 5);
    $lg->setSize(40);
    echo "<pre>";
    print_r($lg);
    echo "</pre>";
    echo "Описание товара: " . $lg->description() . "<br>";

    $samsung = new \tv\TV ('Samsung', 50000, 15);
    $samsung->setSize(45);    
    echo "<pre>";
    print_r($samsung);
    echo "</pre>";
    echo "Описание товара: " . $samsung->description() . "<br>";

    $colop = new \pen\Pen ('Colop', 30, 3);
    $colop->setColor('white');
    echo "<pre>";
    print_r($colop);
    echo "</pre>";
    echo "Ваша цена:" . $colop->getPrice();

    $parker = new \pen\Pen ('Parker',  1000, 7);
    $parker->setColor('black');    
    echo "<pre>";
    print_r($parker);
    echo "</pre>";
    echo "Ваша цена:" . $parker->getPrice();

    $one = new \duck\Duck ('fried', 450, 1);
    $one->setWeight(1500);
    echo "<pre>";
    print_r($one);
    echo "</pre>";
    echo "Ваша цена:" . $one->getPrice();

    $two = new \duck\Duck ('braised', 300, 2);
    $two->setWeight(1000);    
    echo "<pre>";
    print_r($two);
    echo "</pre>";
    echo "Ваша цена:" . $two->getPrice();

    $guess = new \product\Product ('Guess', 15000, 20);
    $guess->setSeasons ("2017/2018");
    echo "<pre>";
    print_r($guess);
    echo "</pre>";
    echo "Ваша цена:" . $guess->getPrice();

    $dkny = new \product\Product ('DKNY', 22000, 25);
    $guess->setSeasons ("2018/2019");    
    echo "<pre>";
    print_r($dkny);
    echo "</pre>";
    echo "Ваша цена:" . $dkny->getPrice();