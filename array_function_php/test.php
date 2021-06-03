<?php
//$a = 10;
function a()
{
  global $a;
  $a = 10;
  function b()
  {
    global $a;
    echo "hi there $a ";
  }
}

a();
b();
?>