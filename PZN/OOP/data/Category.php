<?php

class Category
{
    private $name;
    private $expensive;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name):void
    {
        if (trim($name) != "") {
            $this->name = $name;
        }
    }

    public function isExpensive(): bool
    {
        return $this->expensive;
    }

    public function setExpensive(bool $expensive):void
    {
        $this->expensive = $expensive;
    }
}