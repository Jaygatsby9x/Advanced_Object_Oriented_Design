<?php
include_once (dirname(__FILE__). '/../AbstractClass/Animal.php');
include_once(dirname( __FILE__ ) . '/../InterfaceClass/Edible.php');
class chicken extends Animal implements Edible
{
    public function makeSound()
    {
       return 'chicken:meo meo' ;// TODO: Implement makeSound() method.
    }
    public function howToEat()
    {
       return "could be fried"; // TODO: Implement howToEat() method.
    }
}