<?php
require ("Shape.php");

class Triangle extends Shape
{
   public $side1;
   public $side2;
   public $side3;

   public function __construct()
   {
      $this->side1 = $this->side2 = $this->side3 = 1;
   }

   public  function setSide($side1,$side2,$side3)
   {
      $this->side1 = (double)$side1;
      $this->side2 = (double)$side2;
      $this->side3 = (double)$side3;

   }

   /**
    * @return mixed
    */
   public function getSide3()
   {
      return $this->side3;
   }

   /**
    * @return mixed
    */
   public function getSide2()
   {
      return $this->side2;
   }

   /**
    * @return int
    */
   public function getSide1()
   {
      return $this->side1;
   }

   public function getArea()
   {
      $p = ($this->getSide1() + $this->getSide2() + $this->getSide3())/2;
      return pow($p * ($p - $this->getSide1())*($p - $this->getSide2())*($p- $this->getSide3()),0.5);
   }

   public function getPerimeter()
   {
      return ($this->getSide1() + $this->getSide2() + $this->getSide3());
   }

   public function toString()
   {
      return "a =".$this->getSide1().",b = ".$this->getSide2().",c = ".$this->getSide3()."<br>"."S=".$this->getArea().",P = ".$this->getPerimeter();
   }
}