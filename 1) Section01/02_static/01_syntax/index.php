<?php
# Static: 정적 메서드...
class A01
{
    public static string $msg = "Hello, Static!";

    public static function foo01(): string
    {
        return self::$msg;
        // ($this -> msg)는 사용할 수 없어!
    }
}

// 객체 (ex.$a01)를 선언해 줄 필요가 없음..

var_dump(A01::foo01());
echo "<br>";
var_dump(A01::$msg);
echo "<br>";

// Not recommended...
$class_name = "A01";
$a = new $class_name();
var_dump($a->foo01());