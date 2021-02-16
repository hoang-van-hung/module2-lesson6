<?php
include_once(dirname(__FILE__) . '/../AbstractClass/animal-class.php');
class Tiger extends Animal{
    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        return "Tiger : Roarrrr!!!";
    }
}