<?php

use Cars as GlobalCars;

class Cars{

  function greeting(){

  }
  function greeting2(){

  }
  
  
}
$the_methods=get_class_methods('Cars');
// // $my_class=get_declared_classes();
 foreach($the_methods as $method){
  echo $method."</br>";
 }

?>