<?php

# Anonymous Class

class MyClass
{
    public function create (): object
    {
        return new class {};
    }
}

$my_class = new MyClass();
var_dump($my_class->create());