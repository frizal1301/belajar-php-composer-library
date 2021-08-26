<?php

namespace Programmer\Belajar;

class Customer {
    public function __construct(public string $name)
    {
        
    }

    public function sayHello($name) {
        echo "Hello $name, my name is $this->name" . PHP_EOL;
    }
}