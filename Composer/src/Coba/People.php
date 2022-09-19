<?php

namespace Code\Coba {

    class People
    {
        public function __construct(private string $name)
        {

        }

        public function sayHello(string $name): void{
            echo "Hello $name, my name is $this->name".PHP_EOL;
        }
    }

}