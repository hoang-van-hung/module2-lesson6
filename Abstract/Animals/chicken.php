<?php
include_once(dirname(__FILE__) . '/../AbstractClass/animal-class.php');
include_once(dirname(__FILE__) . '/../InterfaceClass/Ediable.php');
class  Chicken extends Animal {
    public function makeSound()
    {
        // TODO: Implement makeSound() method.
        return "Chicken : cluck- cluck!!!";
    }
    public function howToEat(){
        return "Could be fried";
    }
}