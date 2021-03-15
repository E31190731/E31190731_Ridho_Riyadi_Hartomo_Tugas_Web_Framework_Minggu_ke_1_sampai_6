<?php

#Class
class car {

    #Properties
    public $comp;
    public $color = 'beige';
    public $hasSunRoof = true;

    #Method
    public function hello(){
        return "beep";
    }
}

#Objects
$bmw = new car ();
$mercedes = new car ();

#Get Values
echo $bmw -> color;
echo $mercedes -> color;

#Set Values
$bmw -> color = 'blue';
$bmw -> comp = "BMW";
$mercedes -> comp = "Mercedez Benz";

echo $bmw -> color;
echo $mercedes -> color;
echo $mercedes -> comp;

#Methods get a beep
echo $bmw -> hello();
echo $mercedes -> hello();
?>