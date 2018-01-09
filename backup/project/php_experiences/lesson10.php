<?php
class Car
{   
    public $maxSpeed;
 
    public function driveFast()
    {
        echo 'Едем '. $this->maxSpeed .'км/ч!';
        echo "\n";
    }
}

$myCar = new Car();
$myCar->maxSpeed = 120;

$myCar->driveFast();

echo "\n";



class MyNewCar
{

   public $carspeed;
   public function MyCar() 

   {  
      echo "\n";
      echo 'Моя машина едит '.$this->carspeed .'км/ч';

   }

}

$Car = new MyNewCar();
$Car->carspeed = 200;
$Car->MyCar();



class MyHouse
{
   public $househeight;
   public function House ()
   {  
      echo "\n";
      echo 'Высота моего дома '.$this->househeight.' метров!';
   }
}

$newflat = new MyHouse();
$newflat->househeight = 100;

$newflat->House();


class SuperFighter
{
   public $abilitytofly;
   public function Fly()
   {
      echo 'Мой звездолёт летит на '.$this->abilitytofly.' парсеков';
   }
}

$myfighter = new SuperFighter();
$myfighter->abilitytofly = 1000;
$myfighter->Fly();