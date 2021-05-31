<?php



class Cars
{
  static $wheels_count = 4;


  static function car_detail()
  {
    return  self::$wheels_count;
  }
}

class Trucks extends Cars
{

  static function display()
  {
    echo parent::car_detail();
  }
}

Trucks::display();