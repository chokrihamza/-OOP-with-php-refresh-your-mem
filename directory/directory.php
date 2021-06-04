<?php
// current directory
echo getcwd();
// change directory
chdir("../Date");
echo getcwd();
//
$d = dir(getcwd());
echo "Handle: " . $d->handle . "<br>";
echo "Path: " . $d->path . "<br>";

while (($file = $d->read()) !== false) {
  echo "filename: " . $file . "<br>";
}
$d->close();

$dir = "C:/xampp/htdocs/oop/";
$a = scandir($dir);
print_r($a);