<?php

/*
 * 큰 개념으로는 상속만 제대로 이해하면 된다...
 */

# Property & Method (Attribute & Function)
class A
{
    public string $message = "Hello, Modern PHP!";

    public function foo(): string
    {
        return $this->message;
    }
}

$a = new A();
var_dump($a->foo());
echo "<br>";

# Inheritance
class B extends A
{
}

$b = new B();
//var_dump($b->foo());
// 객체 $b가 부모 클래스 (A)의 메서드인 foo()를 제한없이 가져다가 쓸 수 있다.

# In Function
function foo(A $a): string
{
    return $a->foo();
}

var_dump(foo($a));
echo "<br>";
var_dump(foo($b));
echo "<br>";

# Context
class C extends A
{
    public function foo(): string
    {
//        return new self();
        return new static();
//        return new parent();
    }
}

class D extends C
{
}

$d = new D();
var_dump($d->foo());
echo "<br>";

# Constant
class E
{
    const MESSAGE = "You sucks!";

    public function getConstant(): string
    {
        return self::MESSAGE;
    }

    public function getClassName(): string
    {
        return __CLASS__;
    }
}

$e = new E();

var_dump($e->getConstant());
echo "<br>";
var_dump(E::MESSAGE);
echo "<br>";
var_dump($e->getClassName());
echo "<br>";

# InstanceOf
$d = new D();
var_dump($d instanceof C);