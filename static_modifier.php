<?php



class Cars
{
  public $wheel_count = 4;
  static $door_count = 2;
  static function car_detail()
  {
    echo Cars::$door_count;
  }
}
$bmw = new Cars();
echo $bmw->wheel_count;
echo Cars::$door_count;
Cars::car_detail();