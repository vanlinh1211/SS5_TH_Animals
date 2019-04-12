<?php
include_once (dirname(__FILE__)."/../Abstract_Animals/Animals.php");
include_once (dirname(__FILE__)."/../InterFace_Edible/Edible.php");

class Chicken extends Animals implements Edible
{

    public function makeSound()
    {
        return "Chicken: oooooooo" . "\n";
    }

    public function howtoEat()
    {
        return "mo";
    }
}
