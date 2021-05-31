<?php



class Cars
{
   var $wheels=4;
  function greeting(){
   return  "hello";
  }
}
class Trucks extends Cars{
 var $wheels=10;
}
$bmw=new Cars();

$tacoma=new Trucks();
echo $tacoma->wheels;


?>