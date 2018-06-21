<?php
require __DIR__ . '/autoload.php';

    $bmw = new Car ('BMW M3', 7000000, 10);
    $bmw->setCountry('German')->setSpeed(350);
    echo "<pre>";
    print_r($bmw);
    echo "</pre>";
    echo "Ваша цена:".$bmw->getPrice();

    $mazda = new Car ('Mazda 3',  1500000, 15);
    $mazda->setCountry('Japan')->setSpeed(220);
    echo "<pre>";
    print_r($mazda);
    echo "</pre>";
    echo "Ваша цена:".$mazda->getPrice();