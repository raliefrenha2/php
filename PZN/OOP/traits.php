<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("Jaka");
$person->hello("Joko");
$person->name = "Romi";

var_dump($person);