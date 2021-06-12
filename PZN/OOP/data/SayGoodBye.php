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

class Person
{
    use  SayGoodBye, SayHello, HasName;
}