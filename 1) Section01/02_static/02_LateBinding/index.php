<?php
# Static Binding
class A02
{
    public static function foo()
    {
        static::who();
    }

    public static function who()
    {
        var_dump(__CLASS__);
    }
}

class B02 extends A02
{
    public static function test()
    {
        parent::foo();
    }

    public static function who()
    {
        var_dump('Hello, Binding!');
        var_dump(__CLASS__);
    }
}

$b02 = new B02();
$b02->test();