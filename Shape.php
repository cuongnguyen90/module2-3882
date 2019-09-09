<?php


class Shape
{
   public $name;
   public $color;

   public function __construct($name)
   {
      $this->name = $name;
      $this->color = "blue";
   }

   public function show()
   {
      return "I am a shape. My name is $this->name";
   }

}
