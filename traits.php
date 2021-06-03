<?php
trait Cal
{
  public function add($a, $b)
  {
    echo $a + $b;
  }
  public function mul($a, $b)
  {
    echo $a * $b;
  }
  public function div($a, $b)
  {
    if ($b === 0 || $b === null) {
      echo "Devision by 0";
      return;
    }
    echo $a / $b;
  }
}

class TheWorldIsNotEnough
{
  use Cal;
  private ?int $a;
  private ?int $b;

  function __construct(?int $a = null, ?int $b = null)
  {
    $this->a = $a;
    $this->b = $b;
    echo "Add </br>";
    echo $this->add($this->a, $this->b) . "</br>";
    echo "mul </br>";
    echo  $this->mul($this->a, $this->b) . "</br>";
    echo "div </br>";
    echo $this->div($this->a, $this->b) . "</br>";
  }
}
$o = new TheWorldIsNotEnough(1, 10);