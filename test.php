<?php
// formation sur les oop using php
class Cart
{
  // propeties 
  public $article = ["tomato", "avocado", "ships", "biscuts"];
  // methods
  function get_article()
  {
    echo "hi Client you want to know about you ?";
    include "form.html";
    echo $this->article[0] . "</br>";
    echo $this->article[1] . "</br>";;
    echo $this->article[2] . "</br>";;
    echo $this->article[3] . "</br>";;
  }
}

$shop_cart = new Cart();
var_dump($shop_cart);
echo "</br>";
var_dump($shop_cart->article);
function show($a)
{
  echo "<h1 style='color:lightblue;'>$a</h1>";
}
array_map('show', $shop_cart->article);

/// call a method in class
$shop_cart->get_article();













?>