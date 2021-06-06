<?php

require_once 'data/Category.php';


$caetgory = new Category();
$caetgory->setName("Handphone");
$caetgory->setExpensive(true);


echo "Name : {$caetgory->getName()}" .PHP_EOL;
echo "Expensive : {$caetgory->isExpensive()}" .PHP_EOL;