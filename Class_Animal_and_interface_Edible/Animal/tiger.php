<?php
include_once (dirname(__FILE__). '/../AbstractClass/Animal.php');
class tiger extends Animal
{
    public function makeSound()
    {
        return 'tiger: gau gau';// TODO: Implement makeSound() method.
    }
}