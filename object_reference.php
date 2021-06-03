<?php
// reference in php
//
// ATTENTIONS WARNING
//the objects in php are not always passing by reference!!!!!!!???

class A
{
  public $foo = 1;
}

$a = new A;
$b = $a; // a and b are copies of the same identifier Okay $a=$b=$id
$b = 2;
echo $a->foo . "\n";

// lets see the reference 
$c = new A;
$d = &$c; // $c and $d are references
// ($c,$d) = <id>
$d->foo = 3;
echo $c->foo . "\n";

$e = new A;

function foo($obj)
{
  // ($obj) = ($e) = <id>
  $obj->foo = 2;
}

foo($e);
echo $e->foo . "\n";