<?php

class Manager 
{
    var $name;
    
    function sayHello($name):void
    {
        echo "Hi $name, my Name is Manager $this->name" .PHP_EOL;
    }
}


class VicePresident extends Manager
{
    function sayHello($name):void
    {
        echo "Hi $name, my Name is VP $this->name" .PHP_EOL;
    }
}