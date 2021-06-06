<?php

class Manager 
{
    var $name;
    var $title;

    // 18
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }
    
    function sayHello($name):void
    {
        echo "Hi $name, my Name is Manager $this->name" .PHP_EOL;
    }
}


class VicePresident extends Manager
{
    // 18
    public function __construct(string $name = "")
    {
        // tidak wajib namun direkomendasikan
        parent::__construct($name, "VP");
    }
    function sayHello($name):void
    {
        echo "Hi $name, my Name is VP $this->name" .PHP_EOL;
    }
}