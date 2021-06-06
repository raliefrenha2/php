<?php

require_once "data/Person.php";

$person = new Person();
$person->name = "Romi";
$person->sayHello("Budi");

// var_dump($person);

$joko = new Person();
$joko->name = "Joko"; 
$joko->sayHello("Budi");

// var_dump($joko);

// 09 self keyword
$person ->info();
$joko->info();