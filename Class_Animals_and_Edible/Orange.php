<?php

include_once dirname(__FILE__)."/../Abstract_Animals/Fruit.php";
class Orange extends Fruit
{
public function howtoEat()
{
    return "Orange cool";
}
}