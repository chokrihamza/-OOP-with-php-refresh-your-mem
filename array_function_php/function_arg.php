<?php

function a(?int $indice = null, ...$b)
{
  $sum = 0;
  foreach ($b as $k => $v) {

    echo $sum = $sum + $v;
  }
}

a(0, [2, 3, 4, 5, 6, 10, 10]);