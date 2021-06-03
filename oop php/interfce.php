<?php

// abstract class 
// a class that contains a abstact metho or prop,;
//example 

abstract class A
{

  abstract public function get_age(): float;
}

// if we instanciate that class A

class B extends A
{

  private $age = 10;

  function get_age(): float
  {
    return $this->age;
  }
}
class C extends A
{

  private $age = 20;

  function get_age(): float
  {
    return $this->age;
  }
}

$classB = new B();
echo $classB->get_age();