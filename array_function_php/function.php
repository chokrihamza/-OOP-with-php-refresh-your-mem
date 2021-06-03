<?php
class A
{
  public int $valeur = 10;

  function &get_valeur()
  {
    return $this->valeur;
  }
}

$a = new A();
$valeur = &$a->get_valeur();
echo $a->get_valeur();
echo $valeur;
$valeur = 100;
echo $a->get_valeur();

echo $a->valeur;