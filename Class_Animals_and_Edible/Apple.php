<?php

include_once dirname(__FILE__)."/../Abstract_Animals/Fruit.php";
class Apple extends Fruit
{
    public function howtoEat()
    {
        return "Apple hot";
    }
}