<?php
include_once 'Animal/chicken.php';
include_once 'Animal/tiger.php';
echo ('---- Animals<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound();
    if ($animal instanceof Chicken) {
        echo $animal->howToEat(). ' ';
    }

}