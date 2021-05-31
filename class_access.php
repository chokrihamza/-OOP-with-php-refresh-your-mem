<?php
class Cars
{

  private $seat_count = 2;
  private $wheels = 5;

  function car_detail()
  {


    echo $this->seat_count;
  }
}
$bmw = new Cars();

//echo $bmw->wheel_count;
//echo $bmw->door_count; // we cannot access private prop from the outside
//echo $bmw->seat_count;// we cannot access protected prop from the outside
$bmw->car_detail();