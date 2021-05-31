<?php
class Voiture
{
  public $roue = 4;
  protected $path = "Chicago";
  private $user = "Sami";

  function voiture_details()
  {
    echo $this->roue . "<br/>";
    echo $this->user . "<br/>";
    echo $this->path;
  }
}
$bmw = new Voiture();
$bmw->voiture_details();
?>