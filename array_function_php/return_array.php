<?php
// Destructuring php

function array1()
{
  return array(1, 2, 3, 4);
}

list($a, $b, $c, $d) = array1();
echo $a;
echo $b;
echo $c;
echo $d;