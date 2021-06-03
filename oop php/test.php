<?php

class Base
{
  const x = 10;
  const y = 10;

  function get_const()
  {
    echo $this::x;
    echo $this::y;
  }
}

$base = new Base();
$base->get_const();





?>