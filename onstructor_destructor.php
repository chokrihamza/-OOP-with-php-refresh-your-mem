<?php



class Cars
{
  public $wheels_count = 4;
  static $door_count = 4;

  function __construct()
  {
    //echo $this->wheels_count;
    echo self::$door_count++;
  }

  function __destruct()
  {
    //echo $this->wheels_count;
    echo "boooom";
  }
}

$bmw = new Cars();
$bmw = null;
$mercedes = new Cars();
$mercedes = null;





?>