<?php

namespace CobaLibrary\Belajar{

    class Customer{

        public function __construct(private string $name)
        {
        }

        public function sayHello(): string{
            return "My name is $this->name".PHP_EOL;
        }
    }
}