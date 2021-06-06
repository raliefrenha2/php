<?php
// 16
require_once 'data/Manager.php';

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Romi";
$vp->sayHello("Santoso");