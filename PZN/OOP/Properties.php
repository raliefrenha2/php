<?php
// 5
require_once "data/Person.php";

$person = new Person("Romi A", "Bandung");
// $person->name = "Romi A";
// $person->address ="Bandung";
$person->country = "Indonesia";

var_dump($person);


echo "Nama : $person->name" .PHP_EOL;
echo "Alamat : $person->address" .PHP_EOL;
echo "Negara : $person->country" .PHP_EOL;


$person2 = new Person("Ibrahim");
// $person2->name = "Ibrahim";
// $person2->address ="Payakumbuh";
$person2->country = "Indonesia";

var_dump($person2);