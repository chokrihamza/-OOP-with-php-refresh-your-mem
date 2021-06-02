<?php
spl_autoload_register(function ($class_name) {
  include $class_name . '.php';
});



$class1 = new Class1;
echo $class1->class1;
$class2 = new Class2;
echo $class2->class2;