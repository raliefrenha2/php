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
    echo "Hello Programmer $programmer->name" .PHP_EOL;
}