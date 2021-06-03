<?php


class SomeClass
{
}
interface SomeInterface
{
}
trait SomeTrait
{
}

$class = (new class(10) extends SomeClass implements SomeInterface
{
  public $num;

  public function __construct($num)
  {
    $this->num = $num;
  }

  use SomeTrait;
});

echo $class->num;

// nested class

class A
{
  private $valeurA = 10;
  protected $valeurA1 = 20;

  public function get_class()
  {
    return new class($this->valeurA) extends A
    {
      private $valeurAnanymousClass;
      function __construct($valeurA1)
      {
        $this->valeurAnanymousClass = $valeurA1;
      }

      function show_sum()
      {
        return $this->valeurAnanymousClass + $this->valeurA1;
      }
    };
  }
}

echo (new A)->get_class()->show_sum();