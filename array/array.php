<?php

$names = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
var_dump($names);
print_r(array_change_key_case($names, CASE_LOWER)); // it's a copy
print_r(array_chunk($names, 1, true));

//Get column of an array in array;
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin',
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith',
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe',
  )
);

print_r(array_column($a, 'id', 'id'));

// array combine array of keys=>array of value
$fname = array("Peter", "Ben", "Joe");
$age = array("35", "37", "43");
print_r(array_combine($fname, $age));
// array count value;
$a = array("A", "Cat", "Dog", "A", "Dog");

print_r(array_count_values($a));

// array diff function;
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");

print_r(array_diff($a1, $a2));

//
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "black", "g" => "purple");
$a3 = array("a" => "red", "b" => "black", "h" => "yellow");

print_r(array_diff($a1, $a2, $a3));

// diff assoc
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("a" => "red", "b" => "green", "c" => "blue");

$result = array_diff_assoc($a1, $a2);
print_r($result);

// array_diff_key

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "red", "c" => "blue", "d" => "pink");

$result = array_diff_key($a1, $a2);
print_r($result);

//array_diff_uassoc()
function myfunction($a, $b)
{
  if ($a === $b) {
    return 0;
  }
  return ($a > $b) ? -1 : 1;
}

$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("d" => "red", "b" => "green", "e" => "blue");

$result = array_diff_uassoc($a1, $a2, "myfunction");
print_r($result);

//array_diff_ukey
$a1 = array("a" => "red", "b" => "green", "c" => "blue");
$a2 = array("a" => "blue", "b" => "black", "e" => "blue");

function myfunction1($a, $b)
{
  return  $a === $b ? 0 : 1;
}

print_r(array_diff_ukey($a1, $a2, 'myfunction1'));

/// array fill 
$a = array_fill(1, 4, "hamza");
print_r($a);

//array fill keys
$keys = array("a", "b", "c", "d");
$a1 = array_fill_keys($keys, "jhon");
print_r($a1);

// array filter
$a1 = range(1, 50);

function testodd($var)
{
  return ($var & 1);
}

print_r(array_filter($a1, 'testodd'));

// array flip

$a = array('key1' => "val1", 'key2' => "val2", 'key3' => "val3", 'key4' => "val4");

print_r(array_flip($a));

// array intersect
$a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$a2 = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_intersect($a1, $a2);
print_r($result);
//array key  exist
$a = array("Volvo" => "XC90", "BMW" => "X5");
if (array_key_exists("Volvo", $a)) {
  echo "Key exists!";
} else {
  echo "Key does not exist!";
}
//array keys
$a = array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");
print_r(array_keys($a));

// array map
function myfunction2($v)
{
  return ($v * $v);
}

$a = array(1, 2, 3, 4, 5);
print_r(array_map("myfunction2", $a));
print_r($a);