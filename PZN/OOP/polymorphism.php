<?php 
// 19
require_once 'data/Programmer.php';
require_once 'data/Manager.php';


$company = new Company();
$company->programmer = new Programmer("Romi");

var_dump($company);

$company->programmer = new BackendProgrammer('Romi');
var_dump($company);

$company->programmer = new FrontendProgrammer('Romi');
var_dump($company);

$company->programmer = new Manager('Romi'); // ini belum error, karena belum bisa menerapkan properti tipe pada php 7.3
var_dump($company);


sayHelloProgrammer(new Programmer("Romi"));
sayHelloProgrammer(new BackendProgrammer("Romi"));
sayHelloProgrammer(new FrontendProgrammer("Romi"));
// sayHelloProgrammer(new Manager("Romi")); error
