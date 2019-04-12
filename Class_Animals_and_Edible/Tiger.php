<?php

 include_once (dirname(__FILE__)."/../Abstract_Animals/Animals.php");
class Tiger extends Animals
{
    public function makeSound()
    {
        return "Tiger: Grrrrrr";
    }
}


?>