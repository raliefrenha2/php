<?php 

// 22
require 'data/Animal.php';


use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "Luna";
$cat->run();

$dog = new Dog();
$dog->name = "Helly";
$dog->run();