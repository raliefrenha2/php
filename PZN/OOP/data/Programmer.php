<?php 

class Programmer {

    public $name;

    public function __construct(string $name)
    {
        $this->name =$name;
    }

}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company 
{
    // public Programmer $programmer;
    public $programmer;
}


function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Back End Programmer $programmer->name" .PHP_EOL; 
    } elseif ($programmer instanceof FrontendProgrammer) {
        echo "Hello Front End Programmer $programmer->name" .PHP_EOL; 
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" .PHP_EOL;
    }
}