<?php

class Person 
{
    // 08 Constant
    CONST AUTHOR = "Regzaa Putra Utama";
    // 05 Properties
    var $name;
    var $address;
    var $country = "Indonesia";
    
    // var string $name;
    // var ?string $address; PHP 7.4 ->Properties boleh null (nullable Properties) (5)
    // var  string $country;


    // 10
    // public function __construct(string $name, ?string $address)
    public function __construct($name, $address=null)
    {
        $this->name = $name;
        $this->address = $address;
    }
    // 06 FUnction
    // function sayHello(?string $name)
    function sayHello($name = null)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hello $name, my name is $this->name" .PHP_EOL;
        }
    }

    //  09 Self Keyword
    function info()
    {
        // echo "Author : " .Person::AUTHOR .PHP_EOL;
        echo "Author : " .self::AUTHOR .PHP_EOL;
    }

/*
https://docs.google.com/presentation/d/1gmLOCKyxyvnOVKHwhv-c7RuNlG69zfwcnX1ioPep3Do/edit#slide=id.ga20aa56cc7_0_224
*/
    public function __destruct()
    {
        echo "Objek Person $this->name is destroyed" . PHP_EOL;
    }
}

