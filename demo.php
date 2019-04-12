<?php
include_once "Class_Animals_and_Edible/Tiger.php";
include_once "Class_Animals_and_Edible/Chicken.php";
include_once "Class_Animals_and_Edible/Apple.php";
include_once "Class_Animals_and_Edible/Orange.php";

$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal){
    echo $animal->makeSound().'<br>';
    if ($animal instanceof Chicken){
        echo $animal->howtoEat() . '<br>';
    }
}

$fruits[0] = new Apple();
$fruits[1] = new Orange();

foreach ($fruits as $fruit ){
    echo $fruit -> howtoEat().'<br>';
}
?>


