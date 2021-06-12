<?php
namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Helo" . PHP_EOL;
        } else {
            echo "Helo $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait canRun
{
    public abstract function run(): void;
}

trait all
{
    // use canRun;
    use  SayGoodBye, SayHello, HasName, canRun {
        // trait function override
        // hello as private;
        // goodBye as private;
    }
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good Bye in Person" .PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" .PHP_EOL;
    }
}
class Person extends ParentPerson
{
    use all;
    // function di class ParentPerson di override oleh function yang di trait  
    public function run(): void
    {
        echo "Person {$this->name} is running." . PHP_EOL; 
    }

    // function dari trait di override function yang ada di class
    // public function goodBye(?string $name): void
    // {
    //     echo "Good Bye in Person" .PHP_EOL;
    // }

    // public function hello(?string $name): void
    // {
    //     echo "Hello in Person" .PHP_EOL;
    // }
}