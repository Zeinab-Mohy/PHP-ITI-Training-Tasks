<?php

class fruit{
   public $color;
   public $size;
   private $price;
   const PI=4.13;

   public function print(){
      echo "color is ".$this->color;
   }
   public function change_methods($color,$size){
      $this->color=$color;
      $this->size=$size;
   }
   public function change_price($price){
      $this->price=sha1($price);
   }
}

class veg extends fruit{

}
$tomato=new veg();
$tomato->change_methods("red","123");

echo '<pre>';
print_r($tomato);
echo '<pre>';

$banana=new fruit();
$banana->change_methods("red","123");
$banana->change_price(520);
echo '<pre>';
print_r($banana);
echo '<pre>';


?>