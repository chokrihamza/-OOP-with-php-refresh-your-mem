<?php

function recursion($a)
{
  if ($a < 20000) {
    echo "$a\n";
    recursion($a + 1);
  }
}

recursion(2000);